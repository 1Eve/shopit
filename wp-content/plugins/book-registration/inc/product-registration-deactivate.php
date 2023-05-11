<?php
/**
 * @package BookRegistration
 */

class productRegDeactivate{
    static function deactivatePlugin(){
        flush_rewrite_rules();
    }
}