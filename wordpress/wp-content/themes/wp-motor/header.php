<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>

  <meta charset="UTF-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>


  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

  <!-- css + javascript -->
  <!--[if lt IE 9]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- wrapper -->
<div class="wrapper">

  <header role="banner">
    <div class="container">
      <div class="row header-items">

        <div class="logo col-md-2">
          <?php if ( is_page('4') ){ } else { ?>
            <a href="<?php echo home_url(); ?>">
              <?php  } ?>
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">
              <?php if ( is_page('4') ){
              } else { ?>
            </a>
          <?php } ?>
        </div><!-- /logo -->

        <div class="col-md-5">
          <nav class="nav__header col-md-12" role="navigation">
            <?php wpeHeadNav(); ?>
          </nav><!-- /nav -->
        </div><!-- col-md-5 -->

        <div class="col-md-5 header-phones">
          <a class="header-phone--top" href="tel:+38<?php the_field('pre_phone1' , 4); ?><?php the_field('phone1' , 4); ?>">
            <span><?php the_field('pre_phone1' , 4); ?></span><?php the_field('phone1' , 4); ?>
          </a>
          <a class="header-phone--bott" href="tel:+38<?php the_field('pre_phone2' , 4); ?><?php the_field('phone2' , 4); ?>">
            <span><?php the_field('pre_phone2' , 4); ?></span><?php the_field('phone2' , 4); ?>
          </a>
        </div><!-- col-md-5 -->

      </div><!-- /.row -->

      <div class="row second-header-row">
        <div class="col-md-6 first-half">
          <h4><?php the_field('header_title' , 4); ?></h4>
          <p><?php the_field('undertitle_descr' , 4); ?></p>
        </div>
        <div class="col-md-6 second-half">
          <h6>Заказать консультацию:</h6>
          <?php echo do_shortcode('[contact-form-7 id="27" title="header form"]'); ?>
        </div>
      </div><!-- second-header-row -->

      <div class="col-md-12 orange-bg">
        <p><?php the_field('last_header_text' , 4); ?></p>
      </div>

    </div><!-- /.container -->
  </header><!-- /header -->
