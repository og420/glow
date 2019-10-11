<?php get_header(); ?>

<section class="a__mv">
  <p class="a__mv__welcomeMessage">
    WELCOME TO <span>GLOW</span>
  </p>
  <h2 class="a__mv__pageTitle">「<?php single_cat_title(); ?>」の記事一覧</h2>
</section>

<section class="a__archive">
  <div class="container">
    <div class="a__articles">
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
      	<article class="a__article">
          <a href="<?php the_permalink(); ?>">
            <div class="a__article__thumb">
              <?php the_post_thumbnail('large'); ?>
            </div>
          </a>
          <span class="a__article__category">
            <?php
              $postcat = get_the_category();
              echo $postcat[0]->name;
            ?>
          </span>
          <div class="a__article__label">
            <h2 class="a__article__title">
              <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?></a>
            </h2>
            <span class="a__article__date">
              <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
                <?php echo get_the_date(); ?>
              </time>
            </span>
          </div>
        </article>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>