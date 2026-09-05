<?php
function axela_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'axela' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'This is sidebar area for blog post and single post.', 'axela' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar Shop', 'waretech' ),
		'id'            => 'woocommerce',
		'description'   => esc_html__( 'This is sidebar area Shop Pages.', 'waretech' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
			
}
add_action( 'widgets_init', 'axela_widgets_init' );