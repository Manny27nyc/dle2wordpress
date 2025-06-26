/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
require_once(dirname(__FILE__) . '/../autorun.php');

class BadTestCases extends TestSuite {
    function BadTestCases() {
        $this->TestSuite('Two bad test cases');
        $this->addFile(dirname(__FILE__) . '/support/empty_test_file.php');
    }
}
?>