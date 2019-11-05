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
                  'tag' => 'mv_slide' // 表示したいカテゴリーのスラッグを指定
              );
        $posts = get_posts( $arg );
        if( $posts ): ?>
          <?php foreach ($posts as $post):
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
        'posts_per_page' => 4, // 表示件数の指定
        'orderby' => 'date', // 日付でソート
        'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
      );
      $posts = get_posts( $args );
      foreach ( $posts as $post ): // ループの開始
      setup_postdata( $post ); // 記事データの取得
    ?>
      <div style="background: url(<?php the_post_thumbnail_url('large'); ?>);" class='mv_post_box'>
        <div class='mv_post_info'>
          <?php the_category(); ?>
          <p class="mv_post_title mb10">
            <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
            </a>
          </p>
          <p class="mv_post_date"><?php the_time('Y/m/d'); ?></p>
        </div>
      </div>
      <?php endforeach; //ループの終了
      wp_reset_postdata(); // 直前のクエリを復元する
      ?>
  </div>
</section>
<section id='pcA' class='clearfix'>
  <div class='pcA-inner'>
    <?php
      $arg = array(
                'posts_per_page' => 1, // 表示する件数
                'orderby' => 'date', // 日付でソート
                'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
                'category_name' => 'politics-legal' // 表示したいカテゴリーのスラッグを指定
            );
      $posts = get_posts( $arg );
      if( $posts ): ?>
        <?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
          <div class='pcA_left_container'>
            <div class='pcA_heading'><span class="black_stroke">P</span>OLITICS</div>
            <div class='pcA_main_text'>
              <p><?php the_title(); ?></p>
            </div>
            <div class='pcA_description'>
              <p><?php the_excerpt(); ?></p>
            </div>
            <div class='pcA_read_more'>
              <a href="<?php the_permalink(); ?>">READ MORE</p>
            </div>
          </div>
          <div class='pcA_right_container'>
            <img src="<?php the_post_thumbnail_url('large'); ?>" alt=''>
          </div>
      <?php endforeach; ?>
    <?php endif;
    wp_reset_postdata(); ?>
  </div>
</section>
<section id='pcA_posts' class="js-pcA_posts">
  <div class='other_posts_inner pcA_posts_inner'>
    <h2 class='other_posts_heading'>
      <span class="white_stroke">O</span>THER POSTS
    </h2>
    <div class='other_posts_container'>
      <?php
        $arg = array(
                  'posts_per_page' => 4, // 表示する件数
                  'offset'=> 1, // カテゴリ部分で1記事表示しているのでオフセットする
                  'orderby' => 'date', // 日付でソート
                  'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
                  'category_name' => 'politics-legal' // 表示したいカテゴリーのスラッグを指定
              );
        $cat = get_category_by_slug($arg['category_name']);
        $posts = get_posts( $arg );
        if( $posts ): ?>
        <?php
            foreach ( $posts as $post ) :
              setup_postdata( $post ); ?>
            <div class='other_post_box'>
              <div class="other_post_img">
                <img src="<?php the_post_thumbnail_url('large'); ?>" alt=''>
              </div>
              <span class="other_post_category">
                <?php
                  $postcat = get_the_category();
                  echo $postcat[0]->name;
                ?>
              </span>
              <div class='other_post_info_box'>
                <div class='other_post_title mb10'>
                  <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                  </a>
                </div>
                <div class='other_post_datetime'><?php the_time('Y/m/d'); ?></div>
              </div>
            </div>
      <?php endforeach; ?>
      <?php
        endif;
        wp_reset_postdata();
      ?>
    </div>
    <div class='other_posts_read_more'>
    <a href="<?php echo get_category_link( $cat->cat_ID); ?>" class='other_post_read_more_btn'>「<?php echo get_cat_name($cat->cat_ID);?>」の記事をもっと見る</a>
    </div>
  </div>
</section>
<section id='pcB'>
  <div class='pcB-inner'>
    <?php
      $arg = array(
                'posts_per_page' => 1, // 表示する件数
                'orderby' => 'date', // 日付でソート
                'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
                'category_name' => 'health-science' // 表示したいカテゴリーのスラッグを指定
            );
      $posts = get_posts( $arg );
      if( $posts ): ?>
        <?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
          <div class='pcB_left_container'>
            <img src="<?php the_post_thumbnail_url('large'); ?>" alt=''>
          </div>
          <div class='pcB_right_container'>
            <div class='pcB_heading'><span class="black_stroke">M</span>EDICAL</div>
            <div class='pcB_main_text'>
              <p><?php the_title(); ?></p>
            </div>
            <div class='pcB_description'>
              <p><?php the_excerpt(); ?></p>
            </div>
            <div class='pcB_read_more'>
              <a href="<?php the_permalink(); ?>">READ MORE</p>
            </div>
          </div>
      <?php endforeach; ?>
    <?php endif;
    wp_reset_postdata(); ?>
  </div>
</section>
<section id='pcB_posts' class="js-pcB_posts">
  <div class='other_posts_inner pcB_posts_inner'>
    <h2 class='other_posts_heading'>
      <span class="white_stroke">O</span>THER POSTS
    </h2>
    <div class='other_posts_container'>
      <?php
        $arg = array(
                  'posts_per_page' => 4, // 表示する件数
                  'offset'=> 1, // カテゴリ部分で1記事表示しているのでオフセットする
                  'orderby' => 'date', // 日付でソート
                  'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
                  'category_name' => 'health-science' // 表示したいカテゴリーのスラッグを指定
              );
        $cat = get_category_by_slug($arg['category_name']);
        $posts = get_posts( $arg );
        if( $posts ): ?>
        <?php
            foreach ( $posts as $post ) :
              setup_postdata( $post ); ?>
            <div class='other_post_box'>
              <div class="other_post_img">
                <img src="<?php the_post_thumbnail_url('large'); ?>" alt=''>
              </div>
              <span class="other_post_category">
                <?php
                  $postcat = get_the_category();
                  echo $postcat[0]->name;
                ?>
              </span>
              <div class='other_post_info_box'>
                <div class='other_post_title mb10'>
                  <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                  </a>
                </div>
                <div class='other_post_datetime'><?php the_time('Y/m/d'); ?></div>
              </div>
            </div>
      <?php endforeach; ?>
      <?php
        endif;
        wp_reset_postdata();
      ?>
    </div>
    <div class='other_posts_read_more'>
    <a href="<?php echo get_category_link( $cat->cat_ID); ?>" class='other_post_read_more_btn'>「<?php echo get_cat_name($cat->cat_ID);?>」の記事をもっと見る</a>
    </div>
  </div>
</section>
<section id='pcA' class='clearfix'>
  <div class='pcA-inner'>
    <?php
      $arg = array(
                'posts_per_page' => 1, // 表示する件数
                'orderby' => 'date', // 日付でソート
                'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
                'category_name' => 'business' // 表示したいカテゴリーのスラッグを指定
            );
      $posts = get_posts( $arg );
      if( $posts ): ?>
        <?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
          <div class='pcA_left_container'>
            <div class='pcA_heading'><span class="black_stroke">B</span>USINESS</div>
            <div class='pcA_main_text'>
              <p><?php the_title(); ?></p>
            </div>
            <div class='pcA_description'>
              <p><?php the_excerpt(); ?></p>
            </div>
            <div class='pcA_read_more'>
              <a href="<?php the_permalink(); ?>">READ MORE</p>
            </div>
          </div>
          <div class='pcA_right_container'>
            <img src="<?php the_post_thumbnail_url('large'); ?>" alt=''>
          </div>
      <?php endforeach; ?>
    <?php endif;
    wp_reset_postdata(); ?>
  </div>
</section>
<section id='pcA_posts' class="js-pcC_posts">
  <div class='other_posts_inner pcA_posts_inner'>
    <h2 class='other_posts_heading'>
      <span class="white_stroke">O</span>THER POSTS
    </h2>
    <div class='other_posts_container'>
      <?php
        $arg = array(
                  'posts_per_page' => 4, // 表示する件数
                  'offset'=> 1, // カテゴリ部分で1記事表示しているのでオフセットする
                  'orderby' => 'date', // 日付でソート
                  'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
                  'category_name' => 'business' // 表示したいカテゴリーのスラッグを指定
              );
        $cat = get_category_by_slug($arg['category_name']);
        $posts = get_posts( $arg );
        if( $posts ): ?>
        <?php
            foreach ( $posts as $post ) :
              setup_postdata( $post ); ?>
            <div class='other_post_box'>
              <div class="other_post_img">
                <img src="<?php the_post_thumbnail_url('large'); ?>" alt=''>
              </div>
              <span class="other_post_category">
                <?php
                  $postcat = get_the_category();
                  echo $postcat[0]->name;
                ?>
              </span>
              <div class='other_post_info_box'>
                <div class='other_post_title mb10'>
                  <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                  </a>
                </div>
                <div class='other_post_datetime'><?php the_time('Y/m/d'); ?></div>
              </div>
            </div>
      <?php endforeach; ?>
      <?php
        endif;
        wp_reset_postdata();
      ?>
    </div>
    <div class='other_posts_read_more'>
      <a href="<?php echo get_category_link( $cat->cat_ID); ?>" class='other_post_read_more_btn'>「<?php echo get_cat_name($cat->cat_ID);?>」の記事をもっと見る</a>
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
      <p>「仕方ない…これが現実だ。」自分に言い聞かせる。いつしか、おかしいとさえ感じなくなってしまった。</p>
      <p class='mb70'>でも、ほんの少しだけでいいから想像してみよう。<br>
        もし仮に、私たちの想いが実現されるとしたら？
      </p>
      <h4 class='mb30'>だからこそ我々『GLOW』は<br>この国の民主主義を再機能させたい</h4>
      <p>
        ここから始めてみよう。賛成でも反対でも、どちらでもいい。<br>まずは私たち一人一人が意見を持つこと。 きちんと声を上げていくこと。<br><br>
        やがてその声は大きなうねりとなり、この国の仕組みとルールを自分たちでも作っていける、そんな確かな希望に変わっていくだろう。<br><br>
        それが私たちの無力感からの解放、自信、幸福へ
        繋がっていく…我々は本気でそう信じている。
      </p>
      <div class='about_us_bottom_content'>
        <img src="<?php echo get_template_directory_uri(); ?>/imgs/logo.png" alt=''>
        <div class='about_us_read_more'>
          <a href="<?php echo esc_url( home_url('/') ); ?>statement">READ MORE</a>
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