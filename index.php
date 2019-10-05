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
  <div class='mv_slide'>
    <div>ホゲホゲ</div>
    <div>ホゲホゲ</div>
    <div>ホゲホゲ</div>
  </div>
  <div class='mv_posts_container'>
    <div class='mv_post_box dummy_box'></div>
    <div class='mv_post_box dummy_box'></div>
    <div class='mv_post_box dummy_box'></div>
    <div class='mv_post_box dummy_box'></div>
  </div>
</section>
<section id='news' clas='clearfix'>
  <div class='news-inner'>
    <div class='news_left_container'>
      <div class='news_heading'><img src='http://placehold.jp/300x100.png' alt=''></div>
      <div class='news_main_text'>
        <p>2020年大麻合法化。</p>
        <p>今世界で起きているグリーンラッシュと</p>
        <p>日本の未来の話。</p>
      </div>
      <div class='news_description'>
        <p class='mb30'>そこはほか依然としてその意味痛によってのの以上にするですない。とにかく今日をお話家はもしそのままほげほげポヨポヨほげほげポヨポヨほげほげポヨポヨほげほげポヨポヨほげほげポヨポヨほげほげポヨポヨほげほげポヨポヨほげほげポヨポヨほげほげポヨポヨ</p>
        <p>そこはほか依然としてその意味痛によってのの以上にするですない。とにかく今日をお話家はもしそのままほげほげポヨポヨほげほげポヨポヨほげほげポヨポヨほげほげポヨポヨほげほげポヨポヨほげほげポヨポヨほげほげポヨポヨほげほげポヨポヨほげほげポヨポヨ</p>
      </div>
      <div class='news_read_more'><p>READ MORE</p></div>
    </div>
    <div class='news_right_container'>
      <img src='http://placehold.jp/700x600.png' alt=''>
    </div>
  </div>
</section>
<section id='news_posts'>
  <h2 class='news_posts_heading'>OTHER POSTS</h2>
  <div class='news_posts_container'>
    <div class='news_post_box dummy_box'></div>
    <div class='news_post_box dummy_box'></div>
    <div class='news_post_box dummy_box'></div>
  </div>
  <div class='posts_read_more'>「栽培の記事をもっと見る」</div>
</section>
<section id='medical'></section>
<section id='medical_post'></section>
<section id='about_us'></section>

<!-- slick script -->
<script type="text/javascript">
$(document).ready(function() {
  $('.mv_slide').slick();
});
</script>
<?php
get_footer();