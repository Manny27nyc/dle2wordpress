/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

class HTMLPurifier_URIFilter_DisableExternalTest extends HTMLPurifier_URIFilterHarness
{

    function setUp() {
        parent::setUp();
        $this->filter = new HTMLPurifier_URIFilter_DisableExternal();
    }

    function testRemoveExternal() {
        $this->assertFiltering(
            'http://example.com', false
        );
    }

    function testPreserveInternal() {
        $this->assertFiltering(
            '/foo/bar'
        );
    }

    function testPreserveOurHost() {
        $this->config->set('URI.Host', 'example.com');
        $this->assertFiltering(
            'http://example.com'
        );
    }

    function testPreserveOurSubdomain() {
        $this->config->set('URI.Host', 'example.com');
        $this->assertFiltering(
            'http://www.example.com'
        );
    }

    function testRemoveSuperdomain() {
        $this->config->set('URI.Host', 'www.example.com');
        $this->assertFiltering(
            'http://example.com', false
        );
    }

    function testBaseAsHost() {
        $this->config->set('URI.Base', 'http://www.example.com/foo/bar');
        $this->assertFiltering(
            'http://www.example.com/baz'
        );
    }

}

// vim: et sw=4 sts=4
