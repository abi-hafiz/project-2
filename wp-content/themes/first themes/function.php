<?php

// load function
function load_file(){
    wp_unqueue_style('style', get_stylesheet_uri());
}

add_action('wp_unqueue_scripts', 'load_file');

?>