/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
/**
 * 
 * @package Tests
 */
class QStringTests extends QUnitTestCaseBase {    
	public function testLongestCommonSubsequence() {
		$this->lcsCheckValueHelper("hello world", "world war 2", "world");
		$this->lcsCheckValueHelper("what's up people", "what in the world is going on", "what");
		$this->lcsCheckValueHelper("foo bar", "bar foo", "foo"); // not bar! foo is first!
		
		$this->lcsCheckValueHelper("aaa", "aa", "aa");
		$this->lcsCheckValueHelper("cc", "bbbbcccccc", "cc");
		$this->lcsCheckValueHelper("ccc", "bcbb", "c");
		$this->lcsCheckValueHelper("aaa", "b", null);
		$this->lcsCheckValueHelper("", "bb", null);
		$this->lcsCheckValueHelper("aa", "", null);
		$this->lcsCheckValueHelper("", null, null);
		$this->lcsCheckValueHelper(null, null, null);
	}
	
	private function lcsCheckValueHelper($str1, $str2, $strExpectedResult) {
		$strResult = QString::LongestCommonSubsequence($str1, $str2); 
		$this->assertEqual($strResult, $strExpectedResult, "Longest common subsequence of '" . $str1 . 
			"' and '" . $str2 . "' is '" . $strResult . "'");
	}	
}
?>