<?php
/* ---- Additional Widget Areas ----- */
register_sidebar( array(
	'name' => __( 'About Us Sidebar'),
	'id' => 'about_us_sidebar',
	'description' => __( 'Sidebar on About Us page'),
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) );
	
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

/* ---- Additional Menu ---- */
register_nav_menu( 'footer', __( 'Footer Menu') );

/* ---- Custom Post Types ---- */
add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'staff',
		array(
			'labels' => array(
				'name' => __( 'Staff' ),
				'singular_name' => __( 'Staff' ),
				'add_new_item' => ('Add New Staff'),
				'edit_item' => ('Edit Staff'),
				'new_item' => ('New Staff'),
				'view_staff' => ('View Staff')
			),
		'public' => true,
		'has_archive' => false,
		'supports' => array( 'title', 'editor', 'thumbnail')
		)
	);
	register_post_type( 'board',
		array(
			'labels' => array(
				'name' => __( 'Board' ),
				'singular_name' => __( 'Board' ),
				'add_new_item' => ('Add New Board'),
				'edit_item' => ('Edit Board'),
				'new_item' => ('New Board'),
				'view_staff' => ('View Board')
			),
		'public' => true,
		'has_archive' => false,
		'supports' => array( 'title', 'editor', 'thumbnail')
		)
	);
	register_post_type( 'newsletter',
		array(
			'labels' => array(
				'name' => __( 'Newsletter' ),
				'singular_name' => __( 'Newsletter' ),
				'add_new_item' => ('Add New Newsletter'),
				'edit_item' => ('Edit Newsletter'),
				'new_item' => ('New Newsletter'),
				'view_staff' => ('View Newsletter')
			),
		'public' => true,
		'has_archive' => false,
		'supports' => array( 'title', 'editor')
		)
	);
}
?>