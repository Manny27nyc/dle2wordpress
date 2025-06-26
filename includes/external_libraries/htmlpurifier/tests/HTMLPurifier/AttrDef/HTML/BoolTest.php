/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

class HTMLPurifier_AttrDef_HTML_BoolTest extends HTMLPurifier_AttrDefHarness
{

    function test() {
        $this->def = new HTMLPurifier_AttrDef_HTML_Bool('foo');
        $this->assertDef('foo');
        $this->assertDef('', false);
        $this->assertDef('bar', 'foo');
    }

    function test_make() {
        $factory = new HTMLPurifier_AttrDef_HTML_Bool();
        $def = $factory->make('foo');
        $def2 = new HTMLPurifier_AttrDef_HTML_Bool('foo');
        $this->assertIdentical($def, $def2);
    }

}

// vim: et sw=4 sts=4
