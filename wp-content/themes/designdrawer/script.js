
//ハンバーガーメニュー
$('.menu-trigger').on('click',function(){
  $('.menu-trigger').toggleClass('active');
  $('nav').fadeToggle(500);
});
//windowサイズ変更不具合修正
$(window).resize(function(){
  var w = $(window).width();
  var x = 600;
  if (w <= x) {
      $('.head-nav').css({
          display: 'none'
      });
      $('footer .nav-child').css({
        display: 'none'
    });
  } else {
      $('nav').css({
          display: 'block'
      });
      $('footer .nav-child').css({
        display: 'block'
    });
  }
});

//ヘッダードロップダウンメニュー
$(function () {
  var ua = navigator.userAgent;
  if ((ua.indexOf('iPhone') > 0 || ua.indexOf('Android') > 0) && ua.indexOf('Mobile') > 0) {
      // スマートフォン用処理
      $('.nav-parent').children('li').on("click", function() {
        $(this).children('.nav-child').stop().slideToggle(200);
      });
  } else if (ua.indexOf('iPad') > 0 || ua.indexOf('Android') > 0) {
      // タブレット用処理
      $('.nav-parent').children('li').on("click", function() {
        $(this).children('.nav-child').stop().slideToggle(200);
      });
  } else {
      // PC用処理
      $('.nav-parent').children('li').hover(function() {
        $(this).children('.nav-child').stop().slideToggle(200);
    });
  }
});

//フッタードロップダウンメニュー
$(function () {
  var ua = navigator.userAgent;
  if ((ua.indexOf('iPhone') > 0 || ua.indexOf('Android') > 0) && ua.indexOf('Mobile') > 0) {
      // スマートフォン用処理
        //フッタードロップダウンメニュー
    $('.nav-parent-f').children('li').on("click", function() {
      $(this).children('.nav-child').stop().slideToggle(200);
    });
  } else if (ua.indexOf('iPad') > 0 || ua.indexOf('Android') > 0) {
      // タブレット用処理
    $('.nav-parent-f').children('li').on("click", function() {
      $(this).children('.nav-child').stop().slideToggle(200);
    });
  } else;
});

//topに戻るボタン
$('#page_top').click(function () {
  $('body,html').animate({
    scrollTop: 0
  }, 500);
  return false;
  });