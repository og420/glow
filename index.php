<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>
<header id="glow_header">
  <div class='header_logo'>
    <img src='http://placehold.jp/150x50.png' alt=''>
  </div>
  <div class='header_search_box'>
    <input type='text'>
    <span>🔍</span>
  </div>
  <div class='header_burger_menu'>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>
</header>
<section id='main'>
  <div class='mv_slide'></div>
  <div class='mv_posts_container'>
    <div class='mv_post_box'></div>
    <div class='mv_post_box'></div>
    <div class='mv_post_box'></div>
    <div class='mv_post_box'></div>
  </div>
</section>
<section id='news'>
  <div class='news_left_container'></div>
  <div class='news_right_container'></div>
</section>
<section id='news_posts'>
  <h1 class='news_heading'></h1>
  <div class='news_posts_container'>
    <div class='news_post_box'></div>
    <div class='news_post_box'></div>
    <div class='news_post_box'></div>
  </div>
  <div class='posts_read_more'>「栽培の記事をもっと見る」</div>
</section>
<section id='medical'></section>
<section id='medical_post'></section>
<section id='about_us'></section>
<?php
get_footer();