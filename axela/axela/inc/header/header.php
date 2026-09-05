<?php
/*
Header Style
*/
global $axela_option;
$sticky             = !empty($axela_option['off_sticky']) ? $axela_option['off_sticky'] : ''; 
$sticky_menu        = ($sticky == 1) ? ' menu-sticky' : '';
$drob_aligns        = (!empty($axela_option['drob_align_s'])) ? 'menu-drob-align' : '';
$mobile_hide_search = (!empty($axela_option['mobile_off_search'])) ? 'mobile-hide-search' : '';
$mobile_hide_cart   = (!empty($axela_option['mobile_off_cart'])) ? 'mobile-hide-cart-no' : 'mobile-hide-cart';
$mobile_hide_button = (!empty($axela_option['mobile_off_button'])) ? 'mobile-hide-button' : '';
$mobile_logo_height =!empty($axela_option['mobile_logo_height']) ? 'style = "max-height: '.$axela_option['mobile_logo_height'].'"' : '';

// Header Options here
require get_parent_theme_file_path('inc/header/header-options.php');



$post_meta_header = '';
	 //check individual header 
if(is_page() || is_single()){
	$post_meta_header = get_post_meta(get_the_ID(), 'header_select', true);
	
}elseif(is_home() && !is_front_page() || is_home() && is_front_page()){
	$post_meta_header = get_post_meta(get_queried_object_id(), 'header_select', true);
}

$axela_header_id = !empty($axela_option['header_layout']) ? $axela_option['header_layout'] : '';

$get_id = !empty($post_meta_header) ? $post_meta_header : $axela_header_id;
$headser_postion = get_post_meta($get_id, 'header-position', true);
$get_header = ($headser_postion == 'on') ? 'fixed-header' : '';

?>

<?php 
  //include sticky search here
  get_template_part('inc/header/search');
?>

<?php if($post_meta_header!=''){ 
	//off convas here
get_template_part('inc/header/off-canvas');
	?>
	
	<header id="reactheme-header" class="header-style-1 <?php echo esc_attr($get_header);?> mainsmenu<?php echo esc_attr($main_menu_hides);?>">   
	     
	    <div class="header-inner<?php echo esc_attr($sticky_menu);?>">    
	    		<?php    $header_style = new WP_Query(array(
	    	            'post_type' => 'rts-header',
	    	            'posts_per_page' => -1,
	    	            'p' => $post_meta_header,
	    	     ));
	    		if ( $header_style->have_posts() ) {
	    	        while ( $header_style->have_posts() ) : $header_style->the_post();
	    	            the_content();
	    	        endwhile;
	    	        wp_reset_query();
	    	    }
	    	    ?>
    	</div>
	</header>
<?php } 

elseif(!empty($axela_option['header_layout'])){	
//off convas here
get_template_part('inc/header/off-canvas');
?>
	<header id="reactheme-header" class="header-style-1 <?php echo esc_attr($get_header);?> mainsmenu<?php echo esc_attr($main_menu_hides);?>">      
	    <div class="header-inner<?php echo esc_attr($sticky_menu);?>">    
	    	<?php $header_style = $axela_option['header_layout'];
				$header_style = new WP_Query(array(
			        'post_type' => 'rts-header',
			        'posts_per_page' => -1,
			        'p' => $axela_option['header_layout'],
			    )); 
				if ( $header_style->have_posts() ) {
			        while ( $header_style->have_posts() ) : $header_style->the_post();
			            the_content();
			        endwhile;
			        wp_reset_query();
			    }
			    ?>
       		
    	</div>    
    	      
   </header>
        
    <?php
}		
else{ ?>
    <header id="reactheme-header" class="rts-default-header header-style-1 mainsmenu<?php echo esc_attr($main_menu_hides);?>">
     
    	<div class="header-inner<?php echo esc_attr($sticky_menu);?>">    
    		<div class="container">
    			<?php  get_template_part('inc/header/header-style1');  ?>
    		</div>
		</div>    
  
	</header>
<?php }
 get_template_part( 'inc/breadcrumbs' );  ?>