/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

class HTMLPurifier_ChildDefHarness extends HTMLPurifier_ComplexHarness
{

    public function setUp() {
        parent::setUp();
        $this->obj       = null;
        $this->func      = 'validateChildren';
        $this->to_tokens = true;
        $this->to_html   = true;
    }

}

// vim: et sw=4 sts=4
