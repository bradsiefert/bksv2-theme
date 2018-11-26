<?php get_header(); ?>
<main>
  <div class="container">

    <div class="row">
      <?php get_template_part( 'partials/breadcrumbs'); ?>

      <div class="col-sm-12">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="header">
              <h1 class="entry-title"><?php the_title(); ?></h1>
            </header>
            <section class="entry-content">
              <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
              <?php the_content(); ?>
              <div class="entry-links"><?php wp_link_pages(); ?></div>
            </section>
          </article>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
