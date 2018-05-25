<?php
/* Adds  the function that allows the admin to set a featured image on a post*/

add_theme_support( 'post-thumbnails' );

/*Adding Menu Editing section to the Admin Panel*/
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );


?>
