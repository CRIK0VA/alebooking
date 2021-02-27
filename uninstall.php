<?php

if(!defined('WP_UNINSTALL_PLUGIN')){
    die;
}

//Delete post type from db

//global $wpdb;
//$wpdb->query("DELETE FROM {$wpdb->posts} WHERE post_type IN ('room');");

//remove meta

//remove tax/terms

//remove comments



$rooms = get_posts(array('post_type'=>'room','numberposts'=>-1));
foreach($rooms as $room){
    wp_delete_post($room->ID,true);
}