/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

/**
 * Validates nntp (Network News Transfer Protocol) as defined by generic RFC 1738
 */
class HTMLPurifier_URIScheme_nntp extends HTMLPurifier_URIScheme {

    public $default_port = 119;
    public $browsable = false;

    public function doValidate(&$uri, $config, $context) {
        $uri->userinfo = null;
        $uri->query    = null;
        return true;
    }

}

// vim: et sw=4 sts=4
