
<!-- Portfolio Detail Start -->
    <div class="reactheme-porfolio-details"> 
        <?php while ( have_posts() ) : the_post(); ?>          
        <div class="big-bg-porduct-details">
			<div class="pro-thumb"><?php the_post_thumbnail();?></div>
			<div class="project-info" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800" data-sal-once="true">
				<div class="info-head">
					<h5 class="title"><?php echo esc_html__('Project Information', 'axela');?></h5>
				</div>
				<div class="info-body">
				<?php $post_links_data = get_post_meta( get_the_ID() );
				if ( isset( $post_links_data['pf_details' ][ 0 ] ) ) {
					$portfolio_list = maybe_unserialize( $post_links_data[ 'pf_details' ][ 0 ] );			
					
					foreach ( $portfolio_list as $list_info ) { ?>
						<!-- single info -->
						<div class="single-info">
							<?php if(!empty($list_info['pf_info_title_icon'])) : ?>
								<div class="info-ico">
									<i class="<?php echo wp_kses_post($list_info['pf_info_title_icon']);?>"></i>
								</div>
							<?php endif;?>
							<?php if(!empty($list_info['pf_info_title'])) : ?>
							<div class="info-details">
								<span><?php echo esc_html($list_info['pf_info_title']);?></span>
								<h6 class="name"><?php echo esc_html($list_info['pf_info_value']);?></h6>
							</div>
							<?php endif;?>
						</div>
						<!-- end single info -->
					<?php }
					
				}?>					
					
				</div>
			</div>
		</div>
       
        <div class="project-desc">       
           <?php  the_content(); ?>
        </div>                
        

      <?php endwhile; ?>   
       
      </div>

<!-- Portfolio Detail End -->