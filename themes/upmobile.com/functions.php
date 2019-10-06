<?php
require_once 'lib/helpers.php';

define( 'TEXT_DOMAIN' , 'upmobile');
// Set up
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support( 'post-formats', array('aside', 'link', 'image', 'quote', 'video', 'audio') );