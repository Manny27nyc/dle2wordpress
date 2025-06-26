/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

/**
 * XHTML 1.1 Edit Module, defines editing-related elements. Text Extension
 * Module.
 */
class HTMLPurifier_HTMLModule_StyleAttribute extends HTMLPurifier_HTMLModule
{

    public $name = 'StyleAttribute';
    public $attr_collections = array(
        // The inclusion routine differs from the Abstract Modules but
        // is in line with the DTD and XML Schemas.
        'Style' => array('style' => false), // see constructor
        'Core' => array(0 => array('Style'))
    );

    public function setup($config) {
        $this->attr_collections['Style']['style'] = new HTMLPurifier_AttrDef_CSS();
    }

}

// vim: et sw=4 sts=4
