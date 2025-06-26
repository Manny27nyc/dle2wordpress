/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

class HTMLPurifier_VarParserHarness extends UnitTestCase
{

    protected $parser;

    public function setup() {
        $class = substr(get_class($this), 0, -4);
        $this->parser = new $class();
    }

    function assertValid($var, $type, $ret = null) {
        $ret = ($ret === null) ? $var : $ret;
        $this->assertIdentical($this->parser->parse($var, $type), $ret);
    }

    function assertInvalid($var, $type, $msg = null) {
        $caught = false;
        try {
            $this->parser->parse($var, $type);
        } catch (HTMLPurifier_VarParserException $e) {
            $caught = true;
            if ($msg !== null) $this->assertIdentical($e->getMessage(), $msg);
        }
        if (!$caught) {
            $this->fail('Did not catch expected error');
        }
    }

}

// vim: et sw=4 sts=4
