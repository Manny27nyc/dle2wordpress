/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
require_once(dirname(__FILE__) . '/../autorun.php');

class AllTests extends TestSuite {
    function AllTests() {
        $this->TestSuite('All tests for SimpleTest ' . SimpleTest::getVersion());
        $this->addFile(dirname(__FILE__) . '/unit_tests.php');
        $this->addFile(dirname(__FILE__) . '/shell_test.php');
        $this->addFile(dirname(__FILE__) . '/live_test.php');
        $this->addFile(dirname(__FILE__) . '/acceptance_test.php');
    }
}
?>