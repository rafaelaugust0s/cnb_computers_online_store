<?php



//setup

//Includes
include (get_theme_file_path('/includes/front/enqueue.php'));
include (get_theme_file_path('/includes/setup.php'));

//Hooks
add_action('wp_enqueue_scripts', 'cnb_enqueue');
add_action('after_setup_theme', 'cnb_setup_theme');

//Shortcodes