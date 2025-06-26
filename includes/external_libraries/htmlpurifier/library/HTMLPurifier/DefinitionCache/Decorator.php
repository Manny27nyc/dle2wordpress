/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

class HTMLPurifier_DefinitionCache_Decorator extends HTMLPurifier_DefinitionCache
{

    /**
     * Cache object we are decorating
     */
    public $cache;

    public function __construct() {}

    /**
     * Lazy decorator function
     * @param $cache Reference to cache object to decorate
     */
    public function decorate(&$cache) {
        $decorator = $this->copy();
        // reference is necessary for mocks in PHP 4
        $decorator->cache =& $cache;
        $decorator->type  = $cache->type;
        return $decorator;
    }

    /**
     * Cross-compatible clone substitute
     */
    public function copy() {
        return new HTMLPurifier_DefinitionCache_Decorator();
    }

    public function add($def, $config) {
        return $this->cache->add($def, $config);
    }

    public function set($def, $config) {
        return $this->cache->set($def, $config);
    }

    public function replace($def, $config) {
        return $this->cache->replace($def, $config);
    }

    public function get($config) {
        return $this->cache->get($config);
    }

    public function remove($config) {
        return $this->cache->remove($config);
    }

    public function flush($config) {
        return $this->cache->flush($config);
    }

    public function cleanup($config) {
        return $this->cache->cleanup($config);
    }

}

// vim: et sw=4 sts=4
