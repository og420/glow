<?php
get_header();
?>
<section id='main'>
  <div class='mv_slide'>
    <?php
        $arg = array(
                  'posts_per_page' => 3, // 表示する件数
                  'orderby' => 'date', // 日付でソート
                  'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
                  'category_name' => 'mv_slide' // 表示したいカテゴリーのスラッグを指定
              );
        $posts = get_posts( $arg );
        if( $posts ): ?>
        <?php
            foreach ($posts as $post):
              setup_postdata($post); ?>
              <div>
                <div class="mv_slide_bg">
                  <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php
                    $thumbID = get_post_thumbnail_id();
                    $alt = get_post_meta($thumbID, '_wp_attachment_image_alt', true);
                    echo $alt;
                  ?>">
                </div>
                <div class="mv_slide_content">
                  <p class="mv_slide_welcomeMessage">
                    WELCOME TO <span>GLOW</span>
                  </p>
                  <h2 class='mv_slide_text'>
                    <a href="<?php the_permalink(); ?>">
                      <?php the_title(); ?>
                    </a>
                  </h2>
                  <div class="mv_slide_readMore">
                    <div></div>
                    <a href="<?php the_permalink(); ?>">READ MORE</a>
                  </div>
                </div>
              </div>
      <?php endforeach; ?>
      <?php
        endif;
        wp_reset_postdata();
      ?>
  </div>
  <div class='mv_posts_container'>
    <?php
      $args = array(
        'posts_per_page' => 4 // 表示件数の指定
      );
      $posts = get_posts( $args );
      foreach ( $posts as $post ): // ループの開始
      setup_postdata( $post ); // 記事データの取得
    ?>
    <div style="background: url(<?php the_post_thumbnail_url('medium'); ?>);" class='mv_post_box'>
      <div class='mv_post_info'>
        <?php the_category(); ?>
        <p class="mv_post_title mb10"><?php the_title(); ?></p>
        <p class="mv_post_date"><?php the_date(); ?></p>
      </div>
    </div>
    <?php
      endforeach; // ループの終了
      wp_reset_postdata(); // 直前のクエリを復元する
    ?>
  </div>
</section>
<section id='news' class='clearfix'>
  <div class='news-inner'>
    <div class='news_left_container'>
      <div class='news_heading'><span class="black_stroke">N</span>EWS</div>
      <div class='news_main_text'>
        <p>2020年大麻合法化。</p>
        <p>今世界で起きているグリーンラッシュと</p>
        <p>日本の未来の話。</p>
      </div>
      <div class='news_description'>
        <p class='mb30'>そこはほか依然としてその意味痛によってのの以上にするですない。とにかく今日をお話家はもしそのままほげほげポヨポヨほげほげポヨポヨほげほげポヨポヨほげほげポヨポヨほげほげポヨポヨほげほげポヨポヨほげほげポヨポヨほげほげポヨポヨほげほげポヨポヨ</p>
        <p>そこはほか依然としてその意味痛によってのの以上にするですない。とにかく今日をお話家はもしそのままほげほげポヨポヨほげほげポヨポヨほげほげポヨポヨほげほげポヨポヨほげほげポヨポヨほげほげポヨポヨほげほげポヨポヨほげほげポヨポヨほげほげポヨポヨ</p>
      </div>
      <div class='news_read_more'>
        <p>READ MORE</p>
      </div>
    </div>
    <div class='news_right_container'>
      <img src="<?php echo get_template_directory_uri(); ?>/imgs/weed-politics.png" alt=''>
    </div>
  </div>
</section>
<section id='news_posts'>
  <div class='other_posts_inner news_posts_inner'>
    <h2 class='other_posts_heading'>
      <span class="white_stroke">O</span>THER POSTS
    </h2>
    <div class='other_posts_container'>
      <?php
        $arg = array(
                  'posts_per_page' => 3, // 表示する件数
                  'orderby' => 'date', // 日付でソート
                  'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
                  'category_name' => 'news' // 表示したいカテゴリーのスラッグを指定
              );
        $posts = get_posts( $arg );
        if( $posts ): ?>
        <?php
            foreach ( $posts as $post ) :
              setup_postdata( $post ); ?>
            <div class='other_post_box'>
              <img src="<?php the_post_thumbnail_url('medium'); ?>" alt='' class='other_post_img'>
              <div class='other_post_info_box'>
                <?php the_category(); ?>
                <h2 class='other_post_title mb10'><?php the_title(); ?></h2>
                <div class='other_post_datetime'><?php the_date(); ?></div>
              </div>
            </div>
      <?php endforeach; ?>
      <?php
        endif;
        wp_reset_postdata();
      ?>
    </div>
    <div class='other_posts_read_more'>
      <div class='other_post_read_more_btn'>「栽培の記事をもっと見る」</div>
    </div>
  </div>
</section>
<section id='medical'>
  <div class='medical-inner'>
    <div class='medical_left_container'>
      <img src="<?php echo get_template_directory_uri(); ?>/imgs/medical-weed.png" alt=''>
    </div>
    <div class='medical_right_container'>
      <div class='medical_heading'><span class="black_stroke">M</span>EDICAL</div>
      <div class='medical_main_text'>
        <p>2020年大麻合法化。</p>
        <p>今世界で起きているグリーンラッシュと</p>
        <p>日本の未来の話。</p>
      </div>
      <div class='medical_description'>
        <p class='mb30'>そこはほか依然としてその意味痛によってのの以上にするですない。とにかく今日をお話家はもしそのままほげほげポヨポヨほげほげポヨポヨほげほげポヨポヨほげほげポヨポヨほげほげポヨポヨほげほげポヨポヨほげほげポヨポヨほげほげポヨポヨほげほげポヨポヨ</p>
        <p>そこはほか依然としてその意味痛によってのの以上にするですない。とにかく今日をお話家はもしそのままほげほげポヨポヨほげほげポヨポヨほげほげポヨポヨほげほげポヨポヨほげほげポヨポヨほげほげポヨポヨほげほげポヨポヨほげほげポヨポヨほげほげポヨポヨ</p>
      </div>
      <div class='medical_read_more'>
        <p>READ MORE</p>
      </div>
    </div>
  </div>
</section>
<section id='medical_post'>
  <div class='other_posts_inner medical_posts_inner'>
    <h2 class='other_posts_heading'>
      <span class="white_stroke">O</span>THER POSTS
    </h2>
    <div class='other_posts_container'>
      <?php
        $arg = array(
                  'posts_per_page' => 3, // 表示する件数
                  'orderby' => 'date', // 日付でソート
                  'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
                  'category_name' => 'medical' // 表示したいカテゴリーのスラッグを指定
              );
        $posts = get_posts( $arg );
        if( $posts ): ?>
        <?php
            foreach ( $posts as $post ) :
              setup_postdata( $post ); ?>
            <div class='other_post_box'>
              <img src="<?php the_post_thumbnail_url('medium'); ?>" alt='' class='other_post_img'>
              <div class='other_post_info_box'>
                <?php the_category(); ?>
                <div class='other_post_title mb10'><?php the_title(); ?></div>
                <div class='other_post_datetime'><?php the_date(); ?></div>
              </div>
            </div>
      <?php endforeach; ?>
      <?php
        endif;
        wp_reset_postdata();
      ?>
    </div>
    <div class='other_posts_read_more'>
      <div class='other_post_read_more_btn'>「栽培の記事をもっと見る」</div>
    </div>
  </div>
</section>
<section id='about_us'>
  <div class='about_us-inner'>
    <h2 class='about_us_heading'>
      <span class="white_stroke">A</span>BOUT US
    </h2>
    <div class='about_us_main_container'>
      <h3>大麻合法化の是非について考えることは、<br>あなた自身の幸福について考えることだ</h3>
      <h5 class="mb30">誤解を恐れずに問いたい…この国に住む私たちは、今とても不幸なんじゃないか？</h5>
      <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
      <p class='mb70'>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
      <h4 class='mb30'>だからこそ我々『GreenTimes』は<br>この国の民主主義を再機能させたい</h4>
      <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
      <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
      <div class='about_us_bottom_content'>
        <img src="<?php echo get_template_directory_uri(); ?>/imgs/logo.png" alt=''>
        <div class='about_us_read_more'>
          <p>READ MORE</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- slick script -->
<script type="text/javascript">
$(document).ready(function() {
  $('.mv_slide').slick();
});
</script>
<?php
get_footer();