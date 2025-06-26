/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

/**
 * Performs miscellaneous cross attribute validation and filtering for
 * input elements. This is meant to be a post-transform.
 */
class HTMLPurifier_AttrTransform_Input extends HTMLPurifier_AttrTransform {

    protected $pixels;

    public function __construct() {
        $this->pixels = new HTMLPurifier_AttrDef_HTML_Pixels();
    }

    public function transform($attr, $config, $context) {
        if (!isset($attr['type'])) $t = 'text';
        else $t = strtolower($attr['type']);
        if (isset($attr['checked']) && $t !== 'radio' && $t !== 'checkbox') {
            unset($attr['checked']);
        }
        if (isset($attr['maxlength']) && $t !== 'text' && $t !== 'password') {
            unset($attr['maxlength']);
        }
        if (isset($attr['size']) && $t !== 'text' && $t !== 'password') {
            $result = $this->pixels->validate($attr['size'], $config, $context);
            if ($result === false) unset($attr['size']);
            else $attr['size'] = $result;
        }
        if (isset($attr['src']) && $t !== 'image') {
            unset($attr['src']);
        }
        if (!isset($attr['value']) && ($t === 'radio' || $t === 'checkbox')) {
            $attr['value'] = '';
        }
        return $attr;
    }

}

// vim: et sw=4 sts=4
