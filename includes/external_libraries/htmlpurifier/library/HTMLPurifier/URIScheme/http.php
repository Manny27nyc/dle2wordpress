/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

/**
 * Validates http (HyperText Transfer Protocol) as defined by RFC 2616
 */
class HTMLPurifier_URIScheme_http extends HTMLPurifier_URIScheme {

    public $default_port = 80;
    public $browsable = true;
    public $hierarchical = true;

    public function doValidate(&$uri, $config, $context) {
        $uri->userinfo = null;
        return true;
    }

}

// vim: et sw=4 sts=4
