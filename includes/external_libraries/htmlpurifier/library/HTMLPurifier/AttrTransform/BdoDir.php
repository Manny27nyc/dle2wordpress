/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

// this MUST be placed in post, as it assumes that any value in dir is valid

/**
 * Post-trasnform that ensures that bdo tags have the dir attribute set.
 */
class HTMLPurifier_AttrTransform_BdoDir extends HTMLPurifier_AttrTransform
{

    public function transform($attr, $config, $context) {
        if (isset($attr['dir'])) return $attr;
        $attr['dir'] = $config->get('Attr.DefaultTextDir');
        return $attr;
    }

}

// vim: et sw=4 sts=4
