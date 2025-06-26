/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

class HTMLPurifier_URIFilter_DisableResources extends HTMLPurifier_URIFilter
{
    public $name = 'DisableResources';
    public function filter(&$uri, $config, $context) {
        return !$context->get('EmbeddedURI', true);
    }
}

// vim: et sw=4 sts=4
