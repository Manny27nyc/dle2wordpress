/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

class HTMLPurifier_AttrDef_URI_Email_SimpleCheckTest
    extends HTMLPurifier_AttrDef_URI_EmailHarness
{

    function setUp() {
        $this->def = new HTMLPurifier_AttrDef_URI_Email_SimpleCheck();
    }

}

// vim: et sw=4 sts=4
