<?php
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

    register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'bootstraptheme' ),
    ) );

    show_admin_bar(false);

    function enqueue_bootstrap () {
    
        wp_enqueue_style(
            'bootstrap', 
            get_template_directory_uri() . '/css/bootstrap.min.css',
            [],
            '20180316'
        );
        
        wp_enqueue_style(
            'style', 
            get_template_directory_uri() . '/style.css',
            [],
            '20180316'
        );
        
        wp_enqueue_script(
            'bootstrap-js',
            get_template_directory_uri() . '/js/bootstrap.min.js',
            array('jquery'),
            '20180316',
            true
        );  
    }
    
    // prida CSS a JS pro Bootstrap
    add_action('wp_enqueue_scripts', 'enqueue_bootstrap');

    // registrace sidebaru
    add_action( 'widgets_init', 'theme_slug_widgets_init' );
    function theme_slug_widgets_init() {
        register_sidebar( array(
            'name' => __( 'Pravý sloupec', 'theme-slug' ),
            'id' => 'sidebar-1',
            'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
            'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
        ) );
    }
?>