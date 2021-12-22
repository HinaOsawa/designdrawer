<?php
// テーマ名までの絶対パス＋スラッシュ付き関数
function mypath(){
  return get_theme_file_uri() . '/';
}
add_action('after_setup_theme',function(){
  //<title>表示
  add_theme_support('title-tag');
});
add_theme_support('post-thumbnails');

//ウィジェット
function sample_widgets(){
  register_sidebar(array(
  'name' => '共通サイドバー',/* ←追加したいウィジェットの名前 */
  'description' => 'サイドバーウィジェット',/* ←追加したいウィジェットの概要 */
  'id' => 'sidebar',  /* ←追加したいウィジェットのID */
  'before_widget' => '<div>', /* ←追加したいウィジェットを囲う開始タグ */
  'after_widget' => '</div>', /* ←追加したいウィジェットを囲う閉じタグ */
  'before_title' => '<h3>', /* ←追加したいウィジェットのタイトルを囲う開始タグ */
  'after_title' => '</h3>' /* ←追加したいウィジェットのタイトルを囲う閉じタグ */
  ));
  }
add_action('widgets_init', 'sample_widgets');