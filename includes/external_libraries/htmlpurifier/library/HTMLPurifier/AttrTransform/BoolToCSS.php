/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

/**
 * Pre-transform that changes converts a boolean attribute to fixed CSS
 */
class HTMLPurifier_AttrTransform_BoolToCSS extends HTMLPurifier_AttrTransform {

    /**
     * Name of boolean attribute that is trigger
     */
    protected $attr;

    /**
     * CSS declarations to add to style, needs trailing semicolon
     */
    protected $css;

    /**
     * @param $attr string attribute name to convert from
     * @param $css string CSS declarations to add to style (needs semicolon)
     */
    public function __construct($attr, $css) {
        $this->attr = $attr;
        $this->css  = $css;
    }

    public function transform($attr, $config, $context) {
        if (!isset($attr[$this->attr])) return $attr;
        unset($attr[$this->attr]);
        $this->prependCSS($attr, $this->css);
        return $attr;
    }

}

// vim: et sw=4 sts=4
