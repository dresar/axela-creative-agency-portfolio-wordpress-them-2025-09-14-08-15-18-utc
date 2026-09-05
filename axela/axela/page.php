<?php
/**
 * The template for displaying all pages
 *
 * @package Axela
 */

get_header(); 

// Get page layout from custom field
$page_layout = get_post_meta( get_the_ID(), 'layout', true );

// Initialize layout variables
$main_column_width = '12'; // Default full width
$sidebar_position = '';

// Set layout based on page meta
switch ( $page_layout ) {
    case '2left':
        $main_column_width = '8';
        $sidebar_position = 'left-sidebar';
        break;
    case '2right':
        $main_column_width = '8';
        $sidebar_position = 'right-sidebar';
        break;
    default:
        $main_column_width = '12';
        break;
}

// Build CSS classes
$row_classes = 'row';
if ( $sidebar_position === 'left-sidebar' ) {
    $row_classes .= ' padding-left-sidebar';
}

$main_column_classes = sprintf( 'col-lg-%s', esc_attr( $main_column_width ) );
if ( $sidebar_position ) {
    $main_column_classes .= ' ' . esc_attr( $sidebar_position );
}
?>

<div class="<?php echo esc_attr( $row_classes ); ?>">
    <div class="<?php echo esc_attr( $main_column_classes ); ?>">
        <?php
        // Start the loop
        while ( have_posts() ) :
            the_post();
            
            // Include the page content template
            get_template_part( 'template-parts/content', 'page' );
            
        endwhile; // End of the loop
        ?>
    </div>
    
    <?php 
    // Include sidebar if layout supports it
    if ( $page_layout === '2left' || $page_layout === '2right' ) {
        get_sidebar( 'page' );
    }
    ?>
</div>

<?php
get_footer();