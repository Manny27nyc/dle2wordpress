/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

/**
 * Validate all attributes in the tokens.
 */

class HTMLPurifier_Strategy_ValidateAttributes extends HTMLPurifier_Strategy
{

    public function execute($tokens, $config, $context) {

        // setup validator
        $validator = new HTMLPurifier_AttrValidator();

        $token = false;
        $context->register('CurrentToken', $token);

        foreach ($tokens as $key => $token) {

            // only process tokens that have attributes,
            //   namely start and empty tags
            if (!$token instanceof HTMLPurifier_Token_Start && !$token instanceof HTMLPurifier_Token_Empty) continue;

            // skip tokens that are armored
            if (!empty($token->armor['ValidateAttributes'])) continue;

            // note that we have no facilities here for removing tokens
            $validator->validateToken($token, $config, $context);

            $tokens[$key] = $token; // for PHP 4
        }
        $context->destroy('CurrentToken');

        return $tokens;
    }

}

// vim: et sw=4 sts=4
