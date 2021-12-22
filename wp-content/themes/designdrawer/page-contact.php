<?php get_header(); ?>

<div class="page-content">
    <h2>CONTACT</h2>
    <div class="contact-form">
      <?php 
        if( have_posts() ): while( have_posts() ): the_post(); ?>
        <article <?php post_class(); ?>>
        <!-- 本文表示 -->
        <?php the_content(); ?>
        </article>
        <?php endwhile; endif; ?>
    </div>
</div>

<?php get_footer(); ?>
