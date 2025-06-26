/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

class HTMLPurifier_HTMLModule_ObjectTest extends HTMLPurifier_HTMLModuleHarness
{

    function setUp() {
        parent::setUp();
        $this->config->set('HTML.Trusted', true);
    }

    function testDefaultRemoval() {
        $this->config->set('HTML.Trusted', false);
        $this->assertResult(
            '<object></object>', ''
        );
    }

    function testMinimal() {
        $this->assertResult('<object></object>');
    }

    function testStandardUseCase() {
        $this->assertResult(
'<object type="video/x-ms-wmv" data="http://domain.com/video.wmv" width="320" height="256">
<param name="src" value="http://domain.com/video.wmv" />
<param name="autostart" value="false" />
<param name="controller" value="true" />
<param name="pluginurl" value="http://www.microsoft.com/Windows/MediaPlayer/" />
<a href="http://www.microsoft.com/Windows/MediaPlayer/">Windows Media player required</a>
</object>'
        );
    }

    // more test-cases?

}

// vim: et sw=4 sts=4
