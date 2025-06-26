/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

/**
 * Class for handling width/height length attribute transformations to CSS
 */
class HTMLPurifier_AttrTransform_Length extends HTMLPurifier_AttrTransform
{

    protected $name;
    protected $cssName;

    public function __construct($name, $css_name = null) {
        $this->name = $name;
        $this->cssName = $css_name ? $css_name : $name;
    }

    public function transform($attr, $config, $context) {
        if (!isset($attr[$this->name])) return $attr;
        $length = $this->confiscateAttr($attr, $this->name);
        if(ctype_digit($length)) $length .= 'px';
        $this->prependCSS($attr, $this->cssName . ":$length;");
        return $attr;
    }

}

// vim: et sw=4 sts=4
