<?php get_header(); /* Template Name: Contact Page */ ?>

<main>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
      <?php get_template_part( 'partials/breadcrumbs'); ?>
      <h1>Say Hello</h1>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content(); endwhile; else: ?>
      <p>Sorry, no posts matched your criteria.</p>
      <?php endif; ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>
