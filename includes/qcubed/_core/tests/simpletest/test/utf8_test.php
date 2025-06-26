/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
// $Id: parser_test.php 1608 2007-12-27 09:03:07Z pp11 $
// Handle with care : this file is UTF8.

require_once(dirname(__FILE__) . '/../autorun.php');
require_once(dirname(__FILE__) . '/../php_parser.php');
require_once(dirname(__FILE__) . '/../url.php');
Mock::generate('SimpleHtmlSaxParser');
Mock::generate('SimplePhpPageBuilder');

class TestOfHtmlSaxParserWithDifferentCharset extends UnitTestCase {
    function testWithTextInUTF8() {
        $regex = &new ParallelRegex(false);
        $regex->addPattern("eé");
        $this->assertTrue($regex->match("eéêè", $match));
        $this->assertEqual($match, "eé");
    }

    function testWithTextInLatin1() {
        $regex = &new ParallelRegex(false);
        $regex->addPattern(utf8_decode("eé"));
        $this->assertTrue($regex->match(utf8_decode("eéêè"), $match));
        $this->assertEqual($match, utf8_decode("eé"));
    }

    function &createParser() {
        $parser = &new MockSimpleHtmlSaxParser();
        $parser->setReturnValue('acceptStartToken', true);
        $parser->setReturnValue('acceptEndToken', true);
        $parser->setReturnValue('acceptAttributeToken', true);
        $parser->setReturnValue('acceptEntityToken', true);
        $parser->setReturnValue('acceptTextToken', true);
        $parser->setReturnValue('ignore', true);
        return $parser;
    }

    function testTagWithAttributesInUTF8() {
        $parser = &$this->createParser();
        $parser->expectOnce('acceptTextToken', array('label', '*'));
        $parser->expectAt(0, 'acceptStartToken', array('<a', '*'));
        $parser->expectAt(1, 'acceptStartToken', array('href', '*'));
        $parser->expectAt(2, 'acceptStartToken', array('>', '*'));
        $parser->expectCallCount('acceptStartToken', 3);
        $parser->expectAt(0, 'acceptAttributeToken', array('= "', '*'));
        $parser->expectAt(1, 'acceptAttributeToken', array('hère.html', '*'));
        $parser->expectAt(2, 'acceptAttributeToken', array('"', '*'));
        $parser->expectCallCount('acceptAttributeToken', 3);
        $parser->expectOnce('acceptEndToken', array('</a>', '*'));
        $lexer = &new SimpleHtmlLexer($parser);
        $this->assertTrue($lexer->parse('<a href = "hère.html">label</a>'));
    }

    function testTagWithAttributesInLatin1() {
        $parser = &$this->createParser();
        $parser->expectOnce('acceptTextToken', array('label', '*'));
        $parser->expectAt(0, 'acceptStartToken', array('<a', '*'));
        $parser->expectAt(1, 'acceptStartToken', array('href', '*'));
        $parser->expectAt(2, 'acceptStartToken', array('>', '*'));
        $parser->expectCallCount('acceptStartToken', 3);
        $parser->expectAt(0, 'acceptAttributeToken', array('= "', '*'));
        $parser->expectAt(1, 'acceptAttributeToken', array(utf8_decode('hère.html'), '*'));
        $parser->expectAt(2, 'acceptAttributeToken', array('"', '*'));
        $parser->expectCallCount('acceptAttributeToken', 3);
        $parser->expectOnce('acceptEndToken', array('</a>', '*'));
        $lexer = &new SimpleHtmlLexer($parser);
        $this->assertTrue($lexer->parse(utf8_decode('<a href = "hère.html">label</a>')));
    }
}

class TestOfUrlithDifferentCharset extends UnitTestCase {
    function testUsernameAndPasswordInUTF8() {
        $url = new SimpleUrl('http://pÈrick:penËt@www.lastcraft.com');
        $this->assertEqual($url->getUsername(), 'pÈrick');
        $this->assertEqual($url->getPassword(), 'penËt');
    }
}

?>