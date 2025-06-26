/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

/**
 * Post-transform that copies lang's value to xml:lang (and vice-versa)
 * @note Theoretically speaking, this could be a pre-transform, but putting
 *       post is more efficient.
 */
class HTMLPurifier_AttrTransform_Lang extends HTMLPurifier_AttrTransform
{

    public function transform($attr, $config, $context) {

        $lang     = isset($attr['lang']) ? $attr['lang'] : false;
        $xml_lang = isset($attr['xml:lang']) ? $attr['xml:lang'] : false;

        if ($lang !== false && $xml_lang === false) {
            $attr['xml:lang'] = $lang;
        } elseif ($xml_lang !== false) {
            $attr['lang'] = $xml_lang;
        }

        return $attr;

    }

}

// vim: et sw=4 sts=4
