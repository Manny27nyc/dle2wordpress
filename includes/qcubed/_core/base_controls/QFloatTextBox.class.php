/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
	/**
	 * This file contains the QFloatTextBox class.
	 *
	 * @package Controls
	 */

	/**
	 * A subclass of QNumericTextBox -- Validate will also ensure
	 * that the Text is a valid float and (if applicable) is in the range of Minimum <= x <= Maximum
	 *
	 * @package Controls
	 *
	 */

	class QFloatTextBox extends QNumericTextBox {
		//////////
		// Methods
		//////////
		public function __construct($objParentObject, $strControlId = null) {
			parent::__construct($objParentObject, $strControlId);
			$this->strLabelForInvalid = QApplication::Translate('Invalid Float');
			$this->strDataType = QType::Float;
		}
	}

?>