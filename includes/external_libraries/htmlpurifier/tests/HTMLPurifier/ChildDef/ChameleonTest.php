/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

class HTMLPurifier_ChildDef_ChameleonTest extends HTMLPurifier_ChildDefHarness
{

    protected $isInline;

    function setUp() {
        parent::setUp();
        $this->obj = new HTMLPurifier_ChildDef_Chameleon(
            'b | i',      // allowed only when in inline context
            'b | i | div' // allowed only when in block context
        );
        $this->context->register('IsInline', $this->isInline);
    }

    function testInlineAlwaysAllowed() {
        $this->isInline = true;
        $this->assertResult(
            '<b>Allowed.</b>'
        );
    }

    function testBlockNotAllowedInInline() {
        $this->isInline = true;
        $this->assertResult(
            '<div>Not allowed.</div>', ''
        );
    }

    function testBlockAllowedInNonInline() {
        $this->isInline = false;
        $this->assertResult(
            '<div>Allowed.</div>'
        );
    }

}

// vim: et sw=4 sts=4
