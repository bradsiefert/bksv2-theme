<!DOCTYPE html>
<html lang="en">
<head>
  <title>Brad Siefert | Product Designer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?= get_theme_file_uri("css/app.css") ?>" />
</head>
<body>

<div class="landing-hero">
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
          <li class="nav-item"><a class="nav-link" href="/portfolio/">Design Portfolio</a></li>
          <li class="nav-item"><a class="nav-link" href="/about/">About</a></li>
          <li class="nav-item"><a class="nav-link" href="/blog/">Blog</a></li>
          <li class="nav-item"><a class="nav-link" href="/contact/">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-lg-12 mt-96 mb-160">
        <div class="display-1">
          Hi, I'm Brad, I’m a UX/UI <span class="landing-badge">designer <div class="badge badge-primary">My Day Job
          </div></span> and semi-pro <span class="landing-badge">photographer <div class="badge badge-success">
            My Passion</div></span> based in Chicago, IL.
        </div>
        <a href="/portfolio/" class="btn btn-outline btn-primary btn-lg mb-16">Design Work</a>
        <a target="_blank" href="https://bradleysiefert.com" class="btn btn-outline btn-success btn-lg mb-16">
          Photo Work
        </a>
      </div>
    </div>
  </div>
</div>

<script language="javascript">
  function ebstart() {
    // Enter the month, day, and year below you want to use as
    // the starting point for the date calculation
    var amonth = 10
    var aday = 17
    var ayear = 2013

    var x = new Date()
    var dyear
    var dmonth
    var dday
    var tyear = x.getFullYear()
    var tmonth = x.getMonth()+1
    var tday = x.getDate()
    var y=1
    var mm=1
    var d=1
    var a2=0
    var a1=0
    var f=28

    if ((tyear/4)-parseInt(tyear/4)==0) {
      f=29
    }

    m = new Array(31, f, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31)

    dyear = tyear-(ayear)

    dmonth = tmonth-amonth
    if (dmonth<0) {
      dmonth = dmonth+12
      dyear--
    }

    dday = tday-aday
    if (dday<0) {
      var ma = amonth+tmonth
      if (ma>12) {ma = ma-12}
      if (ma=0) {ma = ma+12}
      dday = dday+m[ma]
      dmonth--
    }

    if (dyear==0) {y=0}
    if (dmonth==0) {mm=0}
    if (dday==0) {d=0}
    if ((y==1) && (mm==1)) {a1=1}
    if ((y==1) && (d==1)) {a1=1}
    if ((mm==1) && (d==1)) {a2=1}
    if (y==1){
    document.write(+dyear+" years") }
      if ((a1==1) && (a2==0)) {document.write(" and ")}
      if ((a1==1) && (a2==1)) {document.write(", ")}
      if (mm==1){
      document.write(dmonth+" months")
    }
    if (a2==1) {document.write(", and ")}
    if (d==1){
      document.write(+dday+" days")
    }
  }
</script>

<div class="resume-earlybird">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <a target="_blank" href="https://earlybird.co">
          <img class="mb-32" src="<?= get_theme_file_uri("images/logo-earlybird.svg") ?>" alt="Logo for Earlybird Software">
        </a>
        <div class="display-2 mb-32">
          For the past <script type="text/javascript">ebstart()</script> I’ve been the Product Designer at Earlybird.
        </div>
        <div class="display-3 mb-32">
          We develop elegant custom data solutions for companies to help them make sense of their data. I’ve been able
          to design web and mobile app front-ends, create data reporting dashboards, and help provide branding ideation
          for startups and medium sized companies.
        </div>
        <a class="btn btn-highlight btn-lg" target="_blank" href="https://earlybird.co">Learn More</a>
      </div>
    </div>
  </div>
</div>

<div class="resume-spartz">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <img class="mb-32" style="width: 128px;" src="<?= get_theme_file_uri("images/logo-spartz.png") ?>" alt="Spartz Media Logo">
        <div class="display-3 mb-32">
          Previously, I was a designer at Spartz Media (now <a target="_blank" href="https://dose.com/">Dose</a>) where
          we created  viral content websites and apps. I helped create logos, web design and helped out with front-end
          development for their suite of meme websites.
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
