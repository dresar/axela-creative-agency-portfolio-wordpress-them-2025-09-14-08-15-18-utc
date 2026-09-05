<?php
/*
dynamic css file. please don't edit it. it's update automatically when settins changed
*/
add_action('wp_head', 'axela_custom_colors', 160);
function axela_custom_colors() { 
global $axela_option;	
/***styling options
------------------*/
	if(!empty($axela_option['body_bg_color']))
	{
	 $body_bg          = $axela_option['body_bg_color'];
	}	
	
	$site_color       = !empty($axela_option['primary_color']) ? $axela_option['primary_color'] : '';
	$secondary_color  = !empty($axela_option['secondary_color']) ? $axela_option['secondary_color'] : '';	
	$link_color       = !empty($axela_option['link_text_color']) ? $axela_option['link_text_color'] : '';
	$link_hover_color = !empty($axela_option['link_hover_text_color']) ? $axela_option['link_hover_text_color'] : '';
	
	//typography extract for body
		
	$body_typography_font      = !empty($axela_option['opt-typography-body']['font-family']) ? $axela_option['opt-typography-body']['font-family'] : '';
	$body_typography_font_size = !empty($axela_option['opt-typography-body']['font-size']) ? $axela_option['opt-typography-body']['font-size'] : '' ;

	//typography extract for menu
	$menu_typography_color       = !empty($axela_option['opt-typography-menu']['color']) ? $axela_option['opt-typography-menu']['color'] : '' ;	
	$menu_typography_weight      = !empty($axela_option['opt-typography-menu']['font-weight']) ? $axela_option['opt-typography-menu']['font-weight']: '';	
	$menu_typography_font_family = !empty($axela_option['opt-typography-menu']['font-family']) ? $axela_option['opt-typography-menu']['font-family'] : '';
	$menu_typography_font_fsize  = !empty($axela_option['opt-typography-menu']['font-size']) ? $axela_option['opt-typography-menu']['font-size'] : '';
		

	//typography extract for heading
	
	$h1_typography_color= !empty($axela_option['opt-typography-h1']['color'])? $axela_option['opt-typography-h1']['color']: '';	
	if(!empty($axela_option['opt-typography-h1']['font-weight'])) {
		$h1_typography_weight=$axela_option['opt-typography-h1']['font-weight'];
	}
		
	$h1_typography_font_family = !empty($axela_option['opt-typography-h1']['font-family']) ? $axela_option['opt-typography-h1']['font-family'] : '' ;
	$h1_typography_font_fsize = !empty($axela_option['opt-typography-h1']['font-size']) ? $axela_option['opt-typography-h1']['font-size'] : '';	

	if(!empty($axela_option['opt-typography-h1']['line-height'])) {
		$h1_typography_line_height=$axela_option['opt-typography-h1']['line-height'];
	}
	
	$h2_typography_color = !empty($axela_option['opt-typography-h2']['color']) ? $axela_option['opt-typography-h2']['color'] : '';	

	$h2_typography_font_fsize = !empty($axela_option['opt-typography-h2']['font-size']) ? $axela_option['opt-typography-h2']['font-size'] : '';	
	if(!empty($axela_option['opt-typography-h2']['font-weight'])){
		$h2_typography_font_weight=$axela_option['opt-typography-h2']['font-weight'];
	}	

	$h2_typography_font_family = !empty($axela_option['opt-typography-h2']['font-family']) ? $axela_option['opt-typography-h2']['font-family'] : '' ;

	$h2_typography_font_fsize = !empty($axela_option['opt-typography-h2']['font-size']) ? $axela_option['opt-typography-h2']['font-size'] : '';	

	if(!empty($axela_option['opt-typography-h2']['line-height'])){
		$h2_typography_line_height=$axela_option['opt-typography-h2']['line-height'];
	}
	
	$h3_typography_color = !empty($axela_option['opt-typography-h3']['color']) ? $axela_option['opt-typography-h3']['color'] : '';	

	if(!empty($axela_option['opt-typography-h3']['font-weight'])){
		$h3_typography_font_weightt=$axela_option['opt-typography-h3']['font-weight'];
	}	

	$h3_typography_font_family = !empty($axela_option['opt-typography-h3']['font-family']) ? $axela_option['opt-typography-h3']['font-family']: '';

	$h3_typography_font_fsize  = !empty($axela_option['opt-typography-h3']['font-size']) ? $axela_option['opt-typography-h3']['font-size'] : '';	

	if(!empty($axela_option['opt-typography-h3']['line-height'])){
		$h3_typography_line_height = $axela_option['opt-typography-h3']['line-height'];
	}

	$h4_typography_color = !empty($axela_option['opt-typography-h4']['color']) ? $axela_option['opt-typography-h4']['color'] : '';	

	if(!empty($axela_option['opt-typography-h4']['font-weight'])){
		$h4_typography_font_weight = $axela_option['opt-typography-h4']['font-weight'];
	}	

	$h4_typography_font_family = !empty($axela_option['opt-typography-h4']['font-family']) ? $axela_option['opt-typography-h4']['font-family'] : '';

	$h4_typography_font_fsize  = !empty($axela_option['opt-typography-h4']['font-size']) ? $axela_option['opt-typography-h4']['font-size'] : '';	

	if(!empty($axela_option['opt-typography-h4']['line-height'])) {
		$h4_typography_line_height = $axela_option['opt-typography-h4']['line-height'];
	}
	
	$h5_typography_color = !empty($axela_option['opt-typography-h5']['color']) ? $axela_option['opt-typography-h5']['color'] : '';	

	if(!empty($axela_option['opt-typography-h5']['font-weight'])) {
		$h5_typography_font_weight = $axela_option['opt-typography-h5']['font-weight'];
	}	

	$h5_typography_font_family = !empty($axela_option['opt-typography-h5']['font-family']) ? $axela_option['opt-typography-h5']['font-family'] : '';

	$h5_typography_font_fsize  = !empty($axela_option['opt-typography-h5']['font-size']) ? $axela_option['opt-typography-h5']['font-size'] : '';	

	if(!empty($axela_option['opt-typography-h5']['line-height'])) {
		$h5_typography_line_height = $axela_option['opt-typography-h5']['line-height'];
	}
	
	$h6_typography_color = !empty($axela_option['opt-typography-6']['color']) ? $axela_option['opt-typography-6']['color'] : '';	

	if(!empty($axela_option['opt-typography-6']['font-weight'])) {
		$h6_typography_font_weight = $axela_option['opt-typography-6']['font-weight'];
	}

	$h6_typography_font_family = !empty($axela_option['opt-typography-6']['font-family']) ? $axela_option['opt-typography-6']['font-family'] : '';

	$h6_typography_font_fsize  = !empty($axela_option['opt-typography-6']['font-size']) ? $axela_option['opt-typography-6']['font-size'] : '';

	if(!empty($axela_option['opt-typography-6']['line-height'])) {
		$h6_typography_line_height = $axela_option['opt-typography-6']['line-height'];
	}
	

$body_color  = !empty($axela_option['body_text_color']) ? $axela_option['body_text_color'] : '' ;	?>

<!-- Typography -->
<?php if(!empty($body_color)){
	global $axela_option;
?>
<style>	
	body{
		background:<?php echo sanitize_hex_color($body_bg); ?>;
		color:<?php echo sanitize_hex_color($body_color); ?> !important;
		<?php if(!empty($body_typography_font)){ ?>
			font-family: <?php echo esc_attr($body_typography_font);?> !important;   
		<?php } ?> 
	    font-size: <?php echo esc_attr($body_typography_font_size);?> !important;
	}
	
	.banner-wrapper a.react_button:before,
	.react-button a:before,
	.form-buttom-axela:before,
	.comment-respond .form-submit #submit,
	.search-no-results .no-results .search-form button,
	.theme_btn:before,
	.page-error .reacbutton{
		background: <?php echo sanitize_hex_color($axela_option['btn_bg_color']);?>;		
		color: <?php echo sanitize_hex_color($axela_option['btn_text_color']);?>;
	}
	
	.react-button a:hover,
	.banner-wrapper a.react_button:hover,
	.comment-respond .form-submit #submit:hover,
	.page-error .reacbutton:hover
	{ 
		color: <?php echo sanitize_hex_color($axela_option['btn_txt_hover_color']);?>;
		background: <?php echo sanitize_hex_color($axela_option['btn_bg_hover']);?>;	
		
	}

	h1{
		<?php if(!empty($h1_typography_color)) { ?>
			 color: <?php echo sanitize_hex_color($h1_typography_color);?>;
		<?php
	 }?>
		<?php if(!empty($h1_typography_font_family)){ ?>
			font-family: <?php echo esc_attr($h1_typography_font_family);?> !important;   
		<?php } ?>
		font-size:<?php echo esc_attr($h1_typography_font_fsize);?>;
		<?php if(!empty($h1_typography_weight)){
		?>
		font-weight:<?php echo esc_attr($h1_typography_weight);?>;
		<?php }?>
		
		<?php if(!empty($h1_typography_line_height)){
		?>
			line-height:<?php echo esc_attr($h1_typography_line_height);?>;
		<?php }?>		
	}

	h2{
		color:<?php echo sanitize_hex_color($h2_typography_color);?>;
		<?php if(!empty($h2_typography_font_family)){ ?>
			font-family: <?php echo esc_attr($h2_typography_font_family);?> !important;   
		<?php } ?> 
		font-size:<?php echo esc_attr($h2_typography_font_fsize);?>;
		<?php if(!empty($h2_typography_font_weight)){
		?>
		font-weight:<?php echo esc_attr($h2_typography_font_weight);?>;
		<?php }?>
		
		<?php if(!empty($h2_typography_line_height)){
		?>
			line-height:<?php echo esc_attr($h2_typography_line_height);?>
		<?php }?>
	}

	h3{
		color:<?php echo sanitize_hex_color($h3_typography_color);?> ;
		<?php if(!empty($h3_typography_font_family)){ ?>
			font-family: <?php echo esc_attr($h3_typography_font_family);?> !important;
		<?php } ?> 
		font-size:<?php echo esc_attr($h3_typography_font_fsize);?>;
		<?php if(!empty($h3_typography_font_weight)){
		?>
		font-weight:<?php echo esc_attr($h3_typography_font_weight);?>;
		<?php }?>
		
		<?php if(!empty($h3_typography_line_height)){
		?>
			line-height:<?php echo esc_attr($h3_typography_line_height);?>;
		<?php }?>
	}

	h4{
		color:<?php echo sanitize_hex_color($h4_typography_color);?>;
		<?php if(!empty($h4_typography_font_family)){ ?>
			font-family: <?php echo esc_attr($h4_typography_font_family);?> !important;   
		<?php } ?>
		font-size:<?php echo esc_attr($h4_typography_font_fsize);?>;
		<?php if(!empty($h4_typography_font_weight)){
		?>
		font-weight:<?php echo esc_attr($h4_typography_font_weight);?>;
		<?php }?>
		
		<?php if(!empty($h4_typography_line_height)){
		?>
			line-height:<?php echo esc_attr($h4_typography_line_height);?>;
		<?php }?>
		
	}

	h5{
		color:<?php echo sanitize_hex_color($h5_typography_color);?>;
		<?php if(!empty($h5_typography_font_family)){ ?>
			font-family: <?php echo esc_attr($h5_typography_font_family);?> !important;   
		<?php } ?>
		font-size:<?php echo esc_attr($h5_typography_font_fsize);?>;
		<?php if(!empty($h5_typography_font_weight)){
		?>
		font-weight:<?php echo esc_attr($h5_typography_font_weight);?>;
		<?php }?>
		
		<?php if(!empty($h5_typography_line_height)){
		?>
			line-height:<?php echo esc_attr($h5_typography_line_height);?>;
		<?php }?>
	}

	h6{
		color:<?php echo sanitize_hex_color($h6_typography_color);?> ;
		<?php if(!empty($h6_typography_font_family)){ ?>
			font-family: <?php echo esc_attr($h6_typography_font_family);?> !important;   
		<?php } ?>
		font-size:<?php echo esc_attr($h6_typography_font_fsize);?>;
		<?php if(!empty($h6_typography_font_weight)){
		?>
		font-weight:<?php echo esc_attr($h6_typography_font_weight);?>;
		<?php }?>
		
		<?php if(!empty($h6_typography_line_height)){
		?>
			line-height:<?php echo esc_attr($h6_typography_line_height);?>;
		<?php }?>
	}

	.menu-area .navbar ul li > a,
	.sidenav .widget_nav_menu ul li a{
		<?php if(!empty($menu_typography_weight)){ ?>
			font-weight: <?php echo esc_attr($menu_typography_weight);?>;   
		<?php } ?>
		<?php if(!empty($menu_typography_font_family)){ ?>
			font-family: <?php echo esc_attr($menu_typography_font_family);?>;   
		<?php } ?>
		font-size:<?php echo esc_attr($menu_typography_font_fsize); ?>;
	}   
 	
	
	.reactheme-blog-grid.blog--style5 .image-part .cat_list li a,
	.rt-iconbox-area .box-inner .rs-badge,
	.rs-skill-bar .skillbar .skillbar-bar,
	.react-sideabr .tagcloud a:hover,
	.react-sideabr.dynamic-sidebar .service-singles .menu li.current-menu-item a,
	.react-sideabr.dynamic-sidebar .service-singles .menu li a:hover,
	.progress-wrap::before,
	.pagination-area .nav-links span.current,
	.pagination-area .nav-links a:hover,
	.react-sideabr .widget_search button, .react-sideabr .bs-search button,
	.rt-portfolio-style5 .portfolio-item .portfolio-img:after,
	.rt-portfolio-style5 .portfolio-item .portfolio-img a.pf-btn2,
	.big-bg-porduct-details .project-info .info-head,
	.team-grid-style5 .team-inner-wrap .image-wrap .team-social .team-social-one i:hover, 
	.team-slider-style5 .team-inner-wrap .image-wrap .team-social .team-social-one i:hover,
	.rts-addon-number .number-part .number-text .number-area .number-prefix,
	.menu-wrap-off .inner-offcan .nav-link-container .close-button{
		background:<?php echo sanitize_hex_color($site_color); ?>;
	}

	.banner-wrapper .btn-watch-video span.icon{
		border-left-color:<?php echo sanitize_hex_color($site_color);?>;
	}
	
	
	.rts-accordion.style2 .accordion-item .accordion-header button[aria-expanded=true]:after,
	.react-sideabr .recent-post-widget .post-desc a:hover,
	.rts-addon-number .number-part:hover .number-text .number-title .title,
	.elementor-widget-rt-price-table .elementor-widget-container 
	.rt-pricing-table-body .rt-pricing-table-features-list li.active i,
	.big-bg-porduct-details .project-info .info-body .single-info .info-ico i,
	.react-heading .title-inner .sub-text, .rs-dual-heading .title-inner .sub-text,
	.react-addon-services .services-part .services-text .services-btn-part .services-btn:hover,
	.progress-wrap::after,
	.rt-portfolio-style-grid.rt-portfolio-style6 .portfolio-item .portfolio-content a.portfolio-btn,
	.rt-portfolio-style-grid.rt-portfolio-style6 .portfolio-item .portfolio-content .p-title:hover a,
	.rt--slider.slider-style2 .single--item .review-body .star-rating .star,
	.blog .reactheme-blog .blog-item .full-blog-content .user-info .single-info i, 
	.archive .reactheme-blog .blog-item .full-blog-content .user-info .single-info i,
	.blog .reactheme-blog .blog-item .full-blog-content .user-info .single-info.cat a:hover, 
	.archive .reactheme-blog .blog-item .full-blog-content .user-info .single-info.cat a:hover,
	.blog .reactheme-blog .blog-item .full-blog-content .title-wrap .blog-title:hover a, 
	.archive .reactheme-blog .blog-item .full-blog-content .title-wrap .blog-title:hover a,
	.react-sideabr .widget_categories ul li a:hover, .react-sideabr .widget_archive ul li a:hover, 
	.react-sideabr .widget_pages ul li a:hover, .react-sideabr .widget_meta ul li a:hover, 
	.react-sideabr .widget_recent_entries ul li a:hover, 
	.react-sideabr .widget_nav_menu ul li a:hover, .react-sideabr .widget_block ul li a:hover,
	.single-post .reactheme-blog-details .type-post .single-content-full .user-info .single-info i,
	.single-post .reactheme-blog-details .type-post .single-content-full .user-info .single-info a:hover,
	.single-post .react-order-list li:before,
	.team-grid-style5 .team-inner-wrap .image-wrap .team-social .main i, 
	.team-slider-style5 .team-inner-wrap .image-wrap .team-social .main ,
	.team-grid-style5 .team-inner-wrap .image-wrap .team-social .team-social-one i,
	 .team-slider-style5 .team-inner-wrap .image-wrap .team-social .team-social-one i,
	 .single-teams .adress-box i,.reactheme-blog-grid.blog--style5 .blog-item .blog-content .blog-meta i,
	 .reactheme-blog-grid.blog--style5 .blog-item .title a:hover,
	 .rts-accordion.style3 .accordion-item .accordion-header button span,
	 .rts-accordion.style3 .accordion-item .accordion-header button:after,
	 .banner-content-area .sub-title p,
	 .counter-top-area .rts-counter-list .count-text .rs-counter,
	 .rt--slider.slider-style1 .content--box h4,
	 .rt--slider.slider-style1 .single--item .review-body .star-rating .star,
	 .reactheme-blog-grid.blog--style6 .blog-item .image-part ul li a,
	 .reactheme-blog-grid.blog--style6 .blog-item .blog-content .date i
	{ 
		color:<?php echo sanitize_hex_color($site_color); ?>;
	}

	input[type="text"]:focus, input[type="number"]:focus, 
	input[type="email"]:focus, input[type="url"]:focus, 
	select:focus, input[type="password"]:focus,
	body div textarea:focus,
	.comment-full form input:focus, .comment-full form textarea:focus{
		outline: 1px solid <?php echo sanitize_hex_color($site_color); ?>;
	}
	.progress-wrap::after,
	.progress-wrap:hover::after,
	.counter-top-area.style1,
	.react-addon-services.services-style6 .services-icon{
		border-color: <?php echo sanitize_hex_color($site_color); ?>;
	}
	.progress-wrap svg.progress-circle path{
		stroke:<?php echo sanitize_hex_color($site_color); ?>;
	}
	html input[type="button"], input[type="reset"], input[type="submit"]{
		background: <?php echo sanitize_hex_color($secondary_color); ?>;
	}
	.react-sideabr .widget_block label.wp-block-search__label, .react-sideabr .widget_block h2, .react-sideabr .widget-title,
	.react-sideabr .recent-post-widget .post-desc a{
		color: <?php echo sanitize_hex_color($secondary_color); ?>;
	}
	<?php if(!empty($axela_option['breadcrumb_top_gap']) && !empty($axela_option['breadcrumb_bottom_gap'])) : ?>
		.reactheme-breadcrumbs .breadcrumbs-inner,
		#reactheme-header.header-style-3 .reactheme-breadcrumbs .breadcrumbs-inner{
			padding-top:<?php echo esc_attr($axela_option['breadcrumb_top_gap']); ?>;			
			padding-bottom:<?php echo esc_attr($axela_option['breadcrumb_bottom_gap']); ?>;			
	}
	<?php endif; ?>
	<?php if(!empty($axela_option['mobile_breadcrumb_top_gap']) && !empty($axela_option['mobile_breadcrumb_bottom_gap'])) : ?>
		@media only screen and (max-width: 767px) {
		.reactheme-breadcrumbs .breadcrumbs-inner,
		#reactheme-header.header-style-3 .reactheme-breadcrumbs .breadcrumbs-inner{
			padding-top:<?php echo esc_attr($axela_option['mobile_breadcrumb_top_gap']); ?>;			
			padding-bottom:<?php echo esc_attr($axela_option['mobile_breadcrumb_bottom_gap']); ?>;			
			}
		}
	<?php endif; ?>
	.portfolio-filter button:hover, 
	.portfolio-filter button.active,
	.elementor-widget-rt-portfolio-grid .portfolio-filter button.active{
		background: <?php echo sanitize_hex_color($site_color); ?>;
		color:#fff;
	}
	.services-icon svg path,
	.single-working-process-one .img-wrapper,
	.single-working-process-one .img-wrapper svg path{
		fill: <?php echo sanitize_hex_color($site_color); ?>;
	}
	.reactheme-blog .blog-meta .blog-title a:hover,		
	a:hover, a:focus, a:active,
	.reactheme-blog .blog-meta .blog-title a:hover,
	.reactheme-blog .blog-item .blog-meta .categories a:hover,
	.react-sideabr ul a:hover{
		color: <?php echo sanitize_hex_color($link_hover_color); ?>;
	}

	<?php if(!empty($axela_option['container_size'])) : ?>
		@media only screen and (min-width: 1300px) {
			.container{
				max-width:<?php echo esc_attr($axela_option['container_size']); ?>;
			}
		}
	<?php endif; ?>

	<?php if(!empty($axela_option['preloader_bg_color'])) : ?>
		#axela-load{
			background: <?php echo sanitize_hex_color($axela_option['preloader_bg_color']); ?>;  
		}
	<?php endif; ?>


	
	<?php if(!empty($axela_option['body_bg_color'])) : ?>
		body.archive.tax-product_cat{
			background: <?php echo sanitize_hex_color($axela_option['body_bg_color']); ?> !important;  
		}
	<?php endif; ?>


</style>

<?php
	}
	 
	if(is_home() && !is_front_page() || is_home() && is_front_page()){

		$padding_top        = get_post_meta(get_queried_object_id(), 'content_top', true);
		$padding_bottom     = get_post_meta(get_queried_object_id(), 'content_bottom', true);
		
		$footer_padd_top    = get_post_meta(get_queried_object_id(), 'footer_padd_top', true);
		$footer_padd_bottom = get_post_meta(get_queried_object_id(), 'footer_padd_bottom', true);

  		if($padding_top != '' || $padding_bottom != ''){
	  	?>
	  	  <style>
	  	  	.main-contain #content,
	  	  	body.reactheme-pages-btm-gap .main-contain #content{
	  	  		<?php if(!empty($padding_top)): ?>padding-top:<?php echo esc_attr($padding_top); endif;?>;
	  	  		<?php if(!empty($padding_bottom)): ?>padding-bottom:<?php echo esc_attr($padding_bottom); endif;?>;
	  	  	}
	  	  </style>	
	  	<?php
	  	}

   		if($footer_padd_top != '' || $footer_padd_bottom != ''){
 	  	?>
 	  	  <style>
 	  	  	.reactheme-footer .footer-top{
 	  	  		<?php if(!empty($footer_padd_top)): ?>padding-top:<?php echo esc_attr($footer_padd_top); endif;?>;
 	  	  		<?php if(!empty($footer_padd_bottom)): ?>padding-bottom:<?php echo esc_attr($footer_padd_bottom); endif;?>;
 	  	  	}
 	  	  </style>	
 	  	  <?php
 	 	} 		
  }
  	else{ 
		$padding_top        = get_post_meta(get_the_ID(), 'content_top', true);
		$padding_bottom     = get_post_meta(get_the_ID(), 'content_bottom', true);
		
		$footer_padd_top    = get_post_meta(get_the_ID(), 'footer_padd_top', true);
		$footer_padd_bottom = get_post_meta(get_the_ID(), 'footer_padd_bottom', true);

  		if($padding_top != '' || $padding_bottom != ''){
	  	?>
	  	  <style>
	  	  	.main-contain #content,
	  	  	body.reactheme-pages-btm-gap .main-contain #content{
	  	  		<?php if(!empty($padding_top)): ?>padding-top:<?php echo esc_attr($padding_top); endif;?>;
	  	  		<?php if(!empty($padding_bottom)): ?>padding-bottom:<?php echo esc_attr($padding_bottom); endif;?>;
	  	  	}
	  	  </style>	
	  	<?php
	  }

		if($footer_padd_top != '' || $footer_padd_bottom != ''){
	  	?>
	  	  <style>
	  	  	.reactheme-footer .footer-top{
	  	  		<?php if(!empty($footer_padd_top)): ?>padding-top:<?php echo esc_attr($footer_padd_top); endif;?> !important;
	  	  		<?php if(!empty($footer_padd_bottom)): ?>padding-bottom:<?php echo esc_attr($footer_padd_bottom); endif;?> !important;
	  	  	}
	  	  </style>	
	  	  <?php
	 	} 
  }

if ( !class_exists('ReduxFrameworkPlugin') ) {  ?>		

	<style>@media only screen and (max-width: 1024px){
		.sidebarmenu-area.primary-menu.mobilehum {
			display: block !important;
		}
	} </style>
<?php }
}