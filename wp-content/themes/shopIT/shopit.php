<?php
/*
*   @package shopitPlugin

*/
/*

Plugin Name: shopit Plugin
Plugin URL; https://......
Description: This plugin is built by Shopit
Version:1.0.0
Author:Group 1
Author URL: http://...
license:GPUv2 or later
Text Domain:Shopit
*/

//security check
defined('ABSPATH') or die('Security breach identified');

class RegisterMembers
{
    function __construct()
    {
        add_action('init', [$this, 'product_post_type']);
    }

    public function activate()
    {
        require_once plugin_dir_path(__FILE__) . 'inc/shopit-activate.php';
        ShopitActivate::activate();
    }
    public function deactivate()
    {
        require_once plugin_dir_path(__FILE__) . 'inc/shopit-deactivate.php';
        shopitDeactivate::deactivate();
    }
    function product_post_type(){
        $labels = [
            'name'=> 'Products',
            'singular_name'=> 'Product',
            'add_new'=> 'Add Product Item',
            'all_items'=> 'All Products',
            'add_new_item'=> 'Edit Item',
            'new_item'=> 'New Items',
            'view_item'=> 'View Item',
            'search_item'=> 'Search Product',
            'not_found'=> 'No Items found',
            'not_found_in_trash'=> 'No Items found in trash',
            'parent_item_colon'=> 'Parent Item'
        ];
    
        $args = [
            'labels'=> $labels,
            'public'=> true,
            'has_archive'=> true,
            'publicly_queryable'=> true,
            'query_var'=> true,
            'rewrite'=>true,
            'capability'=> 'post',
            'hierarchical' => false,
            'supports'=>[
                'title',
                'editor',
                'excerpt',
                'thumbnail',
                'revisions',
    
            ],
            'taxonomies'=>[
                'category',
                'post_tag',
                'menu_position'=> 5,
                'exclude_from_search'=> false
            ]
        ];
    
        register_post_type('product', $args);
    }
    

}


function registerPage (){
    add_action('admin_menu',[$this, 'add_admin_page']);
}
function add_admin_page(){
    add_menu_page('Book Registration','Register Book', 'manage_options', 'register_book' , [$this, 'admin_index_cb'], 'dashicons-welcome-write-blog',110);
}
function admin_index_cb (){
    require_once plugin_dir_path(__FILE__). 'templates/bookregister.php';
}

if (class_exists('RegisterMembers')) {
    $RegisterMemberInstance = new RegisterMembers();
}

$RegisterMemberInstance->activate();
$RegisterMemberInstance->deactivate();


