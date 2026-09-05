<?php
function axela_scripts() {
	//register styles
	global $axela_option;
	wp_enqueue_style( 'boostrap', get_template_directory_uri() .'/assets/css/bootstrap.min.css' );	
	wp_enqueue_style( 'rt-icons', get_template_directory_uri() .'/assets/css/rt-icons.css');
	wp_enqueue_style( 'font-awesome-all', get_template_directory_uri() .'/assets/css/font-awesome.min.css');
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri() .'/assets/css/magnific-popup.css');
	wp_enqueue_style( 'swiper', get_template_directory_uri().'/assets/css/swiper-bundle.min.css' );
	wp_enqueue_style( 'aos', get_template_directory_uri().'/assets/css/aos.css' );
	wp_enqueue_style( 'axela-style-default', get_template_directory_uri() .'/assets/css/theme.css' );
	wp_enqueue_style( 'axela-style-responsive', get_template_directory_uri() .'/assets/css/responsive.css' );
	wp_enqueue_style( 'axela-style', get_stylesheet_uri() );		
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/modernizr-2.8.3.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '20151215', true );
		
	wp_enqueue_script( 'swiper', get_template_directory_uri().'/assets/js/swiper-bundle.min.js', array('jquery'), '823');
	wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'hover-revel', get_template_directory_uri() . '/assets/js/hover-revel.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'twinmax', get_template_directory_uri() . '/assets/js/twinmax.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'waypoints-sticky', get_template_directory_uri() . '/assets/js/waypoints-sticky.min.js', array('jquery'), '20151215', true );	
	wp_enqueue_script( 'jquery-counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'jquery-magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), '20151215', true );	
	wp_enqueue_script( 'isotope-axela', get_template_directory_uri() . '/assets/js/isotope-axela.js', array('jquery', 'imagesloaded'), '20151215', true );	
	
	wp_enqueue_script('axela-classie', get_template_directory_uri() . '/assets/js/classie.js', array('jquery'), '201513434', true);	


	if ( is_page_template( 'page-single.php' ) ) {
		wp_enqueue_script( 'jquery-easing', get_template_directory_uri() . '/assets/js/jquery.easing.min.js', array('jquery'), '20151215', true );
		wp_enqueue_script( 'jquery-nav', get_template_directory_uri() . '/assets/js/jquery.nav.js', array('jquery'), '20151215', true );
	}
	wp_enqueue_script('axela-mobilemenu', get_template_directory_uri() . '/assets/js/mobilemenu.js', array('jquery'), '201513434', true);
	wp_enqueue_script( 'aso', get_template_directory_uri() . '/assets/js/aos.js', array('jquery'), '20151215', true );
	wp_enqueue_script('axela-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '201513434', true);	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'axela_scripts' );

add_action( 'wp_enqueue_scripts', 'axela_rtl_scripts', 1500 );
if ( !function_exists( 'axela_rtl_scripts' ) ) {
	function axela_rtl_scripts() {	
		// RTL
		if ( is_rtl() ) {
			wp_enqueue_style( 'axela-rtl', get_template_directory_uri() . '/assets/css/rtl/rtl.css', array(), 1.0 );
		}		
		
	}
}

add_action( 'admin_enqueue_scripts', 'axela_load_admin_styles' );
function axela_load_admin_styles($screen) {
	wp_enqueue_style( 'axela-admin-style', get_template_directory_uri() . '/assets/css/admin-style.css', true, '1.0.0' );
	wp_enqueue_script( 'axela-admin-script', get_template_directory_uri() . '/assets/js/admin-script.js', array('jquery'), '20151215', true );
} 