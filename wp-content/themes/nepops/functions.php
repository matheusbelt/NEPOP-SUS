<?php

function my_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'menu-principal' ),
		'id'            => 'header-menu',
		'description'   => __( 'Adicione as Páginas que você quer para aparecer no menu superior' ),
	) );

	// register_sidebar( array(
	// 	'name'          => __( 'Content Bottom 1', 'twentysixteen' ),
	// 	'id'            => 'sidebar-2',
	// 	'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
	// 	'before_widget' => '<section id="%1$s" class="widget %2$s">',
	// 	'after_widget'  => '</section>',
	// ) );

	// register_sidebar( array(
	// 	'name'          => __( 'Content Bottom 2', 'twentysixteen' ),
	// 	'id'            => 'sidebar-3',
	// 	'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
	// 	'before_widget' => '<section id="%1$s" class="widget %2$s">',
	// 	'after_widget'  => '</section>',
	// 	'before_title'  => '<h2 class="widget-title">',
	// 	'after_title'   => '</h2>',
	// ) );
}
add_action( 'widgets_init', 'my_widgets_init' );


add_theme_support( 'post-thumbnails' ); 
add_theme_support( 'menu' );

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Menu Principal' ),
      'extra-menu' => __( 'Lateral' ),
      'footer-menu' => __( 'Menu de Rodapé' )
    )
  );
}
add_action( 'init', 'register_my_menus' );