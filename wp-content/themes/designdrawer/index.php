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
      <article>
        <div class="post-thumbnail"></div>
        <div class="post-thumbnail"></div>
        <div class="post-thumbnail"></div>
      </article>
    </section>
    <?php get_footer(); ?>