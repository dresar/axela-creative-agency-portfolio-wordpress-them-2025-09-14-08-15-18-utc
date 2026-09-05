<?php
/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function axela_body_classes( $classes ) {
  // Adds a class of hfeed to non-singular pages.
  if ( ! is_singular() ) {
    $classes[] = 'hfeed';
  }

  return $classes;
}
add_filter( 'body_class', 'axela_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function axela_pingback_header() {
  if ( is_singular() && pings_open() ) {
    echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
  }
}

add_action( 'wp_head', 'axela_pingback_header' );
/**  kses_allowed_html */
function axela_prefix_kses_allowed_html($tags, $context) {
  switch($context) {
    case 'axela': 
      $tags = array( 
        'a' => array('href' => array()),
        'b' => array()
      );
      return $tags;
    default: 
      return $tags;
  }
}
add_filter( 'wp_kses_allowed_html', 'axela_prefix_kses_allowed_html', 10, 2);

/*
Register Fonts theme google font
*/
function axela_studio_fonts_url() {
    $font_url = '';
    
    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'axela' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'DM Sans: 400,500,600,700|Urbanist:500,600,700' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}


function axela_studio_scripts() {
    wp_enqueue_style( 'studio-fonts', axela_studio_fonts_url(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'axela_studio_scripts' );

//Favicon Icon
function axela_site_icon() {
 if ( ! ( function_exists( 'has_site_icon' ) && has_site_icon() ) ) {     
    global $axela_option;
     
    if(!empty($axela_option['rs_favicon']['url']))
    {?>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo esc_url(($axela_option['rs_favicon']['url'])); ?>"> 
  <?php 
    }
  }
}
add_filter('wp_head', 'axela_site_icon');


//excerpt for specific section
function axela_wpex_get_excerpt( $args = array() ) {
  // Defaults
  $defaults = array(
    'post'            => '',
    'length'          => 48,
    'readmore'        => false,
    'readmore_text'   => esc_html__( 'read more', 'axela' ),
    'readmore_after'  => '',
    'custom_excerpts' => true,
    'disable_more'    => false,
  );
  // Apply filters
  $defaults = apply_filters( 'axela_wpex_get_excerpt_defaults', $defaults );
  // Parse args
  $args = wp_parse_args( $args, $defaults );
  // Apply filters to args
  $args = apply_filters( 'axela_wpex_get_excerpt_args', $defaults );
  // Extract
  extract( $args );
  // Get global post data
  if ( ! $post ) {
    global $post;
  }

  $post_id = $post->ID;
  if ( $custom_excerpts && has_excerpt( $post_id ) ) {
    $output = $post->post_excerpt;
  } 
  else { 
    $readmore_link = '<a href="' . get_permalink( $post_id ) . '" class="readmore">' . $readmore_text . $readmore_after . '</a>';    
    if ( ! $disable_more && strpos( $post->post_content, '<!--more-->' ) ) {
      $output = apply_filters( 'the_content', get_the_content( $readmore_text . $readmore_after ) );
    }    
    else {     
      $output = wp_trim_words( strip_shortcodes( $post->post_content ), $length );      
      if ( $readmore ) {
        $output .= apply_filters( 'axela_wpex_readmore_link', $readmore_link );
      }
    }
  }
  // Apply filters and echo
  return apply_filters( 'axela_wpex_get_excerpt', $output );
}

//Demo content file include here

function axela_import_files() {
  return array(
    array(
        'import_file_name'           => 'Axela Demo Import',
        'categories'                 => array( 'Default Demo' ),
        'import_file_url'            => 'https://reactheme.com/products/demo-data/axela/axela-content.xml',             
        'import_redux'               => array(
        array(
          'file_url'    => 'https://reactheme.com/products/demo-data/axela/axela-options.json',
          'option_name' => 'axela_option',
        ),
      ),
     
      'import_preview_image_url'   => 'https://reactheme.com/products/banner/axela/wp/01.webp',
      'import_notice'              => esc_html__( 'Caution: For importing demo data please click on "Import Demo Data" button. During demo data installation please do not refresh the page.', 'axela' ),
      'preview_url'                => 'https://reactheme.com/products/wordpress/axela',
    ),

    array(
      'import_file_name'           => 'Axela Dark Demo Import',
      'categories'                 => array( 'Dark Demo' ),
      'import_file_url'            => 'https://reactheme.com/products/demo-data/axela/dark/axela-content.xml',             
      'import_redux'               => array(
      array(
        'file_url'    => 'https://reactheme.com/products/demo-data/axela/dark/axela-options.json',
        'option_name' => 'axela_option',
      ),
    ),
   
    'import_preview_image_url'   => 'https://reactheme.com/products/banner/axela/wp/dark-1.webp',
    'import_notice'              => esc_html__( 'Caution: For importing demo data please click on "Import Demo Data" button. During demo data installation please do not refresh the page.', 'axela' ),
    'preview_url'                => 'https://reactheme.com/products/wordpress/axela-dark',
  ),


    
  );
}

add_filter( 'pt-ocdi/import_files', 'axela_import_files' );
function axela_after_import_setup($selected_import) {
  // Assign menus to their locations.
	$main_menu     = get_term_by( 'name', 'Primary Menu', 'nav_menu' );
	set_theme_mod( 'nav_menu_locations', array(
      'menu-1' => $main_menu->term_id,      
    )
  );

  // Assign front page and posts page (blog page).
  $front_page_id = get_page_by_title( 'Creative Agency' );
  $blog_page_id  = get_page_by_title( 'Blog List' );
  update_option( 'show_on_front', 'page' );
  update_option( 'page_on_front', $front_page_id->ID );
  update_option( 'page_for_posts', $blog_page_id->ID ); 

  //Import Revolution Slider
  if ( class_exists( 'RevSlider' ) ) {
	
    if ( 'Axela Demo Import' == $selected_import['import_file_name'] ) {
		$slider_array = array(
			get_template_directory()."/inc/demo-data/sliders/slider-1.zip",                            
			get_template_directory()."/inc/demo-data/sliders/slider-2.zip",                            
			get_template_directory()."/inc/demo-data/sliders/slider-2-1.zip",			
		);		
    }
    if ( 'Axela Dark Demo Import' == $selected_import['import_file_name'] ) {
		$slider_array = array(
			get_template_directory()."/inc/demo-data/dark/sliders/slider-dark.zip",                            
      		get_template_directory()."/inc/demo-data/dark/sliders/slider-2-dark.zip",                            
      		get_template_directory()."/inc/demo-data/dark/sliders/slider-3-dark.zip",                  
									
		);
		
  	}
   
	$slider = new RevSlider();
	foreach($slider_array as $filepath){
		$slider->importSliderFromPost(true,true,$filepath);  
	}
	
  }
  
}
add_action( 'pt-ocdi/after_import', 'axela_after_import_setup' );
add_filter( 'use_widgets_block_editor', '__return_false' );

function axela_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'axela_mime_types');
update_option('elementor_disable_color_schemes', 'yes');
update_option('elementor_disable_typography_schemes', 'yes');

//added elementor support for custom post type
function axela_enable_elementor_for_custom_post_type() {
  add_post_type_support( 'rts-header', 'elementor' );
  add_post_type_support( 'rts-footer', 'elementor' );
  add_post_type_support( 'rt-portfolios', 'elementor' );
  add_post_type_support( 'rt-testimonials', 'elementor' );
  add_post_type_support( 'teams', 'elementor' );
}
add_action( 'init', 'axela_enable_elementor_for_custom_post_type' );
