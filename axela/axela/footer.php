        </div><!-- .content -->
    </div><!-- .container -->
</div><!-- .main-container -->

<?php
global $axela_option;
require get_parent_theme_file_path('inc/footer/footer-options.php'); ?>
<footer>
    <?php
 get_template_part( 'inc/footer/footer','top' ); 
?>
</footer>
</div><!-- #page -->
<?php if(!empty($axela_option['show_top_bottom'])){
?>
 <!-- start top-to-bottom  -->
<div id="top-to-bottom">
<div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 23.9589;"></path>
        </svg>
    </div>
</div>   
<?php } 
 wp_footer(); ?>
  </body>
</html>
