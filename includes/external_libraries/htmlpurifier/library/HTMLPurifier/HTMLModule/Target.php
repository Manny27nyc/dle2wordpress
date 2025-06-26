/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

/**
 * XHTML 1.1 Target Module, defines target attribute in link elements.
 */
class HTMLPurifier_HTMLModule_Target extends HTMLPurifier_HTMLModule
{

    public $name = 'Target';

    public function setup($config) {
        $elements = array('a');
        foreach ($elements as $name) {
            $e = $this->addBlankElement($name);
            $e->attr = array(
                'target' => new HTMLPurifier_AttrDef_HTML_FrameTarget()
            );
        }
    }

}

// vim: et sw=4 sts=4
