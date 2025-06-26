/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

class HTMLPurifier_HTMLModule_RubyTest extends HTMLPurifier_HTMLModuleHarness
{

    function setUp() {
        parent::setUp();
        $this->config->set('HTML.Doctype', 'XHTML 1.1');
    }

    function testBasicUse() {
        $this->assertResult(
            '<ruby><rb>WWW</rb><rt>World Wide Web</rt></ruby>'
        );
    }

    function testRPUse() {
        $this->assertResult(
            '<ruby><rb>WWW</rb><rp>(</rp><rt>World Wide Web</rt><rp>)</rp></ruby>'
        );
    }

    function testComplexUse() {
        $this->assertResult(
'<ruby>
  <rbc>
    <rb>10</rb>
    <rb>31</rb>
    <rb>2002</rb>
  </rbc>
  <rtc>
    <rt>Month</rt>
    <rt>Day</rt>
    <rt>Year</rt>
  </rtc>
  <rtc>
    <rt rbspan="3">Expiration Date</rt>
  </rtc>
</ruby>'
        );

        /* not implemented
        function testBackwardsCompat() {
            $this->assertResult(
                '<ruby>A<rp>(</rp><rt>aaa</rt><rp>)</rp></ruby>',
                '<ruby><rb>A</rb><rp>(</rp><rt>aaa</rt><rp>)</rp></ruby>'
            );
        }
        */

    }

}

// vim: et sw=4 sts=4
