<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Creative - Start Bootstrap Theme</title>
  <?php
    wp_head();
  ?>
</head>

<body id="page-top">
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="<?php echo get_site_url() ?>">
        <?php echo get_bloginfo('name'); ?>
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <?php
          wp_nav_menu([
            'container' => '',
            'theme_location' => 'menu-principal',
            'menu_class' => 'navbar-nav ml-auto my-2 my-lg-0',
            'add_li_class' => 'nav-item'
            ]);
          ?>

      </div>
    </div>
    <!-- search form -->
    <?php echo get_search_form(); ?>
  </nav>
