/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

class HTMLPurifier_DefinitionTest extends HTMLPurifier_Harness
{
    function test_setup() {
        $def = new HTMLPurifier_DefinitionTestable();
        $config = HTMLPurifier_Config::createDefault();
        $def->expectOnce('doSetup', array($config));
        $def->setup($config);
    }
    function test_setup_redundant() {
        $def = new HTMLPurifier_DefinitionTestable();
        $config = HTMLPurifier_Config::createDefault();
        $def->expectNever('doSetup');
        $def->setup = true;
        $def->setup($config);
    }
}

// vim: et sw=4 sts=4
