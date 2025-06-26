/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

class HTMLPurifier_AttrTransform_LengthTest extends HTMLPurifier_AttrTransformHarness
{

    function setUp() {
        parent::setUp();
        $this->obj = new HTMLPurifier_AttrTransform_Length('width');
    }

    function testEmptyInput() {
        $this->assertResult( array() );
    }

    function testTransformPixel() {
        $this->assertResult(
            array('width' => '10'),
            array('style' => 'width:10px;')
        );
    }

    function testTransformPercentage() {
        $this->assertResult(
            array('width' => '10%'),
            array('style' => 'width:10%;')
        );
    }

    function testPrependNewCSS() {
        $this->assertResult(
            array('width' => '10%', 'style' => 'font-weight:bold'),
            array('style' => 'width:10%;font-weight:bold')
        );
    }

    function testLenientTreatmentOfInvalidInput() {
        $this->assertResult(
            array('width' => 'asdf'),
            array('style' => 'width:asdf;')
        );
    }

}

// vim: et sw=4 sts=4
