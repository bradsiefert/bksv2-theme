<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta name="google-site-verification" content="D5nyy82jtOYwwTmQIwBq4Z5U1TcxXiopB4BGquzH3SM" />
  <meta name="msvalidate.01" content="301B6894F0D9F2A0DE43AF26D134D704" />
  <meta name="p:domain_verify" content="cb2fbad474786ce5738715ad99dde4c8"/>
  <meta name="yandex-verification" content="0b1c6998a5379362" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" sizes="180x180" href="<?= get_theme_file_uri("images/apple-touch-icon.png") ?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= get_theme_file_uri("images/favicon-32x32.png") ?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= get_theme_file_uri("images/favicon-16x16.png") ?>">
  <link rel="manifest" href="<?= get_theme_file_uri("images/site.webmanifest") ?>">
  <link rel="mask-icon" href="<?= get_theme_file_uri("images/safari-pinned-tab.svg") ?>" color="#121212">
  <link rel="shortcut icon" href="<?= get_theme_file_uri("images/favicon.ico") ?>">
  <meta name="msapplication-TileColor" content="#121212">
  <meta name="msapplication-config" content="<?= get_theme_file_uri("images/browserconfig.xml") ?>">
  <meta name="theme-color" content="#ffffff">
  <link rel="stylesheet" type="text/css" href="<?= get_theme_file_uri("css/app.css") ?>" />
  <title>
    <?php if(is_front_page() || is_home()){
        echo get_bloginfo('name');
    } else{
        echo wp_title('Brad Siefert / ');
    }?>
  </title>
  <meta name="keywords" content="Brad Siefert, Bradley Siefert, Nicole Siefert, Product Designer, UI designer, UX designer, UI/UX 
  Designer, photographer, graphic designer, Earlybird, Dose, Spartz, Hitch & Sparrow" />
  <meta name="description" content="Personal design portfolio and blog of UI/UX Designer, Brad Siefert.">

  <!-- Twitter Card data -->
  <meta name="twitter:card"    content="summary">
  <meta name="twitter:site"    content="@bksiefert">
  <meta name="twitter:title"   content="Brad Siefert / UI/UX Designer">
  <meta name="twitter:creator" content="@bksiefert">
  <meta name="twitter:image"   content="https://www.brad.si/efert/wp-content/themes/bksv2-theme/images/sharing-tile.jpg">

  <!-- Facebook Share data -->
  <meta property="og:url" content="https://www.brad.si/efert" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="Brad Siefert / UI/UX designer" />
  <meta property="fb:app_id" content="563001627481127"/>
  <meta property="og:description" content="Personal design portfolio and blog of product designer, Brad Siefert." />
  <meta property="og:image" content="https://www.brad.si/efert/wp-content/themes/bksv2-theme/images/sharing-tile.jpg" />
  
  <?php wp_head(); ?>
</head>
