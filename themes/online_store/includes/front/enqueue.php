<?php

function cnb_enqueue(){

    $uri        =  get_theme_file_uri();

    wp_register_style('cnb_bootstrap_icons','https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css');
    //wp_register_style('cnb_bootstrap', $uri .'/assets/startbootstrap-shop/css/bootstrap.css');
    wp_register_style ('cnb_styles', $uri .'/assets/startbootstrap-shop/css/styles.css');

    wp_enqueue_style('cnb_bootstrap_icons');
    //wp_enqueue_style('cnb_bootstrap');
    wp_enqueue_style('cnb_styles');


    wp_register_script('cnb_core_theme',$uri .'/assets/startbootstrap-shop/js/scripts.js', [], false, true);
    wp_register_script('cnb_bootstrap_core_js','https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js');


    wp_enqueue_style('cnb_core_theme');
    wp_enqueue_style('cnb_bootstrap_core_js');


}