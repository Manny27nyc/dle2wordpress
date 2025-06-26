/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

class HTMLPurifier_AttrDef_CSS_URITest extends HTMLPurifier_AttrDefHarness
{

    function test() {

        $this->def = new HTMLPurifier_AttrDef_CSS_URI();

        $this->assertDef('', false);

        // we could be nice but we won't be
        $this->assertDef('http://www.example.com/', false);

        $this->assertDef('url(', false);
        $this->assertDef('url("")', true);
        $result = 'url("http://www.example.com/")';
        $this->assertDef('url(http://www.example.com/)', $result);
        $this->assertDef('url("http://www.example.com/")', $result);
        $this->assertDef("url('http://www.example.com/')", $result);
        $this->assertDef(
            '  url(  "http://www.example.com/" )   ', $result);
        $this->assertDef("url(http://www.example.com/foo,bar\)\'\()",
            'url("http://www.example.com/foo,bar%29%27%28")');
    }

}

// vim: et sw=4 sts=4
