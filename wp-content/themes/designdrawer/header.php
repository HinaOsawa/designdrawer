<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= get_stylesheet_uri(); ?>">
  <link rel="stylesheet" href="style.css">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header>
    <div class="top-bar">
      <div class="top-bar-inner">
        <a href=""><img src="<?= mypath(); ?>images/top-tw.png" alt=""></a>
        <a href=""><img src="<?= mypath(); ?>images/top-fb.png" alt=""></a>
      </div>
    </div>

    <div class="nav-block">
      <div class="sp-flex">
        <h1>
          <a href="<?php the_permalink(10); ?>">
            <img src="<?= mypath(); ?>images/DD-logo.png" alt="">
          </a>
        </h1>
        <button class="menu-trigger">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
      <nav class="head-nav">
        <ul class="nav-parent">
          <li><a href="<?php the_permalink(10); ?>">TOP <span>トップ</span></a></li>
          <li><a href="<?php the_permalink(7); ?>">BLOG <span>ブログ</span></a></li>
          <li><a class="none-a" href="">ABOUT <span>私たちについて</span></a>
            <ul class="nav-child">
              <li><a href="<?php the_permalink(5); ?>">私たちについて</a></li>
              <li><a href="">会社概要</a></li>
              <li><a href="">ニュース</a></li>
            </ul>
          </li>
          <li><a class="none-a" href="">SERVICE <span>サービス</span></a>
            <ul class="nav-child">
              <li><a href="">Webデザイン</a></li>
              <li><a href="">システム開発</a></li>
              <li><a href="">マーケティング</a></li>
              <li><a href="">運用・保守</a></li>
            </ul>
          </li>
          <li><a class="none-a" href="">WORK <span>制作実績</span></a>
            <ul class="nav-child">
              <li><a href="">コーポレート</a></li>
              <li><a href="">ECサイト</a></li>
              <li><a href="">アプリ</a></li>
            </ul>
          </li>
          <li><a class="none-a" href="">RECRUIT <span>採用情報</span></a>
            <ul class="nav-child">
              <li><a href="">新卒採用</a></li>
              <li><a href="">中途採用</a></li>
              <li><a href="">FAQ</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </header>

