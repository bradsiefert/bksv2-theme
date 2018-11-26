<?php get_header();?>

<main>
  <div class="container">
    <div class="row">
      <div class="offset-lg-2 col-lg-8">
        <div class="breadcrumb">
          <div class="breadcrumb-item"><a href="#">Home</a></div>
          <div class="breadcrumb-item"><a href="/blog/">Blog</a></div>
          <div class="breadcrumb-item"><?php the_title(); ?></div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="offset-lg-2 col-lg-8">
        <?php the_time('Y/m/d g:ia') ?>
        <h1><?php the_title(); ?></h1>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
        <?php previous_post_link(); ?> 
        <?php endwhile; else: ?>
        <p>Sorry, no posts matched your criteria.</p>
      </div>
    <?php endif; ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>
