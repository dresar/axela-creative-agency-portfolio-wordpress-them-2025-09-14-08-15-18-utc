<?php
    global $axela_option;       
?>
<?php 
    $post_meta_data = get_post_meta(get_the_ID(), 'banner_image', true);
    $post_menu_type = get_post_meta(get_the_ID(), 'menu-type', true);    
?>
<div class="reactheme-breadcrumbs  porfolio-details">
<?php if($post_meta_data !='') { ?>
    <div class="breadcrumbs-single" style="background-image: url('<?php echo esc_url( $post_meta_data );?>')">
        <div class="container">
          <div class="row">            
              <div class="breadcrumbs-inner bread-<?php echo esc_attr($post_menu_type); ?>"> 
                <div class="col-lg-6 col-md-6">                
                <?php 
                    $post_meta_title = get_post_meta(get_the_ID(), 'select-title', true);?>
                    <?php if( $post_meta_title != 'hide' ){             
                    ?>
                    <?php if(!empty($axela_option['team_page_subtitle'])) : ?>
                        <span class="sub-title"><?php echo esc_html($axela_option['team_page_subtitle']);?></span>
                    <?php endif; ?>
                    <h1 class="page-title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800" data-sal-once="true">
                        <?php if(!empty($axela_option['team_page_title'])){
                            echo esc_html($axela_option['team_page_title']);
                            }else{
                               echo esc_html('Team Details', 'axela');
                            }
                        ?>
                    </h1>
                    <?php } 
                   
                ?>    
              </div>
              <div class="col-lg-6 col-md-6 text-md-right">
                <?php if(!empty($axela_option['off_breadcrumb'])){
                    $rs_breadcrumbs = get_post_meta(get_the_ID(), 'select-bread', true);
                    if( $rs_breadcrumbs != 'hide' ):        
                    if(function_exists('bcn_display')){?>
                        <div class="breadcrumbs-title" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800" data-sal-once="true"> <?php  bcn_display();?></div>
                    <?php } 
                    endif;
                } ?>
              </div>
            </div>
          </div>
        </div>
    </div>
<?php }

elseif (!empty($axela_option['team_single_image']['url'])) {?>
<div class="breadcrumbs-single" style="background-image: url('<?php echo esc_url( $axela_option['team_single_image']['url'] );?>')">
    <div class="container">
         <div class="breadcrumbs-inner bread-<?php echo esc_attr($post_menu_type); ?>"> 
            <div class="row">        
             
                <div class="col-lg-6 col-md-6">
                
                <?php 
                    $post_meta_title = get_post_meta(get_the_ID(), 'select-title', true);?>
                    <?php if( $post_meta_title != 'hide' ){             
                    ?>
                    <?php if(!empty($axela_option['team_page_subtitle'])) : ?>
                        <span class="sub-title"><?php echo esc_html($axela_option['team_page_subtitle']);?></span>
                    <?php endif; ?>
                    <h1 class="page-title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800" data-sal-once="true">
                        <?php if(!empty($axela_option['team_page_title'])){
                            echo esc_html($axela_option['team_page_title']);
                            }else{
                               echo esc_html('Team Details', 'axela');
                            }
                        ?>
                    </h1>
                    <?php } 
                   
                ?>    
              </div>
              <div class="col-lg-6 col-md-6  text-md-right">
                <?php if(!empty($axela_option['off_breadcrumb'])){
                    $rs_breadcrumbs = get_post_meta(get_the_ID(), 'select-bread', true);
                    if( $rs_breadcrumbs != 'hide' ):        
                    if(function_exists('bcn_display')){?>
                        <div class="breadcrumbs-title" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800" data-sal-once="true"> <?php  bcn_display();?></div>
                    <?php } 
                    endif;
                } ?>
              </div>
            </div>
          </div>
    </div>
</div>
    
<?php }else{?>
    <div class="reactheme-breadcrumbs-inner">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="breadcrumbs-inner bread-<?php echo esc_attr($post_menu_type); ?>">
                <?php if(!empty($axela_option['off_breadcrumb'])){
                    $rs_breadcrumbs = get_post_meta(get_the_ID(), 'select-bread', true);
                    if( $rs_breadcrumbs != 'hide' ):        
                    if(function_exists('bcn_display')){?>
                        <div class="breadcrumbs-title"> <?php  bcn_display();?></div>
                    <?php } 
                    endif;
                } ?>
                <?php 
                    $post_meta_title = get_post_meta(get_the_ID(), 'select-title', true);?>
                    <?php if( $post_meta_title != 'hide' ){             
                    ?>
                        <h1 class="page-title">
                            <?php if($content_banner !=''){
                               echo esc_html($content_banner);
                            } else {
                               echo esc_html('Team Details', 'axela');
                            }
                            ?>
                        </h1>
                    <?php } 
                    
                ?>             
                </div>
              </div>
            </div>
          </div>
    </div>
<?php } ?>
</div>