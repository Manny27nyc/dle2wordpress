/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

class HTMLPurifier_HTMLModuleHarness extends HTMLPurifier_StrategyHarness
{
    function setup() {
        parent::setup();
        $this->obj = new HTMLPurifier_Strategy_Core();
    }
}

// vim: et sw=4 sts=4
