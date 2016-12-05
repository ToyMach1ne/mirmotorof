<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>

  <meta charset="UTF-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>


  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

  <!-- css + javascript -->
  <!--[if lt IE 9]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

  <?php wp_head(); ?>

	<!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window,document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');

	fbq('init', '1072183672865696');
	fbq('track', 'PageView');
	</script>
	<noscript>
	<img height="1" width="1"
	src="https://www.facebook.com/tr?id=1072183672865696&ev=PageView
	&noscript=1"/>
	</noscript>
	<!-- End Facebook Pixel Code -->
</head>
<body <?php body_class(); ?>>
<!-- wrapper -->
<div class="wrapper">

  <header role="banner">
    <div class="container">
      <div class="row header-items">

        <div class="logo col-xs-2">
          <?php if ( is_page('4') ){ } else { ?>
            <a href="<?php echo home_url(); ?>">
              <?php  } ?>
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">
              <?php if ( is_page('4') ){
              } else { ?>
            </a>
          <?php } ?>
        </div><!-- /logo -->

        <div class="col-xs-5">
          <nav class="nav__header col-xs-12" role="navigation">
            <?php wpeHeadNav(); ?>
          </nav><!-- /nav -->
        </div><!-- col-xs-5 -->

        <div class="col-xs-5 header-phones">
          <a class="header-phone--top" href="tel:+38<?php the_field('pre_phone1' , 4); ?><?php the_field('phone1' , 4); ?>">
            <span><?php the_field('pre_phone1' , 4); ?></span><?php the_field('phone1' , 4); ?>
          </a>
          <a class="header-phone--bott" href="tel:+38<?php the_field('pre_phone2' , 4); ?><?php the_field('phone2' , 4); ?>">
            <span><?php the_field('pre_phone2' , 4); ?></span><?php the_field('phone2' , 4); ?>
          </a>
        </div><!-- col-xs-5 -->

      </div><!-- /.row -->

      <div class="row second-header-row">
        <div class="col-xs-6 first-half">
          <h4><?php the_field('header_title' , 4); ?></h4>
          <p><?php the_field('undertitle_descr' , 4); ?></p>
        </div>
        <a href="#" class="super-menu">Заказать консультацию</a>
        <div class="col-xs-6 second-half">
        <a href="#" class="close-mobile-menu close-mobile-menu--show">X</a>
          <h6>Заказать консультацию:</h6>
          <?php echo do_shortcode('[contact-form-7 id="27" title="header form"]'); ?>
        </div>
      </div><!-- second-header-row -->

      <div class="col-xs-12 orange-bg">
        <p><?php the_field('last_header_text' , 4); ?></p>
      </div>

    </div><!-- /.container -->
  </header><!-- /header -->
