<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css">
</head>
<body>
	<header class="is-fullhd hero">
  <!--Dynamically Obtaining the Menu set on the Wordpress Admin Panel-->
		<nav class="level">
			<?php
        wp_nav_menu(array(
        	'menu' => 'left',
          'menu_class' => 'level-item',
          'container' => 'navbar-item',
       	) );
    	?>
			<a class="navbar-brand" href="<?php echo esc_url( home_url('/') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_image.png" alt="street house logo" style="height: 100px;"></a>
      <?php
        wp_nav_menu(array(
          'menu' => 'right',
          'menu_class' => 'level-item',
          'container' => 'navbar-item',
        ) );
    	?>
	 </nav>