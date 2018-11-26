<?php get_header(); /* Template Name: Blog Page */ ?>

<main>
  <div class="container">
    <div class="row">
      <div class="offset-lg-2 col-lg-8">
        <div class="breadcrumb">
          <div class="breadcrumb-item"><a href="">Home</a></div>
          <div class="breadcrumb-item"><?php the_title(); ?></div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="offset-lg-2 col-lg-8">
      <h1><?php the_title(); ?></h1>
      <p class="small">About design, photography, productivity, and the things that frustrate me.</p>
    	<article>

    		<?php
    		$wp_query->query('posts_per_page=5&cat=2&order=DESC' . '&paged='.$paged);
    		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
        <?php the_time('Y/m/d g:ia') ?>
    		<h2><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h2>
    		<?php the_excerpt(); ?>
        <a class="btn btn-primary btn-xs" href="<?php the_permalink(); ?>">Read More</a>

    		<?php endwhile; ?>

    		<?php if ($paged > 1) { ?>

    		<nav id="nav-posts">
    			<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
    			<div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
    		</nav>

    		<?php } else { ?>

    		<nav id="nav-posts">
    			<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
    		</nav>

    		<?php } ?>

    		<?php wp_reset_postdata(); ?>

    	</article>
    </div>
  </div>
</main>

<?php get_footer(); ?>
