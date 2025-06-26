/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

/**
 * @file
 * Defines a function wrapper for HTML Purifier for quick use.
 * @note ''HTMLPurifier()'' is NOT the same as ''new HTMLPurifier()''
 */

/**
 * Purify HTML.
 * @param $html String HTML to purify
 * @param $config Configuration to use, can be any value accepted by
 *        HTMLPurifier_Config::create()
 */
function HTMLPurifier($html, $config = null) {
    static $purifier = false;
    if (!$purifier) {
        $purifier = new HTMLPurifier();
    }
    return $purifier->purify($html, $config);
}

// vim: et sw=4 sts=4
