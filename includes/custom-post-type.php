<?php

function theBlog_custom_post(){
    $servicesPost_label = array (
        'name'                  => __('services Post', 'textdomain'),
        'singular_name'         => __('services Post', 'textdomain'),
        'add_new'               => __('Add services Post', 'textdomain'),
        'add_new_item'          => __('Add New services', 'textdomain'),
        'edit_item'             => __('Edit services Post', 'textdomain'),
        'all_items'             => __('services Post', 'textdomain')
    );

    $servicesPost_args = array(
        'labels'            => $servicesPost_label,
        'public'            => true,
        'capability_type'   => 'post',
        'show_ui'           => true,
        'taxonomies'        => array ('post_tag', 'category'),
        'supports'          => array ('title', 'editor', 'thumbnail', 'excerpt')
    );

    register_post_type('servicesPost', $servicesPost_args);

    $latestPost_label = array (
        'name'                  => __('Latest Post', 'textdomain'),
        'singular_name'         => __('Latest Post', 'textdomain'),
        'add_new'               => __('Add Latest Post', 'textdomain'),
        'add_new_item'          => __('Add New Latest', 'textdomain'),
        'edit_item'             => __('Edit Latest Post', 'textdomain'),
        'all_items'             => __('Latest Post', 'textdomain')
    );

    $latestPost_args = array(
        'labels'            => $latestPost_label,
        'public'            => true,
        'capability_type'   => 'post',
        'show_ui'           => true,
        'taxonomies'        => array ('post_tag', 'category'),
        'supports'          => array ('title', 'editor', 'thumbnail', 'excerpt')
    );

    register_post_type('latestPost', $latestPost_args);

    $featurePost_label = array (
        'name'                  => __('feature Post', 'textdomain'),
        'singular_name'         => __('feature Post', 'textdomain'),
        'add_new'               => __('Add feature Post', 'textdomain'),
        'add_new_item'          => __('Add New feature', 'textdomain'),
        'edit_item'             => __('Edit feature Post', 'textdomain'),
        'all_items'             => __('feature Post', 'textdomain')
    );

    $featurePost_args = array(
        'labels'            => $featurePost_label,
        'public'            => true,
        'capability_type'   => 'post',
        'show_ui'           => true,
        'taxonomies'        => array ('post_tag', 'category'),
        'supports'          => array ('title', 'editor', 'thumbnail', 'excerpt')
    );

    register_post_type('featurePost', $featurePost_args);

}

add_action('init', 'theblog_custom_post');