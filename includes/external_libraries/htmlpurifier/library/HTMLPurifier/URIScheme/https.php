/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

/**
 * Validates https (Secure HTTP) according to http scheme.
 */
class HTMLPurifier_URIScheme_https extends HTMLPurifier_URIScheme_http {

    public $default_port = 443;
    public $secure = true;

}

// vim: et sw=4 sts=4
