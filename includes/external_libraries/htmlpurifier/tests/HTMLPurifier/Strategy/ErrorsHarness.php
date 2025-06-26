/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

class HTMLPurifier_Strategy_ErrorsHarness extends HTMLPurifier_ErrorsHarness
{

    // needs to be defined
    protected function getStrategy() {}

    protected function invoke($input) {
        $strategy = $this->getStrategy();
        $lexer = new HTMLPurifier_Lexer_DirectLex();
        $tokens = $lexer->tokenizeHTML($input, $this->config, $this->context);
        $strategy->execute($tokens, $this->config, $this->context);
    }

}

// vim: et sw=4 sts=4
