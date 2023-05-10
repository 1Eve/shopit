<?php
/**
 * @package ShopitPlugin
 */

namespace Inc;
use Shopit;
class Products{
    static function products(){
        $shopit3Instance = new Shopit();

        $shopit3Instance->registerPage();
    }
}
