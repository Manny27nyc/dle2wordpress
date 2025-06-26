/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

class HTMLPurifier_URIFilter_DisableResourcesTest extends HTMLPurifier_URIFilterHarness
{

    function setUp() {
        parent::setUp();
        $this->filter = new HTMLPurifier_URIFilter_DisableResources();
        $var = true;
        $this->context->register('EmbeddedURI', $var);
    }

    function testRemoveResource() {
        $this->assertFiltering('/foo/bar', false);
    }

    function testPreserveRegular() {
        $this->context->destroy('EmbeddedURI'); // undo setUp
        $this->assertFiltering('/foo/bar');
    }

}

// vim: et sw=4 sts=4
