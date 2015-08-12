<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load our CSS ?>
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<!-- Header Wrapper -->
  <div id="header-wrapper">
    <div class="container">
      <div class="row">
        <div class="12u">

          <!-- Header -->
            <header id="header">
              <div class="inner">

                <!-- Logo -->
                  <h1><a href="#" id="logo">HackerYo</a></h1>
                  <h2>Neat site</h2>
                <!-- Nav -->
                 <?php wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => 'nav',
                    'container_id' => 'nav'
                 )) ?>
              </div>
            </header>

        </div>
      </div>
    </div>
  </div>





