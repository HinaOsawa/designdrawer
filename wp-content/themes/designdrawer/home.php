<?php get_header(); ?>

<!-- BLOGページ内容 -->
<div class="page-content blog">
<h2>BLOG</h2>

<div class="post-title">
  <h3>LATEST POST
    <span>最新記事</span>
</h3>
<div class="bar"></div>
</div>
<div class="post-list">
  <?php 
    if( have_posts() ): while( have_posts() ): the_post(); ?>
    <article <?php post_class(); ?>>
    <a href="<?php the_permalink(); ?>">
      <?php if( has_post_thumbnail() ): ?>
          <?php the_post_thumbnail(); ?>
        <?php endif; ?>
      <p><?php the_title(); ?></p>
    </a>
  </article>
    <?php endwhile; endif; ?>
</div><!-- END mypostlist -->

<?php
$categories = get_categories();
foreach($categories as $category) :
?>
<div class="post-title">
  <h3><?php echo $category->cat_name; ?>  CATEGORY
  <span>カテゴリー別一覧</span>
</h3>
<div class="bar"></div>
</div>

<div class="post-list">
  <?php
query_posts('showposts=6&cat='.$category->cat_ID);
if (have_posts()) : while (have_posts()) : the_post();
?>

<article <?php post_class(); ?>>
  <a href="<?php the_permalink() ?>">
  <?php if( has_post_thumbnail() ): ?>
      <?php the_post_thumbnail(); ?>
    <?php endif; ?>
  <p><?php the_title(); ?></p>
</a>
</article>
<?php endwhile; endif; ?>
</div><!-- END mypostlist -->

<?php endforeach; ?>


</div>
<?php get_footer(); ?>