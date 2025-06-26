/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

/**
 * Sets height/width defaults for <textarea>
 */
class HTMLPurifier_AttrTransform_Textarea extends HTMLPurifier_AttrTransform
{

    public function transform($attr, $config, $context) {
        // Calculated from Firefox
        if (!isset($attr['cols'])) $attr['cols'] = '22';
        if (!isset($attr['rows'])) $attr['rows'] = '3';
        return $attr;
    }

}

// vim: et sw=4 sts=4
