/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
require_once(dirname(__FILE__) . '/../autorun.php');
require_once(dirname(__FILE__) . '/../default_reporter.php');

class TestOfCommandLineParsing extends UnitTestCase {
    
    function testDefaultsToEmptyStringToMeanNullToTheSelectiveReporter() {
        $parser = new SimpleCommandLineParser(array());
        $this->assertIdentical($parser->getTest(), '');
        $this->assertIdentical($parser->getTestCase(), '');
    }
    
    function testNotXmlByDefault() {
        $parser = new SimpleCommandLineParser(array());
        $this->assertFalse($parser->isXml());
    }
    
    function testCanDetectRequestForXml() {
        $parser = new SimpleCommandLineParser(array('--xml'));
        $this->assertTrue($parser->isXml());
    }
    
    function testCanReadAssignmentSyntax() {
        $parser = new SimpleCommandLineParser(array('--test=myTest'));
        $this->assertEqual($parser->getTest(), 'myTest');
    }
    
    function testCanReadFollowOnSyntax() {
        $parser = new SimpleCommandLineParser(array('--test', 'myTest'));
        $this->assertEqual($parser->getTest(), 'myTest');
    }
    
    function testCanReadShortForms() {
        $parser = new SimpleCommandLineParser(array('-t', 'myTest', '-c', 'MyClass', '-x'));
        $this->assertEqual($parser->getTest(), 'myTest');
        $this->assertEqual($parser->getTestCase(), 'MyClass');
        $this->assertTrue($parser->isXml());
    }
}
?>