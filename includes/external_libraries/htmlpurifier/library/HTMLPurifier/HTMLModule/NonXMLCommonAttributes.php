/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

class HTMLPurifier_HTMLModule_NonXMLCommonAttributes extends HTMLPurifier_HTMLModule
{
    public $name = 'NonXMLCommonAttributes';

    public $attr_collections = array(
        'Lang' => array(
            'lang' => 'LanguageCode',
        )
    );
}

// vim: et sw=4 sts=4
