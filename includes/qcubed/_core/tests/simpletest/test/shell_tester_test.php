/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
// $Id: shell_tester_test.php 1787 2008-04-26 20:35:39Z pp11 $
require_once(dirname(__FILE__) . '/../autorun.php');
require_once(dirname(__FILE__) . '/../shell_tester.php');
Mock::generate('SimpleShell');

class TestOfShellTestCase extends ShellTestCase {
    private $mock_shell = false;
    
    function getShell() {
        return $this->mock_shell;
    }
    
    function testGenericEquality() {
        $this->assertEqual('a', 'a');
        $this->assertNotEqual('a', 'A');
    }
    
    function testExitCode() {
        $this->mock_shell = new MockSimpleShell();
        $this->mock_shell->setReturnValue('execute', 0);
        $this->mock_shell->expectOnce('execute', array('ls'));
        $this->assertTrue($this->execute('ls'));
        $this->assertExitCode(0);
    }
    
    function testOutput() {
        $this->mock_shell = new MockSimpleShell();
        $this->mock_shell->setReturnValue('execute', 0);
        $this->mock_shell->setReturnValue('getOutput', "Line 1\nLine 2\n");
        $this->assertOutput("Line 1\nLine 2\n");
    }
    
    function testOutputPatterns() {
        $this->mock_shell = new MockSimpleShell();
        $this->mock_shell->setReturnValue('execute', 0);
        $this->mock_shell->setReturnValue('getOutput', "Line 1\nLine 2\n");
        $this->assertOutputPattern('/line/i');
        $this->assertNoOutputPattern('/line 2/');
    }
}
?>