<?php   

/*
* Page Name: 		functions.php
* Version:			1.0.0
*/
// Functions //

/* -------------- theme support -------------- */
add_theme_support('automatic-feed-links');
add_theme_support('title-tag');
load_theme_textdomain('mp', get_template_directory() . '/languages');
add_theme_support('post-formats', array('aside', 'gallery', 'quote', 'image', 'video'));

/* --------------Post Thumbnails Add-------------- */

add_theme_support('post-thumbnails');
set_post_thumbnail_size(600, 337, true);
add_image_size('single-thumbnail', 600, 337, true);


// include ajax file 
require_once(__DIR__ . '/inc/ajax-actions.php'); // done  



