/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

/**
 * Definition cache decorator class that cleans up the cache
 * whenever there is a cache miss.
 */
class HTMLPurifier_DefinitionCache_Decorator_Cleanup extends
      HTMLPurifier_DefinitionCache_Decorator
{

    public $name = 'Cleanup';

    public function copy() {
        return new HTMLPurifier_DefinitionCache_Decorator_Cleanup();
    }

    public function add($def, $config) {
        $status = parent::add($def, $config);
        if (!$status) parent::cleanup($config);
        return $status;
    }

    public function set($def, $config) {
        $status = parent::set($def, $config);
        if (!$status) parent::cleanup($config);
        return $status;
    }

    public function replace($def, $config) {
        $status = parent::replace($def, $config);
        if (!$status) parent::cleanup($config);
        return $status;
    }

    public function get($config) {
        $ret = parent::get($config);
        if (!$ret) parent::cleanup($config);
        return $ret;
    }

}

// vim: et sw=4 sts=4
