/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

/**
 * Simple transformation, just change tag name to something else,
 * and possibly add some styling. This will cover most of the deprecated
 * tag cases.
 */
class HTMLPurifier_TagTransform_Simple extends HTMLPurifier_TagTransform
{

    protected $style;

    /**
     * @param $transform_to Tag name to transform to.
     * @param $style CSS style to add to the tag
     */
    public function __construct($transform_to, $style = null) {
        $this->transform_to = $transform_to;
        $this->style = $style;
    }

    public function transform($tag, $config, $context) {
        $new_tag = clone $tag;
        $new_tag->name = $this->transform_to;
        if (!is_null($this->style) &&
            ($new_tag instanceof HTMLPurifier_Token_Start || $new_tag instanceof HTMLPurifier_Token_Empty)
        ) {
            $this->prependCSS($new_tag->attr, $this->style);
        }
        return $new_tag;
    }

}

// vim: et sw=4 sts=4
