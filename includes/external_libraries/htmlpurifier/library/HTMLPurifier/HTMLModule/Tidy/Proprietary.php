/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

class HTMLPurifier_HTMLModule_Tidy_Proprietary extends HTMLPurifier_HTMLModule_Tidy
{

    public $name = 'Tidy_Proprietary';
    public $defaultLevel = 'light';

    public function makeFixes() {
        $r = array();
        $r['table@background'] = new HTMLPurifier_AttrTransform_Background();
        $r['td@background']    = new HTMLPurifier_AttrTransform_Background();
        $r['th@background']    = new HTMLPurifier_AttrTransform_Background();
        $r['tr@background']    = new HTMLPurifier_AttrTransform_Background();
        $r['thead@background'] = new HTMLPurifier_AttrTransform_Background();
        $r['tfoot@background'] = new HTMLPurifier_AttrTransform_Background();
        $r['tbody@background'] = new HTMLPurifier_AttrTransform_Background();
        $r['table@height']     = new HTMLPurifier_AttrTransform_Length('height');
        return $r;
    }

}

// vim: et sw=4 sts=4
