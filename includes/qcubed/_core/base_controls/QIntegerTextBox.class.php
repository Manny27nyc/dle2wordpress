/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
	/**
	 * This file contains the QIntegerTextBox class
	 *
	 * @package Controls
	 */

	/**
	 * A subclass of TextBox with its validate method overridden -- Validate will also ensure
	 * that the Text is a valid integer and (if applicable) is in the range of Minimum <= x <= Maximum
	 *
	 * @package Controls
	 *
	 */

	class QIntegerTextBox extends QNumericTextBox {
		//////////
		// Methods
		//////////
		public function __construct($objParentObject, $strControlId = null) {
			parent::__construct($objParentObject, $strControlId);
			$this->strLabelForInvalid = QApplication::Translate('Invalid Integer');
			$this->strDataType = QType::Integer;
		}
	}

?>
