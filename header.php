<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'>
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <script src="<?php echo get_template_directory_uri(); ?>/img/Vendor.js"></script>
  </head>

<body <?php body_class(); ?>>

<div>


<!-- Site-header -->

<header class="site-header">
    <div class="wrapper">
          <div class="site-header__logo">
            <p class="p1-logo">Star Web<strong class="p1-logo-s">designs</strong></p>

          </div>

          <div class="site-header__menu-icon">
            <div class="site-header__menu-icon__middle"></div>
          </div>

       <div class="site-header__menu-content">

          <div class ="site-header__btn-container">
            <span class="container">
              <span class="container__btn-bg open-modal">
                <a href="#" class = "container__btn-text">
                  Get in Touch
                </a>
              </span>
              <span class="container__overlay"> </span>
            </span>
          </div>


        <nav class="primary-nav primary-nav--pull-right">
          <?php
          $args = array(
            'theme_location' => 'primary'
           );
          wp_nav_menu($args);
           ?>
        </nav>

      </div>
    </div>
  </header>


<div class="large-hero">
  <picture>
          <img srcset="<?php echo get_template_directory_uri(); ?>/img/hero--large.jpg" alt="Coastal view of ocean and mountains" class="large-hero__image">
  </picture>

  <div class="large-hero__title"></div>
</div>
