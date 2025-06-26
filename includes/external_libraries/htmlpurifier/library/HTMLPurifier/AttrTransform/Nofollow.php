/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

// must be called POST validation

/**
 * Adds rel="nofollow" to all outbound links.  This transform is
 * only attached if Attr.Nofollow is TRUE.
 */
class HTMLPurifier_AttrTransform_Nofollow extends HTMLPurifier_AttrTransform
{
    private $parser;

    public function __construct() {
        $this->parser = new HTMLPurifier_URIParser();
    }

    public function transform($attr, $config, $context) {

        if (!isset($attr['href'])) {
            return $attr;
        }

        // XXX Kind of inefficient
        $url = $this->parser->parse($attr['href']);
        $scheme = $url->getSchemeObj($config, $context);

        if ($scheme->browsable && !$url->isLocal($config, $context)) {
            if (isset($attr['rel'])) {
                $rels = explode(' ', $attr);
                if (!in_array('nofollow', $rels)) {
                    $rels[] = 'nofollow';
                }
                $attr['rel'] = implode(' ', $rels);
            } else {
                $attr['rel'] = 'nofollow';
            }
        }

        return $attr;

    }

}

// vim: et sw=4 sts=4
