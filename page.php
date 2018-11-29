<?php get_header(); ?>
<main>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <?php get_template_part( 'partials/breadcrumbs'); ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <h1 class="entry-title"><?php the_title(); ?></h1>
            <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
            <?php the_content(); ?>
          </article>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
