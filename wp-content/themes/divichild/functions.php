<?php

add_action('wp_enqueue_scripts','my_theme_enqueue_styles');

function my_theme_enqueue_styles() {
    wp_enqueue_style('rootcss', get_template_directory_uri().'/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri().'/style.css');
    


    
}




?>

<!--wp_enqueue_style('slick-css',get_stylesheet_directory_uri().'/assets/plugins/slick/slick/slick.css');
    wp_enqueue_style('slick-theme',get_stylesheet_directory_uri().'/assets/plugins/slick/slick/slick-theme.css');
    wp_enqueue_style('jquery-css',get_stylesheet_directory_uri().'/assets/plugins/jquery-ui/jquery-ui.min.css');
    wp_enqueue_style('jquery-theme',get_stylesheet_directory_uri().'/assets/plugins/jquery-ui/jquery-ui.theme.min.css');
    wp_enqueue_style('flati',get_stylesheet_directory_uri().'/assets/plugins/flati/flati/css/flati.min.css');
    wp_enqueue_style('lightbox',get_stylesheet_directory_uri().'/assets/plugins/lightbox2-dev/dist/css/lightbox.min.css');
    wp_enqueue_style('sweet-alert',"https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.css");
    wp_enqueue_style('load-font-awesome','https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('jquery-js', get_stylesheet_directory_uri().'/assets/js/jquery-3.4.1.min.js');
    wp_enqueue_style('jquery-min-js', get_stylesheet_directory_uri().'/assets/plugins/jquery-ui/jquery-ui.min.js');
    wp_enqueue_style('j-query-migrate', get_stylesheet_directory_uri().'/assets/plugins/jquery-migrate-1.2.1.min.js');
    wp_enqueue_style('slick-min-js', get_stylesheet_directory_uri().'/assets/plugins/slick/slick/slick.min.js');
    wp_enqueue_style('flati-min-js', get_stylesheet_directory_uri().'/assets/plugins/flati/flati/js/flati.min.js');
    wp_enqueue_style('jqueryvalidate-min-js', get_stylesheet_directory_uri().'/assets/plugins/jQuery-validate/dist/jquery.validate.min.js');
    wp_enqueue_style('sweetalert-min-js','https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.js');
    wp_enqueue_style('lightbox-min-js', get_stylesheet_directory_uri().'/assets/plugins/lightbox2-dev/dist/js/lightbox.min.js');
    wp_enqueue_style('isotope-min-js', get_stylesheet_directory_uri().'/assets/plugins/isotope.pkgd.min.js');
    wp_enqueue_style('script-js', get_stylesheet_directory_uri().'/assets/js/script.js');
    -->