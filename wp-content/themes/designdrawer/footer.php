  <div class="container">
    <section class="contact">
      <h2><a href="<?php the_permalink(85); ?>">CONTACT US<span>webサイトのご相談・お見積もりはこちら</span></a></h2>
      <img src="<?= mypath(); ?>images/contact.png" alt="">
    </section>
  
    <div class="sns">
      <p>FOLLOW US ON OUR SNS</p>
      <div class="sns-icon">
        <a href=""><img src="<?= mypath(); ?>images/sns-tw.png" alt=""></a>
        <a href=""><img src="<?= mypath(); ?>images/sns-fb.png" alt=""></a>
      </div>
    </div>
  </div>

<div id="page_top"><a href="#"></a></div>

  <footer>
    <div class="pc-flex">
    <nav>
        <ul class="nav-parent-f">
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
      <div class="footer-front">
        <img src="<?= mypath(); ?>images/DD-logo.png" alt="">
          <p>Design Drawer株式会社</p>
          <p>東京都品川区○○5-10</p>
          <p>BBビル２F</p>
      </div>
    </div>
    
    <div class="footer-back">
      <p class="policy">
        <a href="<?php the_permalink(85); ?>">お問い合わせ</a>｜<a href="">セキュリティポリシー</a>|<a href="">プライバシーポリシー</a>
      </p>
      
        <p>
          <small>Copyright &copy; 2021 Design Drawer</small>
        </p>
    </div>
  </footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="<?= mypath(); ?>script.js"></script>
<?php wp_footer(); ?>
</body>
</html>