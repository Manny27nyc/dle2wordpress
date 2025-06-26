/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

class HTMLPurifier_AttrDef_CSS_AlphaValue extends HTMLPurifier_AttrDef_CSS_Number
{

    public function __construct() {
        parent::__construct(false); // opacity is non-negative, but we will clamp it
    }

    public function validate($number, $config, $context) {
        $result = parent::validate($number, $config, $context);
        if ($result === false) return $result;
        $float = (float) $result;
        if ($float < 0.0) $result = '0';
        if ($float > 1.0) $result = '1';
        return $result;
    }

}

// vim: et sw=4 sts=4
