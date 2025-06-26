/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

class HTMLPurifier_ChildDef_OptionalTest extends HTMLPurifier_ChildDefHarness
{

    function setUp() {
        parent::setUp();
        $this->obj = new HTMLPurifier_ChildDef_Optional('b | i');
    }

    function testBasicUsage() {
        $this->assertResult('<b>Bold text</b><img />', '<b>Bold text</b>');
    }

    function testRemoveForbiddenText() {
        $this->assertResult('Not allowed text', '');
    }

    function testEmpty() {
        $this->assertResult('');
    }

    function testWhitespace() {
        $this->assertResult(' ');
    }

    function testMultipleWhitespace() {
        $this->assertResult('    ');
    }

}

// vim: et sw=4 sts=4
