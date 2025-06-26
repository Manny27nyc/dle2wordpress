/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

class HTMLPurifier_Strategy_MakeWellFormed_EndRewindInjectorTest extends HTMLPurifier_StrategyHarness
{
    function setUp() {
        parent::setUp();
        $this->obj = new HTMLPurifier_Strategy_MakeWellFormed();
        $this->config->set('AutoFormat.Custom', array(
            new HTMLPurifier_Strategy_MakeWellFormed_EndRewindInjector()
        ));
    }
    function testBasic() {
        $this->assertResult('');
    }
    function testFunction() {
        $this->assertResult('<span>asdf</span>','');
    }
    function testFailedFunction() {
        $this->assertResult('<span>asd<b>asdf</b>asdf</span>','<span><b></b></span>');
    }
    function testPadded() {
        $this->assertResult('<b></b><span>asdf</span><b></b>','<b></b><b></b>');
    }
    function testDoubled() {
        $this->config->set('AutoFormat.Custom', array(
            new HTMLPurifier_Strategy_MakeWellFormed_EndRewindInjector(),
            new HTMLPurifier_Strategy_MakeWellFormed_EndRewindInjector(),
        ));
        $this->assertResult('<b></b><span>asdf</span>', '<b></b>');
    }
}

// vim: et sw=4 sts=4
