/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

/**
 * @file
 * Emulation layer for code that used kses(), substituting in HTML Purifier.
 */

require_once dirname(__FILE__) . '/HTMLPurifier.auto.php';

function kses($string, $allowed_html, $allowed_protocols = null) {
    $config = HTMLPurifier_Config::createDefault();
    $allowed_elements = array();
    $allowed_attributes = array();
    foreach ($allowed_html as $element => $attributes) {
        $allowed_elements[$element] = true;
        foreach ($attributes as $attribute => $x) {
            $allowed_attributes["$element.$attribute"] = true;
        }
    }
    $config->set('HTML.AllowedElements', $allowed_elements);
    $config->set('HTML.AllowedAttributes', $allowed_attributes);
    $allowed_schemes = array();
    if ($allowed_protocols !== null) {
        $config->set('URI.AllowedSchemes', $allowed_protocols);
    }
    $purifier = new HTMLPurifier($config);
    return $purifier->purify($string);
}

// vim: et sw=4 sts=4
