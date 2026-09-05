<?php
/**
 * ReduxFramework Sample Config File
 * For full documentation, please visit: http://docs.reduxframework.com/
 */
if (!class_exists('Redux')) {
    return;
}

// This is your option name where all the Redux data is stored.
$opt_name = "axela_option";

// This line is only for altering the demo. Can be easily removed.
$opt_name = apply_filters('axela/opt_name', $opt_name);
$theme = wp_get_theme(); // For use with some settings. Not necessary.

$args = array(
    // TYPICAL -> Change these values as you need/desire
    'opt_name'             => $opt_name,
    // This is where your data is stored in the database and also becomes your global variable name.
    'display_name'         => $theme->get('Name'),
    // Name that appears at the top of your panel
    'display_version'      => $theme->get('Version'),
    // Version that appears at the top of your panel
    'menu_type'            => 'menu',
    'page_priority'        => 8,
    //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
    'allow_sub_menu'       => true,
    // Show the sections below the admin menu item or not
    'menu_title'           => esc_html__('Axela Options', 'axela'),
    'page_title'           => esc_html__('Axela Options', 'axela'),
    // You will need to generate a Google API key to use this feature.
    // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
    'google_api_key'       => '',
    // Set it you want google fonts to update weekly. A google_api_key value is required.
    'google_update_weekly' => false,
    // Must be defined to add google fonts to the typography module
    'async_typography'     => true,
    // Use a asynchronous font on the front end or font string
    // Disable this in case you want to create your own google fonts loader
    'admin_bar'            => false,
    // Show the panel pages on the admin bar
    'admin_bar_icon'       => 'dashicons-portfolio',
    // Choose an icon for the admin bar menu
    'admin_bar_priority'   => 20,
    // Choose an priority for the admin bar menu
    'global_variable'      => '',
    // Set a different name for your global variable other than the opt_name
    'dev_mode'             => false,
    'forced_dev_mode_off' => true,
    // Show the time the page took to load, etc
    'update_notice'        => true,
    // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
    'customizer'           => true,
    'compiler' => true,

    // OPTIONAL -> Give you extra features
    'page_priority'        => 20,
    // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
    'page_parent'          => 'themes.php',
    // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
    'page_permissions'     => 'manage_options',
    // Permissions needed to access the options panel.
    'menu_icon'            => '',
    // Specify a custom URL to an icon
    'last_tab'             => '',
    // Force your panel to always open to a specific tab (by id)
    'page_icon'            => 'icon-themes',
    // Icon displayed in the admin panel next to your menu_title
    'page_slug'            => '',
    // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
    'save_defaults'        => true,
    // On load save the defaults to DB before user clicks save or not
    'default_show'         => false,
    // If true, shows the default value next to each field that is not the default value.
    'default_mark'         => '',
    // What to print by the field's title if the value shown is default. Suggested: *
    'show_import_export'   => true,
    // Shows the Import/Export panel when not used as a field.

    // CAREFUL -> These options are for advanced use only
    'transient_time'       => 60 * MINUTE_IN_SECONDS,
    'output'               => true,
    // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
    'output_tag'           => true,
    'force_output' => true,
    // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
    // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

    // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
    'database'             => '',
    // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
    'use_cdn'              => true,
    // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

    // HINTS
    'hints'                => array(
        'icon'          => 'el el-question-sign',
        'icon_position' => 'right',
        'icon_color'    => 'lightgray',
        'icon_size'     => 'normal',
        'tip_style'     => array(
            'color'   => 'red',
            'shadow'  => true,
            'rounded' => false,
            'style'   => '',
        ),
        'tip_position'  => array(
            'my' => 'top left',
            'at' => 'bottom right',
        ),
        'tip_effect'    => array(
            'show' => array(
                'effect'   => 'slide',
                'duration' => '500',
                'event'    => 'mouseover',
            ),
            'hide' => array(
                'effect'   => 'slide',
                'duration' => '500',
                'event'    => 'click mouseleave',
            ),
        ),
    )
);

// Panel Intro text -> before the form
if (!isset($args['global_variable']) || $args['global_variable'] !== false) {
    if (!empty($args['global_variable'])) {
        $v = $args['global_variable'];
    } else {
        $v = str_replace('-', '_', $args['opt_name']);
    }
    $args['intro_text'] = sprintf(esc_html__('Axela Theme', 'axela'), $v);
} else {
    $args['intro_text'] = esc_html__('Axela Theme', 'axela');
}

Redux::setArgs($opt_name, $args);

/*
     * ---> END ARGUMENTSaxela
      
     */
// -> START General Settings
Redux::setSection(
    $opt_name,
    array(
        'title'            => esc_html__('General Settings', 'axela'),
        'id'               => 'basic-checkbox',
        'customizer_width' => '450px',
        'fields'           => array(

            array(
                'id'       => 'enable_global',
                'type'     => 'switch',
                'title'    => esc_html__('Enable Global Settings', 'axela'),
                'subtitle' => esc_html__('If you enable global settings all option will be work only theme option', 'axela'),
                'default'  => false,
            ),

            array(
                'id'       => 'container_size',
                'title'    => esc_html__('Container Size', 'axela'),
                'subtitle' => esc_html__('Container Size example(1200px)', 'axela'),
                'type'     => 'text',
                'default'  => '1320px'
            ),

            array(
                'id'       => 'rs_favicon',
                'type'     => 'media',
                'title'    => esc_html__('Upload Favicon', 'axela'),
                'subtitle' => esc_html__('Upload your faviocn here', 'axela'),
                'url' => true
            ),

            array(
                'id'       => 'off_sticky',
                'type'     => 'switch',
                'title'    => esc_html__('Enable Sticky Menu', 'axela'),
                'subtitle' => esc_html__('You can show or hide sticky menu here', 'axela'),
                'default'  => false,
            ),   
            
            array(
                'id'       => 'show_top_bottom',
                'type'     => 'switch', 
                'title'    => esc_html__('Scroll to Top', 'axela'),
                'subtitle' => esc_html__('You can show or hide here', 'axela'),
                'default'  => false,
            ),
        )
    )
);

// -> START Header Section
Redux::setSection(
    $opt_name,
    array(
        'title'            => esc_html__('Header', 'axela'),
        'id'               => 'header',
        'customizer_width' => '450px',
        'icon' => 'el el-indent-left',
        'fields'           => array(
            array(
                'id'       => 'header_layout',
                'type'     => 'select',
                'title'    => esc_html__('Header Layout', 'axela'),
                'subtitle' => esc_html__('Select header layout. Choose between 1, 2 or 3 layout.', 'axela'),
                'options'   => axela_get_postTitleArray('rts-header'),
                'default' => 'style1'
            ),
        )
    )
);

//Preloader settings
Redux::setSection(
    $opt_name,
    array(
        'title'  => esc_html__('Preloader Style', 'axela'),
        'desc'   => esc_html__('Preloader Style Here', 'axela'),
        'fields' => array(
            array(
                'id'       => 'show_preloader',
                'type'     => 'switch',
                'title'    => esc_html__('Show Preloader', 'axela'),
                'subtitle' => esc_html__('You can show or hide preloader', 'axela'),
                'default'  => false,
            ),
            array(
                'id'        => 'preloader_bg_color',
                'type'      => 'color',
                'title'     => esc_html__('Preloader Background Color', 'axela'),
                'subtitle'  => esc_html__('Pick color', 'axela'),
                'default'   => '',
                'validate'  => 'color',
                'output'   => array('background' => '.loader-wrapper .loader-section')
            ),
            array(
                'id'        => 'preloader_animate_color',
                'type'      => 'color',
                'title'     => esc_html__('Preloader Animate Top Circle Color', 'axela'),
                'subtitle'  => esc_html__('Pick color', 'axela'),
                
                'validate'  => 'color',
                'output'    => array('border-top-color' => '.loader-axela')
            ),

            array(
                'id'        => 'preloader_animate_color2',
                'type'      => 'color',
                'title'     => esc_html__('Preloader Animate Middle Circle Color', 'axela'),
                'subtitle'  => esc_html__('Pick color', 'axela'),
               
                'validate'  => 'color',
                'output'    => array('border-top-color' => '.loader-axela:before')
            ),

            array(
                'id'        => 'preloader_animate_color3',
                'type'      => 'color',
                'title'     => esc_html__('Preloader Animate Inside Circle Color', 'axela'),
                'subtitle'  => esc_html__('Pick color', 'axela'),
               
                'validate'  => 'color',
                'output'    => array('border-top-color' => '.loader-axela:after')
            ),

            array(
                'id'    => 'preloader_img',
                'url'   => true,
                'title' => esc_html__('Preloader Image', 'axela'),
                'type'  => 'media',
            ),
        )
    )
);



//End Preloader settings  
// -> START Style Section
Redux::setSection($opt_name, array(
    'title'            => esc_html__('Style', 'axela'),
    'id'               => 'stle',
    'customizer_width' => '450px',
    'icon' => 'el el-brush',
));

Redux::setSection(
    $opt_name,
    array(
        'title'  => esc_html__('Global Style', 'axela'),
        'desc'   => esc_html__('Style your theme', 'axela'),
        'subsection' => true,
        'fields' => array(

            array(
                'id'        => 'body_bg_color',
                'type'      => 'color',
                'title'     => esc_html__('Body Backgroud Color', 'axela'),
                'subtitle'  => esc_html__('Pick body background color', 'axela'),
                'default'   => '#ffffff',
                'validate'  => 'color',
            ),

            array(
                'id'        => 'body_text_color',
                'type'      => 'color',
                'title'     => esc_html__('Text Color', 'axela'),
                'subtitle'  => esc_html__('Pick text color', 'axela'),
                'default'   => '#777777',
                'validate'  => 'color',
            ),

            array(
                'id'        => 'primary_color',
                'type'      => 'color',
                'title'     => esc_html__('Primary Color', 'axela'),
                'subtitle'  => esc_html__('Select Primary Color.', 'axela'),
                'default'   => '#083D59',
                'validate'  => 'color',
            ),

            array(
                'id'        => 'secondary_color',
                'type'      => 'color',
                'title'     => esc_html__('Secondary Color', 'axela'),
                'subtitle'  => esc_html__('Select Secondary Color.', 'axela'),
                'default'   => '#FFA84B',
                'validate'  => 'color',
            ),

            array(
                'id'        => 'link_text_color',
                'type'      => 'color',
                'title'     => esc_html__('Link Color', 'axela'),
                'subtitle'  => esc_html__('Pick Link color', 'axela'),
                'default'   => '#FFA84B',
                'validate'  => 'color',
            ),

            array(
                'id'        => 'link_hover_text_color',
                'type'      => 'color',
                'title'     => esc_html__('Link Hover Color', 'axela'),
                'subtitle'  => esc_html__('Pick link hover color', 'axela'),
                'default'   => '#083D59',
                'validate'  => 'color',
            ),

        )
    )
);


//Button settings
Redux::setSection(
    $opt_name,
    array(
        'title'      => esc_html__('Button Style', 'axela'),
        'desc'       => esc_html__('Button Style Here', 'axela'),
        'subsection' => true,
        'fields' => array(

            array(
                'id'        => 'btn_bg_color',
                'type'      => 'color',
                'title'     => esc_html__('Background Color', 'axela'),
                'subtitle'  => esc_html__('Pick color', 'axela'),
                'default'   => '#FFA84B',
                'validate'  => 'color',
            ),

            array(
                'id'        => 'btn_bg_hover',
                'type'      => 'color',
                'title'     => esc_html__('Hover Background', 'axela'),
                'subtitle'  => esc_html__('Pick color', 'axela'),
                'default'   => '#083D59',
                'validate'  => 'color',

            ),

            array(
                'id'        => 'btn_bg_hover_border',
                'type'      => 'color',
                'title'     => esc_html__('Hover Border Color', 'axela'),
                'subtitle'  => esc_html__('Pick color', 'axela'),
                'default'   => '#083D59',
                'validate'  => 'color',
            ),

            array(
                'id'        => 'btn_text_color',
                'type'      => 'color',
                'title'     => esc_html__('Text Color', 'axela'),
                'subtitle'  => esc_html__('Pick color', 'axela'),
                'default'   => '#ffffff',
                'validate'  => 'color',
            ),

            array(
                'id'        => 'btn_txt_hover_color',
                'type'      => 'color',
                'title'     => esc_html__('Hover Text Color', 'axela'),
                'subtitle'  => esc_html__('Pick color', 'axela'),
                'default'   => '#ffffff',
                'validate'  => 'color',
            ),
        )
    )
);


//Breadcrumb settings
Redux::setSection(
    $opt_name,
    array(
        'title'  => esc_html__('Breadcrumb Style', 'axela'),
        'subsection' => true,
        'fields' => array(

            array(
                'id'       => 'off_breadcrumb',
                'type'     => 'switch',
                'title'    => esc_html__('Show off Breadcrumb', 'axela'),
                'subtitle' => esc_html__('You can show or hide off breadcrumb here', 'axela'),
                'default'  => true,
            ),

            array(
                'id'       => 'align_breadcrumb',
                'type'     => 'switch',
                'title'    => esc_html__('Breadcrumb Align Left', 'axela'),
                'subtitle' => esc_html__('You can breadcrumb align left', 'axela'),
                'default'  => false,
            ),

            array(
                'id'        => 'breadcrumb_bg_color',
                'type'      => 'color',
                'title'     => esc_html__('Background Bg Color', 'axela'),
                'subtitle'  => esc_html__('Pick color', 'axela'),
                'default'   => '#f6f6f6',
                'validate'  => 'color',
            ),

            array(
                'id'        => 'page_title_color',
                'type'      => 'color',
                'title'     => esc_html__('Background Title Color', 'axela'),
                'subtitle'  => esc_html__('Pick color', 'axela'),
                'default'   => '#000',
                'validate'  => 'color',
                'output'    => array('color' => '.reactheme-breadcrumbs .page-title')
            ),

            array(
                'id'          => 'opt-typography',
                'type'        => 'typography', 
                'title'       => __('Banner Title Typography', 'finbiz'),    
                'output'      => array('.reactheme-breadcrumbs .page-title'),
                'units'       =>'px',
                'subtitle'    => __('Typography option with each property can be called individually.', 'finbiz'),                
            ),


          
            array(
                'id'       => 'page_banner_main',
                'type'     => 'media',
                'title'    => esc_html__('Background Banner', 'axela'),
                'subtitle' => esc_html__('Upload your banner', 'axela'),
            ),


            array(
                'id'        => 'breadcrumb_top_gap',
                'type'      => 'text',
                'title'     => esc_html__('Top Gap', 'axela'),
                'default'   => '30px',

            ),
            array(
                'id'        => 'breadcrumb_bottom_gap',
                'type'      => 'text',
                'title'     => esc_html__('Bottom Gap', 'axela'),
                'default'   => '30px',
            ),

            array(
                'id'        => 'mobile_breadcrumb_top_gap',
                'type'      => 'text',
                'title'     => esc_html__('Mobile Top Gap', 'axela'),
                'default'   => '30px',

            ),
            array(
                'id'        => 'mobile_breadcrumb_bottom_gap',
                'type'      => 'text',
                'title'     => esc_html__('Mobile Bottom Gap', 'axela'),
                'default'   => '30px',
            ),

        )
    )
);
//-> START Typography
Redux::setSection(
    $opt_name,
    array(
        'title'  => esc_html__('Typography', 'axela'),
        'id'     => 'typography',
        'desc'   => esc_html__('You can specify your body and heading font here', 'axela'),
        'icon'   => 'el el-font',
        'fields' => array(
            array(
                'id'       => 'opt-typography-body',
                'type'     => 'typography',
                'title'    => esc_html__('Body Font', 'axela'),
                'subtitle' => esc_html__('Specify the body font properties.', 'axela'),
                'google'   => true,
                'font-style' => false,
                'default'  => array(
                    'font-size'   => '16px',
                    'font-family' => 'Jost',
                    'font-weight' => '400',
                ),
            ),
            array(
                'id'       => 'opt-typography-menu',
                'type'     => 'typography',
                'title'    => esc_html__('Navigation Font', 'axela'),
                'subtitle' => esc_html__('Specify the menu font properties.', 'axela'),
                'google'   => true,
                'font-backup' => true,
                'all_styles'  => true,
                'default'  => array(
                    'color'       => '',
                    'font-family' => '',
                    'google'      => true,
                    'font-size'   => '15px',
                    'font-weight' => '500',
                ),
            ),
            array(
                'id'          => 'opt-typography-h1',
                'type'        => 'typography',
                'title'       => esc_html__('Heading H1', 'axela'),
                'font-backup' => true,
                'all_styles'  => true,
                'units'       => 'px',
                'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'axela'),
                'default'     => array(
                    'color'       => '#083d59',
                    'font-style'  => '700',
                    'font-family' => '',
                    'google'      => true,
                    'font-size'   => '46px',
                    'line-height' => '56px'

                ),
            ),
            array(
                'id'          => 'opt-typography-h2',
                'type'        => 'typography',
                'title'       => esc_html__('Heading H2', 'axela'),
                'font-backup' => true,
                'all_styles'  => true,
                'units'       => 'px',
                // Defaults to px
                'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'axela'),
                'default'     => array(
                    'color'       => '#083d59',
                    'font-style'  => '700',
                    'font-family' => '',
                    'google'      => true,
                    'font-size'   => '36px',
                    'line-height' => '46px'

                ),
            ),
            array(
                'id'          => 'opt-typography-h3',
                'type'        => 'typography',
                'title'       => esc_html__('Heading H3', 'axela'),
                'units'       => 'px',
                // Defaults to px
                'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'axela'),
                'default'     => array(
                    'color'       => '#083d59',
                    'font-style'  => '700',
                    'font-family' => '',
                    'google'      => true,
                    'font-size'   => '28px',
                    'line-height' => '32px'

                ),
            ),
            array(
                'id'          => 'opt-typography-h4',
                'type'        => 'typography',
                'title'       => esc_html__('Heading H4', 'axela'),
                'font-backup' => false,
                'all_styles'  => true,
                'units'       => 'px',
                // Defaults to px
                'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'axela'),
                'default'     => array(
                    'color'       => '#083d59',
                    'font-style'  => '700',
                    'font-family' => '',
                    'google'      => true,
                    'font-size'   => '20px',
                    'line-height' => '28px'
                ),
            ),
            array(
                'id'          => 'opt-typography-h5',
                'type'        => 'typography',
                'title'       => esc_html__('Heading H5', 'axela'),
                'font-backup' => false,
                'all_styles'  => true,
                'units'       => 'px',
                // Defaults to px
                'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'axela'),
                'default'     => array(
                    'color'       => '#083d59',
                    'font-style'  => '700',
                    'font-family' => '',
                    'google'      => true,
                    'font-size'   => '18px',
                    'line-height' => '26px'
                ),
            ),
            array(
                'id'          => 'opt-typography-6',
                'type'        => 'typography',
                'title'       => esc_html__('Heading H6', 'axela'),

                'font-backup' => false,
                'all_styles'  => true,
                'units'       => 'px',
                // Defaults to px
                'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'axela'),
                'default'     => array(
                    'color'       => '#083d59',
                    'font-style'  => '700',
                    'font-family' => '',
                    'google'      => true,
                    'font-size'   => '16px',
                    'line-height' => '20px'
                ),
            ),

        )
    )

);
  /*Team Sections*/
  Redux::setSection( $opt_name, array(
    'title'            => esc_html__( 'Team Section', 'axela' ),
    'id'               => 'team',
    'customizer_width' => '450px',
    'icon' => 'el el-user',
    'fields'           => array(

        array(
                'id'       => 'team_page_title',                               
                'title'    => esc_html__( 'Team Custom Title', 'axela' ),
                'subtitle' => esc_html__( 'Enter title here', 'axela' ),
                'type'     => 'text',
                'default'  => esc_html__('Team Details', 'axela'),
                
            ), 

        array(
                'id'       => 'team_page_subtitle',                               
                'title'    => esc_html__( 'Team Custom Sub Title', 'axela' ),
                'subtitle' => esc_html__( 'Enter sub title here', 'axela' ),
                'type'     => 'text',
                'default'  => esc_html__('Responsive & functional IT design

', 'axela'),
                
            ), 
    
    
        array(
                'id'       => 'team_single_image', 
                'url'      => true,     
                'title'    => esc_html__( 'Team Single page banner image', 'axela' ),                    
                'type'     => 'media',
                
            ),  

        array(
                'id'        => 'team_single_bg_color',
                'type'      => 'color',                           
                'title'     => esc_html__('Sinlge Team Body Backgroud Color','axela'),
                'subtitle'  => esc_html__('Pick body background color', 'axela'),
                'default'   => '#fff',
                'validate'  => 'color',                        
            ),
        
        array(
                'id'       => 'team_slug',                               
                'title'    => esc_html__( 'Team Slug', 'axela' ),
                'subtitle' => esc_html__( 'Enter Team Slug Here', 'axela' ),
                'type'     => 'text',
                'default'  => esc_html__('teams', 'axela'),
                
            ),                 
                      
        )
    ) 
);

Redux::setSection( $opt_name, array(
    'title'            => esc_html__( 'Portfolio Section', 'axela' ),
    'id'               => 'Portfolio',
    'customizer_width' => '450px',
    'icon' => 'el el-align-right',
    'fields'           => array(
    
        array(
                'id'       => 'department_single_image', 
                'url'      => true,     
                'title'    => esc_html__( 'Portfolio Single page banner image', 'axela' ),                    
                'type'     => 'media',
                
        ),  

         array(
                'id'       => 'portfolio_slug',                               
                'title'    => esc_html__( 'Portfolio Slug', 'axela' ),
                'subtitle' => esc_html__( 'Enter Portfolio Slug Here', 'axela' ),
                'type'     => 'text',
                'default'  => 'rt-portfolios',                
            ), 
            array(
                'id'       => 'portfolio_cat_slug',                               
                'title'    => esc_html__( 'Portfolio Category Slug', 'axela' ),
                'subtitle' => esc_html__( 'Enter Portfolio Cat Slug Here', 'axela' ),
                'type'     => 'text',
                'default'  => '',                    
            ), 

            array(
                'id'        => 'portfolio_bg_color',
                'type'      => 'color',
                'title'     => esc_html__('Project Information Area Background', 'axela'),
                'subtitle'  => esc_html__('Pick color', 'axela'),
                'default'   => '',
                'validate'  => 'color',
                'output'    => array('background' => '.big-bg-porduct-details .project-info')
            ),
            array(
                'id'        => 'portfolio_bg_border_color',
                'type'      => 'color_rgba',
                'title'     => esc_html__('Project Information Border Color', 'axela'),
                'subtitle'  => esc_html__('Pick color', 'axela'),
              
                'output'    => array('border-color' => '.big-bg-porduct-details .project-info .info-body .single-info')
            ),
        )
     ) 
);
/*Blog Sections*/
Redux::setSection(
    $opt_name,
    array(
        'title'            => esc_html__('Blog', 'axela'),
        'id'               => 'blog',
        'customizer_width' => '450px',
        'icon' => 'el el-comment',
    )
);

Redux::setSection(
    $opt_name,
    array(
        'title'            => esc_html__('Blog Settings', 'axela'),
        'id'               => 'blog-settings',
        'subsection'       => true,
        'customizer_width' => '450px',
        'fields'           => array(
            array(
                'id'    => 'blog_banner_main',
                'url'   => true,
                'title' => esc_html__('Blog Page Banner', 'axela'),
                'type'  => 'media',
            ),

            array(
                'id'        => 'blog_bg_color',
                'type'      => 'color',
                'title'     => esc_html__('Body Backgroud Color', 'axela'),
                'subtitle'  => esc_html__('Pick body background color', 'axela'),
                'default'   => '#fbfbfb',
                'validate'  => 'color',
            ),

            array(
                'id'       => 'blog_title',
                'title'    => esc_html__('Blog Page Heading Title', 'axela'),
                'subtitle' => esc_html__('Enter Blog  Title Here', 'axela'),
                'type'     => 'text',
            ),

            array(
                'id'       => 'blog_post_title',
                'type'      => 'color',
                'title'     => esc_html__('Blog Post Title  Color', 'axela'),
                'subtitle'  => esc_html__('Pick color', 'axela'),
                'default'   => '',
                'validate'  => 'color',
                'output'    => array('color' => '.blog .reactheme-blog .blog-item .full-blog-content .title-wrap .blog-title a, 
                .archive .reactheme-blog .blog-item .full-blog-content .title-wrap .blog-title a')
            ),

            array(
                'id'       => 'blog_post_title_hover',
                'type'      => 'color',
                'title'     => esc_html__('Blog Post Title Hover Color', 'axela'),
                'subtitle'  => esc_html__('Pick color', 'axela'),
                'default'   => '',
                'validate'  => 'color',
                'output'    => array('color' => 'body.blog .reactheme-blog .blog-item .full-blog-content .title-wrap .blog-title:hover a, 
                body.archive .reactheme-blog .blog-item .full-blog-content .title-wrap .blog-title:hover a')
            ),

            array(
                'id'       => 'blog_item_border_title',
                'type'      => 'color',
                'title'     => esc_html__('Blog Item Border  Color', 'axela'),
                'subtitle'  => esc_html__('Pick color', 'axela'),
                'default'   => '',
                'validate'  => 'color',
                'output'    => array('border-color' => '.blog .reactheme-blog .blog-item, .archive .reactheme-blog .blog-item,
                .single .news-details-inner,
                .reactheme-blog-details .author-block')
            ),

            array(
                'id'        => 'blog_bg_sidebar_color',
                'type'      => 'color',
                'title'     => esc_html__('Blog Sidebar Boxes Bg ', 'axela'),
                'subtitle'  => esc_html__('Pick background color', 'axela'),
                'default'   => '',
                'validate'  => 'color',
                'output'    => array('background' => '.dynamic-sidebar .widget')
            ),

            array(
                'id'               => 'blog-layout',
                'type'             => 'image_select',
                'title'            => esc_html__('Select Blog Layout', 'axela'),
                'subtitle'         => esc_html__('Select your blog layout', 'axela'),
                'options'          => array(
                    'full'             => array(
                        'alt'              => esc_html__('Blog Style 1', 'axela'),
                        'img'              => get_template_directory_uri() . '/libs/img/1c.png'
                    ),
                    '2right'           => array(
                        'alt'              => esc_html__('Blog Style 2', 'axela'),
                        'img'              => get_template_directory_uri() . '/libs/img/2cr.png'
                    ),
                    '2left'            => array(
                        'alt'              => esc_html__('Blog Style 3', 'axela'),
                        'img'              => get_template_directory_uri() . '/libs/img/2cl.png'
                    ),
                ),
                'default'          => '2right'
            ),

            array(
                'id'               => 'blog-grid',
                'type'             => 'select',
                'title'            => esc_html__('Select Blog Gird', 'axela'),
                'desc'             => esc_html__('Select your blog gird layout', 'axela'),
                //Must provide key => value pairs for select options
                'options'          => array(
                    '12'               => esc_html__('1 Column', 'axela'),
                    '6'                => esc_html__('2 Column', 'axela'),
                    '4'                => esc_html__('3 Column', 'axela'),
                    '3'                => esc_html__('4 Column', 'axela'),
                ),
                'default'          => '12',
            ),

            array(
                'id'               => 'blog-author-post',
                'type'             => 'select',
                'title'            => esc_html__('Show Author Info ', 'axela'),
                'desc'             => esc_html__('Select author info show or hide', 'axela'),
                //Must provide key => value pairs for select options
                'options'          => array(
                    'show'             => esc_html__('Show', 'axela'),
                    'hide'             => esc_html__('Hide', 'axela'),
                ),
                'default'          => 'show',

            ),



            array(
                'id'               => 'blog-category',
                'type'             => 'select',
                'title'            => esc_html__('Show Category', 'axela'),

                //Must provide key => value pairs for select options
                'options'          => array(
                    'show'             => esc_html__('Show', 'axela'),
                    'hide'             => esc_html__('Hide', 'axela'),
                ),
                'default'          => 'show',

            ),

            array(
                'id'               => 'blog-date',
                'type'             => 'switch',
                'title'            => esc_html__('Show Date', 'axela'),
                'desc'             => esc_html__('You can show/hide date at blog page', 'axela'),

                'default'          => true,
            ),
            array(
                'id'               => 'blog_readmore',
                'title'            => esc_html__('Blog  ReadMore Text', 'axela'),
                'subtitle'         => esc_html__('Enter Blog  ReadMore Here', 'axela'),
                'type'             => 'text',
            ),

        )
    )

);

/*Single Post Sections*/
Redux::setSection(
    $opt_name,
    array(
        'title'            => esc_html__('Single Post', 'axela'),
        'id'               => 'spost',
        'subsection'       => true,
        'customizer_width' => '450px',
        'fields'           => array(

            array(
                'id'       => 'blog_banner',
                'url'      => true,
                'title'    => esc_html__('Blog Single page banner', 'axela'),
                'type'     => 'media',

            ),

            array(
                'id'       => 'blog-comments',
                'type'     => 'select',
                'title'    => esc_html__('Show Comment', 'axela'),
                'desc'     => esc_html__('Select comments show or hide', 'axela'),
                //Must provide key => value pairs for select options
                'options'  => array(
                    'show' => esc_html__('Show', 'axela'),
                    'hide' => esc_html__('Hide', 'axela'),
                ),
                'default'  => 'show',

            ),

            array(
                'id'       => 'blog-author',
                'type'     => 'select',
                'title'    => esc_html__('Show Ahthor Info', 'axela'),
                'desc'     => esc_html__('Select author info show or hide', 'axela'),
                //Must provide key => value pairs for select options
                'options'  => array(
                    'show' => esc_html__('Show', 'axela'),
                    'hide' => esc_html__('Hide', 'axela'),
                ),
                'default'  => 'show',

            ),

        )
    )


);


if (class_exists('WooCommerce')) {
    Redux::setSection(
        $opt_name,
        array(
            'title'  => esc_html__('Woocommerce', 'axela'),
            'icon'   => 'el el-shopping-cart',
        )
    );

    Redux::setSection(
        $opt_name,
        array(
            'title'            => esc_html__('Shop', 'axela'),
            'id'               => 'shop_layout',
            'customizer_width' => '450px',
            'subsection' => true,
            'fields'           => array(
                array(
                    'id'       => 'shop_banner',
                    'url'      => true,
                    'title'    => esc_html__('Shop page banner', 'axela'),
                    'type'     => 'media',
                ),
                array(
                    'id'       => 'shop-layout',
                    'type'     => 'image_select',
                    'title'    => esc_html__('Select Shop Layout', 'axela'),
                    'subtitle' => esc_html__('Select your shop layout', 'axela'),
                    'options'  => array(
                        'full'      => array(
                            'alt'   => esc_html__('Shop Style 1', 'axela'),
                            'img'   => get_template_directory_uri() . '/libs/img/1c.png'
                        ),
                        'right-col' => array(
                            'alt'   => esc_html__('Shop Style 2', 'axela'),
                            'img'   => get_template_directory_uri() . '/libs/img/2cr.png'
                        ),
                        'left-col'  => array(
                            'alt'   => esc_html__('Shop Style 3', 'axela'),
                            'img'   => get_template_directory_uri() . '/libs/img/2cl.png'
                        ),
                    ),
                    'default' => 'full'
                ),

                array(
                    'id'       => 'wc_num_product',
                    'type'     => 'text',
                    'title'    => esc_html__('Number of Products Per Page', 'axela'),
                    'default'  => '9',
                ),

                array(
                    'id'       => 'wc_num_product_per_row',
                    'type'     => 'text',
                    'title'    => esc_html__('Number of Products Per Row', 'axela'),
                    'default'  => '3',
                ),

                array(
                    'id'       => 'wc_cart_icon',
                    'type'     => 'switch',
                    'title'    => esc_html__('Cart Icon Show At Menu Area', 'axela'),
                    'on'       => esc_html__('Enabled', 'axela'),
                    'off'      => esc_html__('Disabled', 'axela'),
                    'default'  => false,
                ),

                array(
                    'id'       => 'disable-sidebar',
                    'type'     => 'switch',
                    'title'    => esc_html__('Sidebar Disable For Single Product Page', 'axela'),
                    'default'  => true,
                ),

                array(
                    'id'       => 'wc_wishlist_icon',
                    'type'     => 'switch',
                    'title'    => esc_html__('Show Wishlist Icon', 'axela'),
                    'on'       => esc_html__('Enabled', 'axela'),
                    'off'      => esc_html__('Disabled', 'axela'),
                    'default'  => true,
                ),
                array(
                    'id'       => 'wc_quickview_icon',
                    'type'     => 'switch',
                    'title'    => esc_html__('Product Quickview Icon', 'axela'),
                    'on'       => esc_html__('Enabled', 'axela'),
                    'off'      => esc_html__('Disabled', 'axela'),
                    'default'  => true,
                ),
                array(
                    'id'       => 'wc_show_new',
                    'type'     => 'switch',
                    'title'    => esc_html__('Show Product New Badge', 'axela'),
                    'on'       => esc_html__('Enabled', 'axela'),
                    'off'      => esc_html__('Disabled', 'axela'),
                    'default'  => true,
                ),

                array(
                    'id'       => 'wc_new_product_days',
                    'type'     => 'select',
                    'title'    => esc_html__('New Days', 'axela'),
                    'desc'     => esc_html__('Select last day, when uploaded products will show a new badge.', 'axela'),
                    //Must provide key => value pairs for select options
                    'options'  => array(
                        '7'     => esc_html__('7 Days', 'axela'),
                        '10' => esc_html__('10 Days', 'axela'),
                        '15' => esc_html__('15 Days', 'axela'),
                        '30' => esc_html__('30 Days', 'axela'),
                    ),
                    'default'  => '15',

                ),



            )
        )
    );
    Redux::setSection(
        $opt_name,
        array(
            'title'            => esc_html__('Shop Single', 'axela'),
            'id'               => 'shop_single',
            'customizer_width' => '450px',
            'subsection' => true,
            'fields'           => array(

                array(
                    'id'       => 'single-gallery-layout',
                    'type'     => 'image_select',
                    'title'    => esc_html__('Single Product Gallery Layout', 'axela'),
                    'subtitle' => esc_html__('Select single page gallery layout', 'axela'),
                    'options'  => array(
                        'default-thumb'      => array(
                            'alt'   => esc_html__('Style 1', 'axela'),
                            'img'   => get_template_directory_uri() . '/libs/img/1c.png'
                        ),
                        'right-thumb' => array(
                            'alt'   => esc_html__('Style 2', 'axela'),
                            'img'   => get_template_directory_uri() . '/libs/img/2cr.png'
                        ),
                        'left-thumb'  => array(
                            'alt'   => esc_html__('Style 3', 'axela'),
                            'img'   => get_template_directory_uri() . '/libs/img/2cl.png'
                        ),
                    ),
                    'default' => 'default-thumb'
                ),

                array(
                    'id'       => 'single_releted_products',
                    'type'     => 'text',
                    'title'    => esc_html__('Number of Releted Products in Product detail Page', 'axela'),
                    'default'  => '4',
                ),
                array(
                    'id'       => 'single_releted_products_col',
                    'type'     => 'text',
                    'title'    => esc_html__('Coloumn Number of Releted Products in Product detail Page', 'axela'),
                    'default'  => '4',
                ),

            )
        )
    );
}
Redux::setSection(
    $opt_name,
    array(
        'title'  => esc_html__('Footer Option', 'axela'),
        'desc'   => esc_html__('Footer style here', 'axela'),
        'subsection' => false,
        'icon'   => 'el el-th-large',
        'fields' => array(

            array(
                'id'       => 'footer_style',
                'type'     => 'select',
                'title'    => esc_html__('Footer Layout', 'axela'),
                'subtitle' => esc_html__('Select footer layout. Choose between 1, 2 or 3 layout.', 'axela'),
                'options'   => axela_get_postTitleArray('rts-footer'),
                'default' => 'style1'
            ),

        )
    )
);

Redux::setSection(
    $opt_name,
    array(
        'title'  => esc_html__('404 Error Page', 'axela'),
        'desc'   => esc_html__('404 details  here', 'axela'),
        'icon'   => 'el el-error-alt',
        'fields' => array(

            array(
                'id'       => 'title_404',
                'type'     => 'text',
                'title'    => esc_html__('Title', 'axela'),
                'subtitle' => esc_html__('Enter title for 404 page', 'axela'),
                'default'  => esc_html__('404', 'axela')
            ),

            array(
                'id'       => 'text_404',
                'type'     => 'text',
                'title'    => esc_html__('Text', 'axela'),
                'subtitle' => esc_html__('Enter text for 404 page', 'axela'),
                'default'  => esc_html__('Page Not Found', 'axela')
            ),


            array(
                'id'       => 'back_home',
                'type'     => 'text',
                'title'    => esc_html__('Back to Home Button Label', 'axela'),
                'subtitle' => esc_html__('Enter label for "Back to Home" button', 'axela'),
                'default'  => esc_html__('Back to Homepage', 'axela')

            ),
            array(
                'id'       => '404_bg',
                'type'     => 'media',
                'title'    => esc_html__('404 page Image', 'axela'),
                'subtitle' => esc_html__('Upload your image', 'axela'),
                'url' => true
            ),


        )
    )
);
Redux::setSection(
    $opt_name,
    array(
        'title'  => esc_html__('Subscription Modal', 'axela'),
        'desc'   => esc_html__('Customize Subscription Modal Settings', 'axela'),
        'icon'   => 'el el-envelope',
        'fields' => array(

            array(
                'id'       => 'enable_subscription_modal',
                'type'     => 'switch', 
                'title'    => esc_html__('Enable Subscription Modal', 'axela'),
                'subtitle' => esc_html__('Enable Subscription Modal on first page load', 'axela'),
                'default'  => true,
            ),
            array(
                'id'       => 'wsm_title',
                'type'     => 'text',
                'title'    => esc_html__('Title', 'axela'),
                'subtitle' => esc_html__('Enter title for Subscription Modal', 'axela'),
                'default'  => esc_html__('Subscribe to Our Newsletter', 'axela')
            ),
            array(
                'id'       => 'wsm_subtitle',
                'type'     => 'text',
                'title'    => esc_html__('Subtitle', 'axela'),
                'subtitle' => esc_html__('Enter title for Subscription Modal', 'axela'),
            ),
            array(
                'id'       => 'wsm_shortcode',
                'type'     => 'text',
                'title'    => esc_html__('Give Shortcode', 'axela'),
                'subtitle' => esc_html__('Give Shortcode Generated by MC4WP plugin', 'axela'),
            ),
            array(
                'id'       => 'wsm_bg',
                'type'     => 'media',
                'title'    => esc_html__('Give Banner Image for Subscription Modal', 'axela'),
                'subtitle' => esc_html__('Upload your image', 'axela'),
                'url' => true
            ),
            array(
                'id'       => 'wsm_info_notice',
                'type'     => 'text',
                'title'    => esc_html__('Information Notice', 'axela'),
                'subtitle' => esc_html__('Enter any Information Notice, if you want to show.', 'axela'),
            ),


        )
    )
);


if (!function_exists('compiler_action')) {
    function compiler_action($options, $css, $changed_values)
    {
        echo '<h1>The compiler hook has run!</h1>';
        echo "<pre>";
        print_r($changed_values); // Values that have changed since the last save
        echo "</pre>";
    }
}

/**
 * Custom function for the callback validation referenced above
 * */
if (!function_exists('redux_validate_callback_function')) {
    function redux_validate_callback_function($field, $value, $existing_value)
    {
        $error   = false;
        $warning = false;

        //do your validation
        if ($value == 1) {
            $error = true;
            $value = $existing_value;
        } elseif ($value == 2) {
            $warning = true;
            $value   = $existing_value;
        }

        $return['value'] = $value;

        if ($error == true) {
            $field['msg']    = 'your custom error message';
            $return['error'] = $field;
        }

        if ($warning == true) {
            $field['msg']      = 'your custom warning message';
            $return['warning'] = $field;
        }

        return $return;
    }
}

/**
 * Custom function for the callback referenced above
 */
if (!function_exists('redux_my_custom_field')) {
    function redux_my_custom_field($field, $value)
    {
        print_r($field);
        echo '<br/>';
        print_r($value);
    }
}

/**
 * Custom function for filtering the sections array. Good for child themes to override or add to the sections.     
 * */
if (!function_exists('dynamic_section')) {
    function dynamic_section($sections)
    {
        //$sections = array();
        $sections[] = array(
            'title'  => esc_html__('Section via hook', 'axela'),
            'desc'   => esc_html__('<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'axela'),
            'icon'   => 'el el-paper-clip',
            'fields' => array()
        );
        return $sections;
    }
}

/**
 * Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.
 * */
if (!function_exists('change_arguments')) {
    function change_arguments($args)
    {
        return $args;
    }
}

/**
 * Filter hook for filtering the default value of any given field. Very useful in development mode.
 * */
if (!function_exists('change_defaults')) {
    function change_defaults($defaults)
    {
        $defaults['str_replace'] = 'Testing filter hook!';
        return $defaults;
    }
}

/**
 * Removes the demo link and the notice of integrated demo from the redux-framework plugin
 */
if (!function_exists('remove_demo')) {
    function remove_demo()
    {
        // Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
        if (class_exists('ReduxFrameworkPlugin')) {
            remove_action('plugin_row_meta', array(
                ReduxFrameworkPlugin::instance(),
                'plugin_metalinks'
            ), null, 2);
            remove_action('admin_notices', array(ReduxFrameworkPlugin::instance(), 'admin_notices'));
        }
    }
}
