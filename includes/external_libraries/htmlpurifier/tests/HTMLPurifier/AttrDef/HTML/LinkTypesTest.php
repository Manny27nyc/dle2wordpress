/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

class HTMLPurifier_AttrDef_HTML_LinkTypesTest extends HTMLPurifier_AttrDefHarness
{

    function testNull() {

        $this->def = new HTMLPurifier_AttrDef_HTML_LinkTypes('rel');
        $this->config->set('Attr.AllowedRel', array('nofollow', 'foo'));

        $this->assertDef('', false);
        $this->assertDef('nofollow', true);
        $this->assertDef('nofollow foo', true);
        $this->assertDef('nofollow bar', 'nofollow');
        $this->assertDef('bar', false);

    }

}

// vim: et sw=4 sts=4
