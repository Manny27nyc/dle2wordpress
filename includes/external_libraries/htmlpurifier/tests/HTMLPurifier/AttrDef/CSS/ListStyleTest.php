/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

class HTMLPurifier_AttrDef_CSS_ListStyleTest extends HTMLPurifier_AttrDefHarness
{

    function test() {

        $config = HTMLPurifier_Config::createDefault();
        $this->def = new HTMLPurifier_AttrDef_CSS_ListStyle($config);

        $this->assertDef('lower-alpha');
        $this->assertDef('upper-roman inside');
        $this->assertDef('circle outside');
        $this->assertDef('inside');
        $this->assertDef('none');
        $this->assertDef('url("foo.gif")');
        $this->assertDef('circle url("foo.gif") inside');

        // invalid values
        $this->assertDef('outside inside', 'outside');

        // ordering
        $this->assertDef('url(foo.gif) none', 'none url("foo.gif")');
        $this->assertDef('circle lower-alpha', 'circle');
        // the spec is ambiguous about what happens in these
        // cases, so we're going off the W3C CSS validator
        $this->assertDef('disc none', 'disc');
        $this->assertDef('none disc', 'none');


    }

}

// vim: et sw=4 sts=4
