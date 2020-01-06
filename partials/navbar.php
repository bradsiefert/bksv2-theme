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
          <li class="nav-item"><a class="nav-link" href="<?= get_site_url() ?>/portfolio/">Design Portfolio</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= get_site_url() ?>/siri-shortcuts/">Siri Shortcuts</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= get_site_url() ?>/about/">About</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= get_site_url() ?>/blog/">Blog</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= get_site_url() ?>/contact/">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>