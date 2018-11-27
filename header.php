<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <title>Brad Siefert | Product Designer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?= get_theme_file_uri("css/app.css") ?>" />
</head>

<body>
<header>
  <nav class="navbar navbar-expand-md navbar-dark">
    <div class="container">
      <a href="/" class="navbar-brand">
        <img src="<?= get_theme_file_uri("images/logo.svg") ?>" alt="Logo for Brad Siefert">
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarToggle"
        aria-controls="navbarToggle"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarToggle">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a class="nav-link" href="/portfolio/">Portfolio</a></li>
          <li class="nav-item"><a class="nav-link" href="/about/">About</a></li>
          <li class="nav-item"><a class="nav-link" href="/blog/">Blog</a></li>
          <li class="nav-item"><a class="nav-link" href="/contact/">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>
