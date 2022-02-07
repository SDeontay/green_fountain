<?php


$logo_width  = 120;
	$logo_height = 90;

	// If the retina setting is active, double the recommended width and height.
	if ( get_theme_mod( 'retina_logo', false ) ) {
		$logo_width  = floor( $logo_width * 2 );
		$logo_height = floor( $logo_height * 2 );
	}

	add_theme_support(
		'custom-logo',
		array(
			'height'      => $logo_height,
			'width'       => $logo_width,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);


register_nav_menus( array(
    'primary'   => __( 'Primary Menu', 'greenfoundation' ),
    'secondary' => __( 'Secondary Menu', 'greenfoundation')
));

add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );


add_theme_support( 'post-thumbnails' );
add_theme_support( 'responsive-embeds' );
add_theme_support( 'editor-styles' );
add_theme_support( 'html5', array('style','script', ) );
add_theme_support( 'automatic-feed-links' );


function greenfoundation_widgets_init() {

register_sidebar(
		array(
			'name'          => __( 'Contact Form', 'greenfoundation' ),
			'id'            => 'contact-form',
			'description'   => __( 'Add widgets here to appear in your Subscribe Section.', 'greenfoundation' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);


register_sidebar(
		array(
			'name'          => __( 'Social Links', 'greenfoundation' ),
			'id'            => 'social-links',
			'description'   => __( 'Add widgets here to appear in your Copyright Section.', 'greenfoundation' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

}
add_action( 'widgets_init', 'greenfoundation_widgets_init' );




?>

