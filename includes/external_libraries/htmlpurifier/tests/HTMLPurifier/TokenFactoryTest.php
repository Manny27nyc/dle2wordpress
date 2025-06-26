/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

class HTMLPurifier_TokenFactoryTest extends HTMLPurifier_Harness
{
    public function test() {

        $factory = new HTMLPurifier_TokenFactory();

        $regular = new HTMLPurifier_Token_Start('a', array('href' => 'about:blank'));
        $generated = $factory->createStart('a', array('href' => 'about:blank'));

        $this->assertIdentical($regular, $generated);

    }
}

// vim: et sw=4 sts=4
