/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

/**
 * Module defines proprietary tags and attributes in HTML.
 * @warning If this module is enabled, standards-compliance is off!
 */
class HTMLPurifier_HTMLModule_Proprietary extends HTMLPurifier_HTMLModule
{

    public $name = 'Proprietary';

    public function setup($config) {

        $this->addElement('marquee', 'Inline', 'Flow', 'Common',
            array(
                'direction' => 'Enum#left,right,up,down',
                'behavior' => 'Enum#alternate',
                'width' => 'Length',
                'height' => 'Length',
                'scrolldelay' => 'Number',
                'scrollamount' => 'Number',
                'loop' => 'Number',
                'bgcolor' => 'Color',
                'hspace' => 'Pixels',
                'vspace' => 'Pixels',
            )
        );

    }

}

// vim: et sw=4 sts=4
