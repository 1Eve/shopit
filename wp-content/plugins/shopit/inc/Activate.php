<?php
/**
 * @package ShopitPlugin
 */

 namespace Inc;
 class Activate{
    static function activate(){
        Products::products();
        flush_rewrite_rules();
    }
 }
 