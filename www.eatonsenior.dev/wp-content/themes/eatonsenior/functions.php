<?php
/* ---- Additional Widget Areas ----- */
register_sidebar( array(
	'name' => __( 'Footer Left Widget Area'),
	'id' => 'footer-left',
	'description' => __( 'Left widget area on footer'),
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) );

register_sidebar( array(
	'name' => __( 'Footer Middle Widget Area'),
	'id' => 'footer-middle',
	'description' => __( 'Middle widget area on footer'),
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) );
	
register_sidebar( array(
	'name' => __( 'Footer Right Widget Area'),
	'id' => 'footer-right',
	'description' => __( 'Right widget area on footer'),
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) );
	
register_nav_menu( 'footer', __( 'Footer Menu') );
?>