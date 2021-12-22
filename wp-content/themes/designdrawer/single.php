<?php get_header(); ?>
<div class="page-content">

  <article class="single">
      <?php 
          if( have_posts() ): while( have_posts() ): the_post(); ?>
          <h2><?php the_title(); ?></h2>

          <time datetime="<?= esc_attr( get_the_date(DATE_W3C)); ?>">
              <?=esc_html( get_the_date() ); ?>
          </time>

          <?php the_content(); ?>
          <!-- <?php the_category(); ?> -->
          <?php endwhile; endif; ?>
          <!-- <?php the_post_navigation(); ?> -->

    <ul class="post-nav" id="navigation">
      <li>
        <?php
        $prevPost = get_previous_post(true); //前の記事データを取得
        $prevThumbnail = get_the_post_thumbnail($prevPost->ID, array(60,60) ); //サムネイル取得
        echo $prevthumbnail;
        previous_post_link( '%link', $prevThumbnail.'%title' ); //出力
        ?>
      </li>
      <li>
        <?php
        $nextPost = get_next_post(true); //次の記事データを取得
        $nextThumbnail = get_the_post_thumbnail($nextPost->ID, array(60,60) ); //サムネイル取得
        echo $nextthumbnail;
        next_post_link( '%link', $nextThumbnail.'%title' ); //出力
        ?>
      </li>
    </ul>
  </article>
</div>

    <?php get_footer(); ?>