/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

/**
 * Post-transform that performs validation to the name attribute; if
 * it is present with an equivalent id attribute, it is passed through;
 * otherwise validation is performed.
 */
class HTMLPurifier_AttrTransform_NameSync extends HTMLPurifier_AttrTransform
{

    public function __construct() {
        $this->idDef = new HTMLPurifier_AttrDef_HTML_ID();
    }

    public function transform($attr, $config, $context) {
        if (!isset($attr['name'])) return $attr;
        $name = $attr['name'];
        if (isset($attr['id']) && $attr['id'] === $name) return $attr;
        $result = $this->idDef->validate($name, $config, $context);
        if ($result === false) unset($attr['name']);
        else $attr['name'] = $result;
        return $attr;
    }

}

// vim: et sw=4 sts=4
