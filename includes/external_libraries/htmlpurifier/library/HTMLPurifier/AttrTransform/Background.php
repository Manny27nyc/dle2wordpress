/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

/**
 * Pre-transform that changes proprietary background attribute to CSS.
 */
class HTMLPurifier_AttrTransform_Background extends HTMLPurifier_AttrTransform {

    public function transform($attr, $config, $context) {

        if (!isset($attr['background'])) return $attr;

        $background = $this->confiscateAttr($attr, 'background');
        // some validation should happen here

        $this->prependCSS($attr, "background-image:url($background);");

        return $attr;

    }

}

// vim: et sw=4 sts=4
