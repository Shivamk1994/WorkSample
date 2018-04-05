<?php
/*
=============================================================
  Enqueue Scripts and Styles
=============================================================
*/
function theme_enqueue_scripts() {
    //CSS
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.4', 'all');
        wp_enqueue_style('magnific',get_template_directory_uri() . '/css/magnific-popup.css', array(), '3.3.4', 'all');
        wp_enqueue_style('slick-slider',get_template_directory_uri() . '/css/slick.css', array(), '3.3.4', 'all');
        wp_enqueue_style('aos',get_template_directory_uri() . '/css/aos.css', array(), '3.3.4', 'all');
        wp_enqueue_style('Parisienne-font','https://fonts.googleapis.com/css?family=Parisienne');
        wp_enqueue_style('Ovo-font','https://fonts.googleapis.com/css?family=Ovo');
        wp_enqueue_style('Raleway-font','https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700');
      	wp_enqueue_style('Roboto-font', 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900');
  	    wp_enqueue_style('font-awesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
        wp_enqueue_style('architecture', get_template_directory_uri() . '/css/stylesheet.css', array(), '3.3.4', 'all');


   	//JS
        wp_enqueue_script('jquery', get_stylesheet_directory_uri() . '/js/jquery.js', array('jquery'), false);
        wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array('jquery'), false);
        wp_enqueue_script('waypoints-js', get_stylesheet_directory_uri() . '/js/jquery.waypoints.min.js', array('jquery'), false);
        wp_enqueue_script('aso-js', get_stylesheet_directory_uri() . '/js/aos.js', array('jquery'), false);
        wp_enqueue_script('magnific-js', get_stylesheet_directory_uri() . '/js/jquery.magnific-popup.js', array('jquery'), false);
        wp_enqueue_script('slick-js', get_stylesheet_directory_uri() . '/js/slick.js', array('jquery'), false);
        wp_enqueue_script('architecture', get_stylesheet_directory_uri() . '/js/script.js', array('jquery'), false);

 }
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');


/*
=============================================================
  Hide admin bar
=============================================================
*/
 function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
 }
 add_action('get_header', 'remove_admin_login_header');

function remove_admin_bar(){
    // if (!current_user_can('administrator') && !is_admin()) {
      show_admin_bar(false);
    // }
}
add_action('after_setup_theme', 'remove_admin_bar');


/*
=============================================================
  Register Menus
=============================================================
*/
function register_my_menus() {
    add_theme_support('menus');
    register_nav_menu('primary','Primary header navigation');
    register_nav_menu('secondary','header right navigation');
}
add_action('init', 'register_my_menus');


/*
===================================
  Theme support function
===================================
*/
add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('post-formats', array('aside', 'image', 'video', 'quote', 'link', 'audio', 'gallery', 'status'));
add_theme_support('custom-background');
add_theme_support('custom-header');


/*
=============================================================
  WP_Customize Fields
=============================================================
*/
function cc_customize_register($wp_customize) {
	/* Site Logo */
	$wp_customize->add_section("site_logo", array(
	    "title" => __("Site Logo", "architecture"),
	    "priority" => 30,
	));

  	/* Header Logo */
    $wp_customize->add_setting("logo_url", array(
        "default" => "",
    ));

	$wp_customize->add_setting("logo-text", array(
        "default" => "",
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize, "logo-text", array(
        'label' => __('Logo Title', 'architecture'),
        'section' => 'site_logo',
        'settings' => 'logo-text'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize, "logo_url", array(
        'label' => __('Upload a logo', 'architecture'),
        'section' => 'site_logo',
        'settings' => 'logo_url'
        )
    ));
    /* Header Logo Ends */


    /* Footer text */
    $wp_customize->add_section("footer_text", array(
        "title" => __("Footer text", "architecture"),
        "priority" => 30,
    ));

    $wp_customize->add_setting("footer_link_left", array(
        "default" => "",
    ));
    $wp_customize->add_setting("footer_link", array(
        "default" => "",
    ));
    $wp_customize->add_setting("footer_link_bottom", array(
        "default" => "",
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize, "footer_text_left", array(
        'type' => 'textarea',
        'label' => __('Footer text left', 'architecture'),
        'section' => 'footer_text',
        'settings' => 'footer_link_left'
        )
    ));
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize, "footer_text_top", array(
        'label' => __('Footer text top', 'architecture'),
        'section' => 'footer_text',
        'settings' => 'footer_link'
        )
    ));
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize, "footer_text_bottom", array(
        'label' => __('Footer text bottom', 'architecture'),
        'section' => 'footer_text',
        'settings' => 'footer_link_bottom'
        )
    ));


    /* Social media */
    $wp_customize->add_section("social_links", array(
      "title" => __("Social icon links", "architecture"),
      "priority" => 30,
    ));

    $wp_customize->add_setting("facebook_link", array(
        "default" => "",
    ));
    $wp_customize->add_setting("twitter_link", array(
        "default" => "",
    ));
    $wp_customize->add_setting("linkedin_link", array(
        "default" => "",
    ));
    $wp_customize->add_setting("insta_link", array(
        "default" => "",
    ));


    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize, "facebook_link", array(
        'label' => __('Facebook link', 'architecture'),
        'section' => 'social_links',
        'settings' => 'facebook_link'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize, "twitter_link", array(
        'label' => __('Twitter link', 'architecture'),
        'section' => 'social_links',
        'settings' => 'twitter_link'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize, "linkedin_link", array(
        'label' => __('Linkedin link', 'architecture'),
        'section' => 'social_links',
        'settings' => 'linkedin_link'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize, "insta_link", array(
        'label' => __('Instagram link', 'architecture'),
        'section' => 'social_links',
        'settings' => 'insta_link'
        )
    ));

    /* Personal info field */
    $wp_customize->add_section("info_text", array(
        "title" => __("Personal info", "architecture"),
        "priority" => 30,
    ));

    $wp_customize->add_setting("info_email", array(
        "default" => "",
    ));

    $wp_customize->add_setting("info_phone", array(
        "default" => "",
    ));

    $wp_customize->add_setting("info_location", array(
        "default" => "",
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize, "info_email", array(
        'label' => __('Email', 'architecture'),
        'section' => 'info_text',
        'settings' => 'info_email'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize, "info_phone", array(
        'label' => __('Phone', 'architecture'),
        'section' => 'info_text',
        'settings' => 'info_phone'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize, "info_location", array(
        'label' => __('Location', 'architecture'),
        'section' => 'info_text',
        'settings' => 'info_location'
        )
    ));
}
add_action("customize_register", "cc_customize_register");


/*
=============================================================
  Custom post type for Latest Project section
=============================================================
*/
function post_type_banner() {
    register_post_type( 'LatestProjects',
    // CPT Options
        array(
            'labels' => array(
              'name' => __( 'Latest Projects' ),
              'singular_name' => __( 'Latest Project' )),
            'public' => true,
            'has_archive' => true,
            'show_ui' => true,
            'rewrite' => array('slug' => 'latestprojects'),
            'menu_icon' => 'dashicons-exerpt-view',
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
                'excerpt',
                'custom-fields',
                'page-attributes')
            )
    );

    register_post_type( 'Services',
    // CPT Options
        array(
            'labels' => array(
              'name' => __( 'Services' ),
              'singular_name' => __( 'Service' )),
            'public' => true,
            'has_archive' => false,
            'show_ui' => true,
            'rewrite' => array('slug' => 'services'),
            'menu_icon' => 'dashicons-list-view',
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
                'excerpt',
                'custom-fields',
                'page-attributes')
            )
    );

}
add_action( 'init', 'post_type_banner' );


/*
  ===================================
  Excerpt Limit
  ===================================
*/
function custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

/*
  ===================================
  Excerpt Custom
  ===================================
*/
function wpdocs_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );



/*
  ===================================
  Sidebar function
  ===================================
*/
function awesome_widget_setup1(){
    register_sidebar(
        array(
            'name'=>'Footer-Content-Left',
            'id' => 'footer_left',
            'class'=> 'custom',
            'description' => 'Standard Sidebar',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h1 class="widget-title">',
            'after_title' => '</h1>',
        )
    );
}
add_action('widgets_init','awesome_widget_setup1');


function filter_recent_get_posts($query) {
    if (isset($_POST['tab']) && ($_POST['tab'] == 'recent')) {
        $query->set('post_type', 'news');
    }
}
add_action( 'pre_get_posts', 'filter_recent_get_posts' );
