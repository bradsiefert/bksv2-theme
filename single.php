<?php get_header();?>
<main>
  <div class="container skinny-contain">
    <div class="row justify-content-center">
      <div class="col-lg-12 blog-post">
        <div class="breadcrumb">
          <div class="breadcrumb-item"><a href="/">Home</a></div>
          <div class="breadcrumb-item"><a href="blog/">Blog</a></div>
          <div class="breadcrumb-item"><?php the_title(); ?></div>
        </div>
        <article>
          <p class="blog-time"><?php the_time('Y/m/d g:ia') ?></p>
          <h1><?php the_title(); ?></h1>
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
          <div class="divider"></div>
          <div class="text-left">
            <?php previous_post_link('<small><strong>Read Next:</strong></small> %link', '<small>%title</small>', TRUE); ?>
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
