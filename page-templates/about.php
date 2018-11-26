<?php get_header(); /* Template Name: About Page */ ?>

<main>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="breadcrumb">
          <div class="breadcrumb-item"><a href="">Home</a></div>
          <div class="breadcrumb-item">About Me</div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-7 col-lg-8 text-justify">
        <h2 class="h1">I promise this won’t be in the third person.</h2>
        <p>
          Hi, my name is Brad and I’m a product designer specializing in user experience, user interface, and front-end
          development. I’m originally from the surburbs, but I now make my home in Chicago's
          <a target="_new "href="https://en.wikipedia.org/wiki/Garfield_Park_(Chicago)">Garfield Park neighborhood</a>
          with my wife Nicole.
        </p>

        <p>
          I love typography, grids, Sketch, Bootstrap,
          <a target="_new" href="https://www.flickr.com/photos/dim7chord/albums/72157643011912493">instant film</a>,
          indie software, crossing off tasks from my <a target="_new" href="https://culturedcode.com/">task list</a>,
          yoga, <a target="_new" href="https://www.patagonia.com/product/mens-nano-air-hoody/84365.html">Patagonia
          jackets</a>, and most Apple products. I value clarity, elegance, efficiency, and detail orientedness in
          design. I want to work with people who inspire me to be better each day and who are serious about creating
          beautiful and meaningful work.
        </p>

        <p>
          My favorite places in the world are
          <a target="_new" href="https://www.flickr.com/photos/dim7chord/albums/72157690018094916">Grand Teton National
          Park</a> and <a target="_new" href="https://www.flickr.com/photos/dim7chord/sets/72157690018094916">Rabbit
          Island</a>, there are dozens of documentaries in my Netflix queue, and I’ve taken around 500K photos in the
          past 11 years.
        </p>

        <p>
          I’m slightly addicted to Diet Coke—but I’m working on it.
        </p>
        <a target="_blank" class="btn btn-primary btn-lg mb-32" href="<?= get_theme_file_uri("Brad-Siefert-Resume.pdf") ?>">
          Download Resume
        </a>
      </div>

      <div class="col-md-5 col-lg-4">
        <img class="img-fluid" src="<?= get_theme_file_uri("images/photo-bradsiefert.jpg") ?>" alt="Photo of Brad Siefert">
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
