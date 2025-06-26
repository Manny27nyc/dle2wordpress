/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
		/**
		 * Create and setup QLabel <?php echo $strControlId  ?>

		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function <?php echo $strControlId  ?>_Create($strControlId = null) {
			$this-><?php echo $strControlId  ?> = new QLabel($this->objParentObject, $strControlId);
			$this-><?php echo $strControlId  ?>->Name = QApplication::Translate('<?php echo QCodeGen::MetaControlLabelNameFromColumn($objColumn)  ?>');
			if ($this->blnEditMode)
				$this-><?php echo $strControlId  ?>->Text = $this-><?php echo $strObjectName  ?>-><?php echo $objColumn->PropertyName  ?>;
			else
				$this-><?php echo $strControlId  ?>->Text = 'N/A';
			return $this-><?php echo $strControlId  ?>;
		}