<?php get_header(); ?>
  <main>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <?php the_time('Y/m/d g:ia') ?>
              <?php if ( is_singular() ) { echo '<h1 class="entry-title">'; } else { echo '<h2 class="entry-title">'; } ?>
              <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
              <?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h2>'; } ?>
            </article>
          <?php endwhile; endif; ?>
        </div>
      </div>
    </div>
  </main>
<?php get_footer(); ?>
