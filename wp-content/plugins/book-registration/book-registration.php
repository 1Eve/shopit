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

class BookReg{
    function __construct(){
        $this->add_book_to_db();
        $this->createLibrarian();
    }

    function activateExternally(){
        require_once plugin_dir_path(__FILE__). 'inc/book-registration-activate.php';
        BookRegActivate::activatePlugin();
    }

    function deactivateExternally(){
        require_once plugin_dir_path(__FILE__). 'inc/book-registration-deactivate.php';
        BookRegDeactivate::deactivatePlugin();
    }

    static function create_table_to_db(){
        global $wpdb;

        $table_name = $wpdb->prefix.'books';

        $book_details = "CREATE TABLE IF NOT EXISTS ".$table_name."(
            main_img text NOT NULL,
            image2 text NOT NULL,
            image3 text NOT NULL,
            image4 text NOT NULL,
            image5 text NOT NULL,
            price text NOT NULL,
            discount text NOT NULL,
            product_name text NOT NULL
        );";

        require_once(ABSPATH.'wp-admin/includes/upgrade.php');
        dbDelta($book_details);
    }

    function add_book_to_db(){
        if(isset($_POST['submitbtn'])){
            $data =[
                'main_img'=> $_POST['main_img'],
                'image2'=> $_POST['image2'],
                'image3'=> $_POST['image3'],
                'image4'=> $_POST['image4'],
                'image5'=> $_POST['image5'],
                'price'=> $_POST['price'],
                'discount'=> $_POST['discount'],
                'product_name'=> $_POST['product_name']
            ];

            global $wpdb;
            global $successmessage;
            global $errormessage;

            $successmessage = false;
            $errormessage = false;

            $table_name = $wpdb->prefix.'books';

            $result = $wpdb->insert($table_name, $data, $format=NULL);

            if($result == true){
                $successmessage = true;
                echo "<script> alert('Book Registered successfully'); </script>";
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

if(class_exists('BookReg')){
    $bookRegInstance = new BookReg();
}

//Activate Plugin
// register_activation_hook (__FILE__, [$bookRegInstance, 'activateExternally']);
$bookRegInstance->activateExternally();

//Deactivate Plugin
// register_deactivation_hook (__FILE__, [$bookRegInstance, 'deactivateExternally']);
$bookRegInstance->deactivateExternally();