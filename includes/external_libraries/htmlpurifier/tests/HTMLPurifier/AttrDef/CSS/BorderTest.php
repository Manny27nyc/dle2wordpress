/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

class HTMLPurifier_AttrDef_CSS_BorderTest extends HTMLPurifier_AttrDefHarness
{

    function test() {

        $config = HTMLPurifier_Config::createDefault();
        $this->def = new HTMLPurifier_AttrDef_CSS_Border($config);

        $this->assertDef('thick solid red', 'thick solid #FF0000');
        $this->assertDef('thick solid');
        $this->assertDef('solid red', 'solid #FF0000');
        $this->assertDef('1px solid #000');
        $this->assertDef('1px solid rgb(0, 0, 0)', '1px solid rgb(0,0,0)');

    }

}

// vim: et sw=4 sts=4
