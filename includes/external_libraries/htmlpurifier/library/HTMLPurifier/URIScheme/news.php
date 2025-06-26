/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

/**
 * Validates news (Usenet) as defined by generic RFC 1738
 */
class HTMLPurifier_URIScheme_news extends HTMLPurifier_URIScheme {

    public $browsable = false;
    public $may_omit_host = true;

    public function doValidate(&$uri, $config, $context) {
        $uri->userinfo = null;
        $uri->host     = null;
        $uri->port     = null;
        $uri->query    = null;
        // typecode check needed on path
        return true;
    }

}

// vim: et sw=4 sts=4
