<?php
    global $axela_option;    
    require get_parent_theme_file_path('inc/footer/footer-options.php');

    $footer_style_option = !empty($axela_option['$footer_style_option']) ? $axela_option['$footer_style_option'] : '';    
    $footer_logo       =  get_post_meta(get_queried_object_id(), 'footer_logo_img', true);
    $footer_logo_size = !empty($axela_option['footer-logo-height']) ? 'style="height: '.$axela_option['footer-logo-height'].'"' : ''; 

?>
<div class="footer-bottom" <?php if(!empty( $copyright_bg)): ?> style="background: <?php echo esc_attr($copyright_bg); ?> !important;" <?php elseif(!empty( $copy_trans)): ?> style="background: <?php echo esc_attr($copy_trans); ?> !important;" <?php endif; ?>>
    <div class="<?php echo esc_attr($header_width);?>">
        <div class="copyright_border">
            
            <div class="copyright text-center" <?php if(!empty( $copy_space)): ?> style="padding: <?php echo esc_attr($copy_space); ?>" <?php endif; ?> >
                <?php if(!empty($axela_option['copyright'])){?>
                <p><?php echo wp_kses($axela_option['copyright'], 'axela'); ?></p>
                <?php }
                 else{
                    ?>
                <p><?php echo esc_html('&copy;')?> <?php echo date("Y");?>. <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> 
                </p>
                <?php
                 }   
                ?>
            </div>
              
        </div>
    </div>
</div>


