<?php get_header(); ?>

<div class="container">
  <div class="mv">
      <div>
        <img src="<?= mypath(); ?>images/mv-1.png" alt="">
      </div>
      <div>
        <p class="name">Design Drawer</p>
        <img src="<?= mypath(); ?>images/DD-logo.png" alt="">
        <p>未来へつながる<br>Webデザイン</p>
      </div>
      <div>
        <img src="<?= mypath(); ?>images/mv-2.png" alt="">
      </div>
  </div>
  
    <section class="post">
      <div class="post-title">
        <h2>
          POPULAR POSTS
          <span>人気記事はこちら</span>
        </h2>
        <span class="bar"></span>
      </div>
      <div class="post-list">
        <?php 
			$mypost = get_posts([
        'numberposts' => 6,
				'post_type' => 'post'
			]);
			if($mypost):foreach($mypost as $post):setup_postdata($post)
			?>
      <article <?php post_class(); ?>>
			<!-- ここにループ処理 -->
			<a href="<?php the_permalink(); ?>">
      <?php if( has_post_thumbnail() ): ?>
          <?php the_post_thumbnail(); ?>
        <?php endif; ?>
            <p><?php the_title(); ?></p>
      </a>
    </article>
			<?php endforeach;wp_reset_postdata();endif;?>
    </div><!-- END postlist -->
    </section>
</div>
    <?php get_footer(); ?>