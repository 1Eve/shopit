<?php

/**
 * @package ShopITPlugin
 */

/**
 * Plug Name: plugshopIT
 * Plug URI: http://#
 * Description: Handles all the custom functions for our system
 * Version: 1.0.0
 * Author: Team 1 - C13
 * Author URI: http://..
 * Licence: GPLv2 or later
 * Text Domain: plug-shopIT
 */

// Security CHeck
defined('ABSPATH') or die ('We got you Mr Hacker');


function createCustomer(){
    add_role(
        'customer',
        'Customer',
        [
            'read' => true,
            'edit_posts' => true,
        ]
    );
}