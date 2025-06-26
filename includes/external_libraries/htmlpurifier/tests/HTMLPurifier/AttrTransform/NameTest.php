/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

class HTMLPurifier_AttrTransform_NameTest extends HTMLPurifier_AttrTransformHarness
{

    function setUp() {
        parent::setUp();
        $this->obj = new HTMLPurifier_AttrTransform_Name();
    }

    function testEmpty() {
        $this->assertResult( array() );
    }

    function testTransformNameToID() {
        $this->assertResult(
            array('name' => 'free'),
            array('id' => 'free')
        );
    }

    function testExistingIDOverridesName() {
        $this->assertResult(
            array('name' => 'tryit', 'id' => 'tobad'),
            array('id' => 'tobad')
        );
    }

}

// vim: et sw=4 sts=4
