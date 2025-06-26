/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

/**
 * Pre-transform that changes deprecated name attribute to ID if necessary
 */
class HTMLPurifier_AttrTransform_Name extends HTMLPurifier_AttrTransform
{

    public function transform($attr, $config, $context) {
        // Abort early if we're using relaxed definition of name
        if ($config->get('HTML.Attr.Name.UseCDATA')) return $attr;
        if (!isset($attr['name'])) return $attr;
        $id = $this->confiscateAttr($attr, 'name');
        if ( isset($attr['id']))   return $attr;
        $attr['id'] = $id;
        return $attr;
    }

}

// vim: et sw=4 sts=4
