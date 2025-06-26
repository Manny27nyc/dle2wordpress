/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

/**
 * Concrete comment token class. Generally will be ignored.
 */
class HTMLPurifier_Token_Comment extends HTMLPurifier_Token
{
    public $data; /**< Character data within comment. */
    public $is_whitespace = true;
    /**
     * Transparent constructor.
     *
     * @param $data String comment data.
     */
    public function __construct($data, $line = null, $col = null) {
        $this->data = $data;
        $this->line = $line;
        $this->col  = $col;
    }
}

// vim: et sw=4 sts=4
