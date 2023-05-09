<?php
    function shopit_theme_styles() {
        wp_register_style('bootstrapcss', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css', [], '5.2.3', 'all');

        wp_enqueue_style('bootstrapcss');

        wp_register_script('jsbootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js', [], '5.2.3', false);
        wp_enqueue_script ('jsbootstrap');

        wp_enqueue_style('customcss',  get_template_directory_uri().'/custom/custom.css', [], '1.0.0', 'all');
 
    }

    add_action('wp_enqueue_scripts', 'shopit_theme_styles');

// ADDING MENUS - HEADER AND FOOTER

    function shopit_theme_setup(){
        add_theme_support('menus');
        register_nav_menu('primary', 'Primary Header');
        register_nav_menu('secondary', 'Footer Navigation');
    }
    add_action('init', 'shopit_theme_setup');
/**
 * THEME SUPPORT
 */

 add_theme_support('post-thumbnails');



// ADDING NAVWALKER CLASS
    if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
        return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
    } else {
        require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
    }


    // CUSTOM POST TYPE

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

add_action('init', 'product_post_type');

// // CUSTOM TAXONOMY
// function Nutrient_custom_taxonomy(){
//     $labels = [
//         'name'=> 'Nutrients',
//         'singular_name'=> 'Nutrient',
//         'search_items'=> 'Search Nutrient',
//         'all_items'=>'All Nutrient',
//         'parent_item'=> 'Parent Nutrient',
//         'parent_item_colon'=> 'Parent Nutrient',
//         'edit_item'=> 'Edit Nutrient',
//         'update_item'=> 'Update Nutrient',
//         'add_new_item'=> 'Add New Nutrient',
//         'new_item_name'=> 'New Nutrient Name',
//         'menu_name'=>'Nutrient'
//     ];

//     $args = [
//         'labels'=> $labels,
//         'hierarchical'=>true,
//         'show_ui'=>true,
//         'show_admin_column'=>true,
//         'query_var'=>true,
//         'rewrite'=>[
//             'slug'=>'nutrient'
//         ]
//         ];

    // register_taxonomy('nutrient', ['product'], $args);

    // NON-HIERARCHICAL TAXONOMY
    // register_taxonomy('Description', ['product'], [
    //     'hierarchical'=> false,
    //     'label'=> 'Description',
    //     'show_ui'=>true,
    //     'show_admin_column'=>true,
    //     'query_var'=>true,
    //     'rewrite'=>[
    //         'slug'=> 'Description'
    //     ]
    // ]);
// }

// add_action('init', 'Nutrient_custom_taxonomy');

// CUSTOM TERM FUNCTION

function customterm_get_terms($postID, $term){
    $termslist = wp_get_post_terms($postID, $term);

    $i = 0;

    $output = '';

    foreach ($termslist as $term){
        $i++;

        if ($i > 1){
            $output .= ', ';
        }

        // $output .= $term->name;
        // $output .= get_term_link($term);
        $output .= '<a href="'.get_term_link($term).'" >' .$term->name. '</a>';

    }

    return $output;
}
    
