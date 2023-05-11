<?php
/**
 * @package BookRegistration
 */

class productRegActivate{
    static function activatePlugin(){
        // echo 'Invoked';
        productReg::create_table_to_db();
        flush_rewrite_rules();
    }
}