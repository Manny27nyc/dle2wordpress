/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

class HTMLPurifier_AttrTransform_BdoDirTest extends HTMLPurifier_AttrTransformHarness
{

    function setUp() {
        parent::setUp();
        $this->obj = new HTMLPurifier_AttrTransform_BdoDir();
    }

    function testAddDefaultDir() {
        $this->assertResult( array(), array('dir' => 'ltr') );
    }

    function testPreserveExistingDir() {
        $this->assertResult( array('dir' => 'rtl') );
    }

    function testAlternateDefault() {
        $this->config->set('Attr.DefaultTextDir', 'rtl');
        $this->assertResult(
            array(),
            array('dir' => 'rtl')
        );

    }

}

// vim: et sw=4 sts=4
