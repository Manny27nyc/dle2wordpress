/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
    /**
	 * QCodeGen
	 * 
     * Feel free to override any core QCodeGenBase methods here
	 * 
     * @package Codegen   
	 * @author Qcubed
	 * @copyright 
	 * @version 2011
	 * @access public
	 */
     
    require(__QCUBED_CORE__ . '/codegen/QCodeGenBase.class.php');     
	
    /**
	 * QCodeGen
	 * 
     * Feel free to override any core QCodeGenBase methods here
	 * 
     * @package Codegen   
	 * @author Qcubed
	 * @copyright 
	 * @version 2011
	 * @access public
	 */
	class QCodeGen extends QCodeGenBase {
		/**
		 * QCodeGen::Pluralize()
         * 
         * Example: Overriding the Pluralize method
		 * 
		 * @param string $strName
		 * @return string
		 */
		protected function Pluralize($strName) {
			// Special Rules go Here
			switch (true) {
				case ($strName == 'person'):
					return 'people';
				case ($strName == 'Person'):
					return 'People';
				case ($strName == 'PERSON'):
					return 'PEOPLE';

				// Trying to be cute here...
				case (strtolower($strName) == 'fish'):
					return $strName . 'ies';

				// Otherwise, call parent
				default:
					return parent::Pluralize($strName);
			}
		}
	}

	require(__QCUBED_CORE__ . '/codegen/library.inc.php');
?>