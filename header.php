<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,700" rel="stylesheet">
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="container headerContainer">
      <?php $image = get_field('logo_image', 'option');
       if( !empty($image) ): ?>
      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php the_field('the_alt');?>" alt="<?php the_field('the_alt');?>" />
         <?php endif; ?>
      </a>

    <?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'primary'
    )); ?>

      <nav>
    
    <input id="nav" type="checkbox" />
    
    <label for="nav">
      <b><i></i><i></i><i></i></b>
    </label>
    
    <menu class="away">
      <?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'primary'
    )); ?>
    </menu>
  </nav>
  </div> <!-- /.container -->
</header><!--/.header-->

