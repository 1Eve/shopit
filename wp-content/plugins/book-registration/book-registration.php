<?php 
/**
 * @package BookRegistration
 */

 /*
    Plugin Name: Book Registration
    Plugin URI: http://..............
    Description: This is a plugin to register and view books
    Version: 1.0.0
    Author: Cohort 13 Jitu
    Author URI: http://github.com/kithekadk
    Licence: GPLv2 or later
    Text Domain: book-registration
 */

//  Security Check
defined('ABSPATH') or die('Hey you hacker, got you!');

class productReg{
    function __construct(){
        $this->add_product_to_db();
        $this->createLibrarian();
    }

    function activateExternally(){
        require_once plugin_dir_path(__FILE__). 'inc/product-registration-activate.php';
        productRegActivate::activatePlugin();
    }

    function deactivateExternally(){
        require_once plugin_dir_path(__FILE__). 'inc/product-registration-deactivate.php';
        productRegDeactivate::deactivatePlugin();
    }

    static function create_table_to_db(){
        global $wpdb;

        $table_name = $wpdb->prefix.'products';

        $product_details = "CREATE TABLE IF NOT EXISTS ".$table_name."(
            id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
            main_img text NOT NULL,
            image2 text,
            image3 text,
            image4 text,
            image5 text,
            price text NOT NULL,
            discount text NOT NULL,
            product_name text NOT NULL,
            product_description text NOT NULL,
            product_category text NOT NULL
            
        );";

        require_once(ABSPATH.'wp-admin/includes/upgrade.php');
        dbDelta($product_details);
    }

    function add_product_to_db(){
        if(isset($_POST['submitbtn'])){
            $data =[
                'main_img'=> $_POST['main_img'],
                'image2'=> $_POST['image2'],
                'image3'=> $_POST['image3'],
                'image4'=> $_POST['image4'],
                'image5'=> $_POST['image5'],
                'price'=> $_POST['price'],
                'discount'=> $_POST['discount'],
                'product_name'=> $_POST['product_name'],
                'product_description'=> $_POST['product_description'],
                'product_category'=> $_POST['product_category'],
            ];

            global $wpdb;
            global $successmessage;
            global $errormessage;

            $successmessage = false;
            $errormessage = false;

            $table_name = $wpdb->prefix.'products';

            $result = $wpdb->insert($table_name, $data, $format=NULL);

            if($result == true){
                $successmessage = true;
                echo "<script> alert('product Registered successfully'); </script>";
            }else{
                $errormessage = true;
                echo "<script> alert('Unable to Register'); </script>";
            }
        }
    }

    function createLibrarian(){
        add_role(
            'librarian',
            'Librarian',
            [
                'read'=> true,
                'edit_posts'=>true,
                'edit_pages'=>true,
                'upload_files'=> true,
                'delete_posts'=>true,
                'edit_published_posts'=> true,
                'delete_published_pages'=>true,
                'delete_published_posts'=>true
            ]
        );
    }
}

if(class_exists('productReg')){
    $productRegInstance = new productReg();
}

//Activate Plugin
// register_activation_hook (__FILE__, [$productRegInstance, 'activateExternally']);
$productRegInstance->activateExternally();

//Deactivate Plugin
// register_deactivation_hook (__FILE__, [$productRegInstance, 'deactivateExternally']);
$productRegInstance->deactivateExternally();