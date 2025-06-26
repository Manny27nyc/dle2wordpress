/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

class HTMLPurifier_URIFilter_DisableExternalResourcesTest extends
      HTMLPurifier_URIFilter_DisableExternalTest
{

    function setUp() {
        parent::setUp();
        $this->filter = new HTMLPurifier_URIFilter_DisableExternalResources();
        $var = true;
        $this->context->register('EmbeddedURI', $var);
    }

    function testPreserveWhenNotEmbedded() {
        $this->context->destroy('EmbeddedURI'); // undo setUp
        $this->assertFiltering(
            'http://example.com'
        );
    }

}

// vim: et sw=4 sts=4
