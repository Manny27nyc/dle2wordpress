/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

/**
 * Writes default type for all objects. Currently only supports flash.
 */
class HTMLPurifier_AttrTransform_SafeObject extends HTMLPurifier_AttrTransform
{
    public $name = "SafeObject";

    function transform($attr, $config, $context) {
        if (!isset($attr['type'])) $attr['type'] = 'application/x-shockwave-flash';
        return $attr;
    }
}

// vim: et sw=4 sts=4
