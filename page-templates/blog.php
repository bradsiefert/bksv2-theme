<?php get_header(); /* Template Name: Blog Page */ ?>

<main>
  <div class="container skinny-contain">
    <div class="row justify-content-center">
      <div class="col-lg-12">
      <?php get_template_part( 'partials/breadcrumbs'); ?>

      <h1><?php the_title(); ?></h1>
      <p>About design, photography, productivity, and the things that frustrate me.</p>

  		<?php $wp_query->query('posts_per_page=5&cat=2&order=DESC' . '&paged='.$paged); while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
      <div class="box">
        <p class="blog-time"><?php the_time('Y/m/d g:ia') ?></p>
    		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    		<?php the_excerpt(); ?>

        <div class="btn-box">
          <a class="btn btn-primary btn-xs" href="<?php the_permalink(); ?>">Read More</a>
        </div>
      </div>
      <?php endwhile; ?>

  		<?php if ($paged > 1) { ?>
        <div class="row">
          <div class="col-6">
            <?php next_posts_link('Previous Posts'); ?>
          </div>
          <div class="col-6 text-right">
            <?php previous_posts_link('Newer Posts'); ?>
          </div>
        </div>
  		<?php } else { ?>
        <div class="row">
          <div class="col-6">
            <?php next_posts_link('Previous Posts'); ?>
          </div>
        </div>
  		<?php } ?>

    </div>
  </div>
</main>

<?php get_footer(); ?>
