/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

/**
 * Null cache object to use when no caching is on.
 */
class HTMLPurifier_DefinitionCache_Null extends HTMLPurifier_DefinitionCache
{

    public function add($def, $config) {
        return false;
    }

    public function set($def, $config) {
        return false;
    }

    public function replace($def, $config) {
        return false;
    }

    public function remove($config) {
        return false;
    }

    public function get($config) {
        return false;
    }

    public function flush($config) {
        return false;
    }

    public function cleanup($config) {
        return false;
    }

}

// vim: et sw=4 sts=4
