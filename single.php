<?php
get_header();
?>

<div class="s__mv">
  <img class="s__mv__bg" src="<?php the_post_thumbnail_url( 'medium' );?>">
  <div class="s__mv__thumb">
    <img src="<?php the_post_thumbnail_url( 'full' );?>">
    <span class="s__mv__title"><?php the_title(); ?></span>
    <span class="s__mv__title s__mv__title--position_bottom"><?php the_title(); ?></span>
  </div>
</div>

<?php if(have_posts()): the_post(); ?>
<article class="s__article__container">
<?php custom_breadcrumb(); ?>
  <div class="s__article__header">
    <?php if(has_category() ): ?>
    <span class="s__article__category">
      <?php echo get_the_category_list( ' ' ); ?>
    </span>
    <?php endif; ?>
    <span class="s__article__date">
      <time
      datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
      <?php echo get_the_date(); ?>
      </time>
    </span>
    <h1 class="s__article__title"><?php the_title(); ?></h1>
  </div>

  <div class="s__article__content">
    <p class="s__article__warning">
    日本国内では大麻の栽培及び所持は違法行為であり、本メディアはそれら違法行為を容認又は助長することを目的とするものではありません。
    </p>
    <?php the_content(); ?>
  </div>
</article>
<?php endif; ?>

<?php get_footer(); ?>
