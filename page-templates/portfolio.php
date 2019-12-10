<?php get_header(); /* Template Name: Portfolio Page */ ?>

<main>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12">
      <?php get_template_part( 'partials/breadcrumbs'); ?>
      <h1>Design Portfolio</h1>
      <p class="lead">
        Some of my design and front-end work that I'm proud to show off.
      </p>
      <div class="row no-gutters mb-32">
    		<?php
          $wp_query->query('posts_per_page=15&cat=3&order=DESC'.'&paged='.$paged);
          while ($wp_query->have_posts()) : $wp_query->the_post(); 
        ?>
          <div class="col-sm-4">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?></a>
          </div>
        <?php endwhile; ?>
      </div>
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
