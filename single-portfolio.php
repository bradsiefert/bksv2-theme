<?php get_header();
/*
Template Name: Design Portfolio Single Post
Template Post Type: post, portfolio
*/
?>
<main>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12 portfolio-post">
        <div class="breadcrumb">
          <div class="breadcrumb-item"><a href="/">Home</a></div>
          <div class="breadcrumb-item"><a href="https://www.brad.si/efert/portfolio/">Portfolio</a></div>
          <div class="breadcrumb-item"><?php the_title(); ?></div>
        </div>
        <article>
          <h4>Design Portfolio Piece:</h4>
          <h2><?php the_title(); ?></h2>
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
          <div class="divider"></div>
          <div class="text-left">
            <?php previous_post_link('<strong>Read Next:</strong> %link', '%title', TRUE); ?>
          </div>
          <div class="divider"></div>
          <?php endwhile; else: ?>
          <p>Sorry, no posts matched your criteria.</p>
        </article>
      </div>
      <?php endif; ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>
