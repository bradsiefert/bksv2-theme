<?php get_header(); /* Template Name: Blog Page */ ?>

<main>
  <div class="container skinny-contain">
    <div class="row justify-content-center">
      <div class="col-lg-12">
      <?php get_template_part( 'partials/breadcrumbs'); ?>

      <div class="float-right">
        <small><strong><a href="https://www.brad.si/efert/category/blog/feed/">RSS Feed</a></strong></small>
      </div>
      <h1><?php the_title(); ?></h1>
      <p>A blog about design, photography, productivity, and other things I can't stop thinking about.</p>

  		<?php $wp_query->query('posts_per_page=4&cat=2&order=DESC' . '&paged='.$paged); while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
      <div class="box">

        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?></a>
        <p class="blog-time mt-16"><?php the_time('Y/m/d') ?></p>
    		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    		<?php the_excerpt(); ?>

        <a class="btn btn-primary btn-sm" href="<?php the_permalink(); ?>">Read More</a>
      </div>
      <?php endwhile; ?>

  		<?php if ($paged > 1) { ?>
        <div class="row">
          <div class="col-6">
            <strong><?php next_posts_link('Previous Posts'); ?></strong>
          </div>
          <div class="col-6 text-right">
            <strong><?php previous_posts_link('Newer Posts'); ?></strong>
          </div>
        </div>
  		<?php } else { ?>
        <div class="row">
          <div class="col-6">
            <strong><?php next_posts_link('Previous Posts'); ?></strong>
          </div>
        </div>
  		<?php } ?>

    </div>
  </div>
</main>

<?php get_footer(); ?>
