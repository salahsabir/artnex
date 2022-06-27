<?php


//tag name change
function artnex_theme_support(){
    add_theme_support('title-tag');
}

add_action('after_setup_theme','artnex_theme_support');



//create menus
function artnex_menus(){
    $locations = array(
        'primary' => "Desktop primary left sidebar",
        'footer' => "footer menu items"
    );
    register_nav_menus( $locations );
}

add_action('init','artnex_menus');



//load styles and scripts
function artnex_scripts(){

    $version = wp_get_theme()->get('Version');
    //styles
    wp_enqueue_style('artnex_accordion_style', get_template_directory_uri() . "/assets/css/accordion.css", array(), '1.0.1', 'all');
    wp_enqueue_style('artnex_mixicon_style', "https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css", array(), '2.5.0', 'all');
    wp_enqueue_style('artnex_fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css", array(), '6.1.1', 'all');
    wp_enqueue_style('artnex_main_style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
    wp_enqueue_style('artnex_style', get_template_directory_uri() . "/assets/css/style.css", array(), $version, 'all');

    
    //scripts
    wp_enqueue_script('artnex_script', get_template_directory_uri() . "/assets/js/main.js", array(), $version, 'all',true);
    wp_enqueue_script('artnex_accordion_script', get_template_directory_uri() . "/assets/js/accordion.js", array(), "1.16.0", 'all',true);

}

add_action('wp_enqueue_scripts','artnex_scripts');
?>