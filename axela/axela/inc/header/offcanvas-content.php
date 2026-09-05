<?php 

global $axela_option;
if(!empty($axela_option['facebook']) || !empty($axela_option['twitter']) || !empty($axela_option['rss']) || !empty($axela_option['pinterest']) || !empty($axela_option['google']) || !empty($axela_option['instagram']) || !empty($axela_option['vimeo']) || !empty($axela_option['tumblr']) ||  !empty($axela_option['youtube'])){
?>

    <ul class="offcanvas_social">  
        <?php
        if(!empty($axela_option['facebook'])) { ?>
        <li> 
        <a href="<?php echo esc_url($axela_option['facebook'])?>" target="_blank"><span><i class="fa fa-facebook"></i></span></a> 
        </li>
        <?php } ?>
        <?php if(!empty($axela_option['twitter'])) { ?>
        <li> 
        <a href="<?php echo esc_url($axela_option['twitter']);?> " target="_blank"><span><i class="fa fa-twitter"></i></span></a> 
        </li>
        <?php } ?>
        <?php if(!empty($axela_option['rss'])) { ?>
        <li> 
        <a href="<?php  echo esc_url($axela_option['rss']);?> " target="_blank"><span><i class="fa fa-rss"></i></span></a> 
        </li>
        <?php } ?>
        <?php if (!empty($axela_option['pinterest'])) { ?>
        <li> 
        <a href="<?php  echo esc_url($axela_option['pinterest']);?> " target="_blank"><span><i class="fa fa-pinterest-p"></i></span></a> 
        </li>
        <?php } ?>
        <?php if (!empty($axela_option['linkedin'])) { ?>
        <li> 
        <a href="<?php  echo esc_url($axela_option['linkedin']);?> " target="_blank"><span><i class="fa fa-linkedin"></i></span></a> 
        </li>
        <?php } ?>
        <?php if (!empty($axela_option['google'])) { ?>
        <li> 
        <a href="<?php  echo esc_url($axela_option['google']);?> " target="_blank"><span><i class="fa fa-google-plus-square"></i></span></a> 
        </li>
        <?php } ?>
        <?php if (!empty($axela_option['instagram'])) { ?>
        <li> 
        <a href="<?php  echo esc_url($axela_option['instagram']);?> " target="_blank"><span><i class="fa fa-instagram"></i></span></a> 
        </li>
        <?php } ?>
        <?php if(!empty($axela_option['vimeo'])) { ?>
        <li> 
        <a href="<?php  echo esc_url($axela_option['vimeo'])?> " target="_blank"><span><i class="fa fa-vimeo"></i></span></a> 
        </li>
        <?php } ?>
        <?php if (!empty($axela_option['tumblr'])) { ?>
        <li> 
        <a href="<?php  echo esc_url($axela_option['tumblr'])?> " target="_blank"><span><i class="fa fa-tumblr"></i></span></a> 
        </li>
        <?php } ?>
        <?php if (!empty($axela_option['youtube'])) { ?>
        <li> 
        <a href="<?php  echo esc_url($axela_option['youtube'])?> " target="_blank"><span><i class="fa fa-youtube"></i></span></a> 
        </li>
        <?php } ?>     
    </ul>
<?php }

