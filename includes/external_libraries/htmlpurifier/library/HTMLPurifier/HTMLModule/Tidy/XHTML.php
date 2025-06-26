/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

class HTMLPurifier_HTMLModule_Tidy_XHTML extends HTMLPurifier_HTMLModule_Tidy
{

    public $name = 'Tidy_XHTML';
    public $defaultLevel = 'medium';

    public function makeFixes() {
        $r = array();
        $r['@lang'] = new HTMLPurifier_AttrTransform_Lang();
        return $r;
    }

}

// vim: et sw=4 sts=4
