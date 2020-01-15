<?php get_header(); /* Template Name: Siri Shortcuts, Public Shortcuts List Page */ ?>

<main>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <?php get_template_part( 'partials/breadcrumbs'); ?>

        <h1>Public Shortcuts List</h1>
        <p class="lead">
          This is a list of all of my public shortcuts in an <a href="https://airtable.com">Airtable</a> database. 
          I’m especially 
          proud of many of these and I hope you will find them useful. To add the Shortcut, tap the Download/Share Link 
          on your iOS device and it will add it to your Shortcuts app. Most of the shortcuts require you to be running 
          iOS 13.
        </p>
        
        <p class="lead">
          If you've never ran a shortcut before please 
          <a href="https://support.apple.com/guide/shortcuts/enable-shared-shortcuts-apdfeb05586f/ios"> read this guide 
          first</a> on how to run an "Untrusted Shortcut".
        </p>
        
        <iframe 
          class="airtable-embed" 
          src="https://airtable.com/embed/shrP7grl8NCrWWybU?backgroundColor=purple" 
          frameborder="0" 
          onmousewheel="" 
          width="100%" 
          height="560" 
          style="background: transparent;"
        >
        </iframe>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
