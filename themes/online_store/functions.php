<?php



//setup

//Includes
include (get_theme_file_path('/includes/front/enqueue.php'));

//Hooks
add_action ('wp_enqueue_scripts', 'cnb_enqueue');

//Shortcodes