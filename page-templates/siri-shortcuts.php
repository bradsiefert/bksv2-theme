<?php get_header(); /* Template Name: Siri Shortcuts Page */ ?>

<main>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <?php get_template_part( 'partials/breadcrumbs'); ?>

        <h1>Siri Shortcuts</h1>
        <p class="lead">
          Shortcuts have become my favorite development platform. Shortcuts are small programs that you can run on your 
          iOS devices to accomplish a variety of tasks. I’m especially proud of making these and I hope you find 
          them useful. For a full list of all of my public shortcuts, the button below links to a database with links 
          to all of them.
        </p>
        
        <!-- <p class="lead">
          If you've never ran a shortcut before please 
          <a href="https://support.apple.com/guide/shortcuts/enable-shared-shortcuts-apdfeb05586f/ios"> read this guide 
          first</a> on how to run an "Untrusted Shortcut".
        </p> -->

        <p class="lead">
          To learn more about getting started with Shortcuts here's a
          <a target="_new" href="https://www.imore.com/getting-started-shortcuts">great guide,</a> here's a
          <a target="_new" href="https://thesweetsetup.com/ios-shortcuts-guide/">great guide,</a> and one more
          <a target="_new" href="https://www.matthewcassinelli.com/siri-shortcuts/">great guide.</a>
        </p>

        <div class="row">
          <div class="col-lg-6 col-xl-4">
            <a class="btn btn-primary btn-block mb-32" href="<?= get_site_url() ?>/siri-shortcuts/public-list/">
              View Public Shortcuts List
            </a>
          </div>
        </div>
      </div>
    </div>
    
    <div class="row">
  		<?php
        $wp_query->query('posts_per_page=9&cat=16&order=DESC' . '&paged='.$paged);
        while ($wp_query->have_posts()) : $wp_query->the_post();
      ?>
        <div class="col-lg-6 col-xl-4">
          <a href="<?php the_permalink(); ?>">
            <div class="box shortcuts">
              <div class="d-flex flex-column" style="height: 208px;">
                <div class="blog-time"><?php the_time('Y/m/d') ?></div>
                <div class="mt-auto"><h3 class="mb-0"><?php the_title(); ?></h3></div>
              </div>
            </div>
          </a>
        </div>
      <?php endwhile; ?>
    </div>

    <?php if ($paged > 1) { ?>
      <div class="row">
        <div class="col-6">
          <strong><?php next_posts_link('More Shortcuts'); ?></strong>
        </div>
        <div class="col-6 text-right">
          <strong><?php previous_posts_link('Newer Shortcuts'); ?></strong>
        </div>
      </div>
		<?php } else { ?>
      <div class="row">
        <div class="col-6">
          <strong><?php next_posts_link('More Shortcuts'); ?></strong>
        </div>
      </div>
		<?php } ?>

  </div>
</main>

<?php get_footer(); ?>
