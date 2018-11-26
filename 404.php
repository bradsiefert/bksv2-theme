<?php get_header(); ?>
<main>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h1>404 Error.</h1>
        <section class="entry-content">
          <img src="<?= get_theme_file_uri("images/clueless-my-bad.gif") ?>" alt="">
          <p><?php _e( 'Nothing found for the requested page. Try a search instead?' ); ?></p>
        </section>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
