<?php
get_header();
global $axela_option;

if(isset($_GET['shop-layout'])){
	if( $_GET['shop-layout'] == 'full' ){
		$axela_option['shop-layout'] = 'full';
	}elseif( $_GET['shop-layout'] == 'left' ){
		$axela_option['shop-layout'] = 'left-col';
	}
}

// Layout class
$axela_layout_class = 'col-sm-12 col-xs-12';

if(!empty($axela_option['shop-layout']) ) {
	if (  $axela_option['shop-layout'] == 'full' ) {
		$axela_layout_class = 'col-sm-12 col-xs-12';
	}
	elseif( $axela_option['shop-layout'] == 'left-col' || $axela_option['shop-layout'] == 'right-col'){
		$axela_layout_class = 'col-md-9 col-xs-12';
	}
	else{
		$axela_layout_class = 'col-sm-12 col-xs-12';
	}
}
?>
<div class="row">
	<?php
		if(!empty($axela_option['disable-sidebar']) && is_product()){
			?>
			<div class="col-sm-12 col-xs-12">
			    <?php					
					woocommerce_content();
				?>
			</div>
			<?php
		}else{				
			if ( !empty($axela_option['shop-layout']) && $axela_option['shop-layout'] == 'left-col'  ) {
				get_sidebar('woocommerce');
			}
			?>    			
		    <div class="<?php echo esc_attr($axela_layout_class);?>">
			    <?php					
					woocommerce_content();
   				 ?>
		    </div>
			<?php
			if (!empty($axela_option['shop-layout']) &&  $axela_option['shop-layout'] == 'right-col'  ) {
				get_sidebar('woocommerce');
			}	
		}
	?>
</div>

<?php
get_footer();