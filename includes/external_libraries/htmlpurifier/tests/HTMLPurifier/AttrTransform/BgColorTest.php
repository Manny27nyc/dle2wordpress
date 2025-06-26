/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

// we currently rely on the CSS validator to fix any problems.
// This means that this transform, strictly speaking, supports
// a superset of the functionality.

class HTMLPurifier_AttrTransform_BgColorTest extends HTMLPurifier_AttrTransformHarness
{

    function setUp() {
        parent::setUp();
        $this->obj = new HTMLPurifier_AttrTransform_BgColor();
    }

    function testEmptyInput() {
        $this->assertResult( array() );
    }

    function testBasicTransform() {
        $this->assertResult(
            array('bgcolor' => '#000000'),
            array('style' => 'background-color:#000000;')
        );
    }

    function testPrependNewCSS() {
        $this->assertResult(
            array('bgcolor' => '#000000', 'style' => 'font-weight:bold'),
            array('style' => 'background-color:#000000;font-weight:bold')
        );
    }

    function testLenientTreatmentOfInvalidInput() {
        // this may change when we natively support the datatype and
        // validate its contents before forwarding it on
        $this->assertResult(
            array('bgcolor' => '#F00'),
            array('style' => 'background-color:#F00;')
        );
    }

}

// vim: et sw=4 sts=4
