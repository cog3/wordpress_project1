<?php
/**
 * Plugin Name: first plugin
 * Plugin URI: localhost:8080
 * Description: This is the very first plugin I ever created.
 * Version: 1.0
 * Author: Emad Tirmizi
 * Author URI: localhost:8080
 **/

function dh_modify_read_more_link() {

    return '<a class="more-link" href="' . get_permalink() . '">Click to Read!</a>';

}

add_filter( 'the_content_more_link', 'dh_modify_read_more_link' );