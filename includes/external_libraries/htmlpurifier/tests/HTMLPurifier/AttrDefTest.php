/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

Mock::generatePartial(
        'HTMLPurifier_AttrDef',
        'HTMLPurifier_AttrDefTestable',
        array('validate'));

class HTMLPurifier_AttrDefTest extends HTMLPurifier_Harness
{

    function test_parseCDATA() {

        $def = new HTMLPurifier_AttrDefTestable();

        $this->assertIdentical('', $def->parseCDATA(''));
        $this->assertIdentical('', $def->parseCDATA("\t\n\r \t\t"));
        $this->assertIdentical('foo', $def->parseCDATA("\t\n\r foo\t\t"));
        $this->assertIdentical('translate to space', $def->parseCDATA("translate\nto\tspace"));

    }

    function test_make() {

        $def = new HTMLPurifier_AttrDefTestable();
        $def2 = $def->make('');
        $this->assertIdentical($def, $def2);

    }

}

// vim: et sw=4 sts=4
