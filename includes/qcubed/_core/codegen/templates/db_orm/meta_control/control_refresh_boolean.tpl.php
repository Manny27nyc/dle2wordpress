/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
			if ($this-><?php echo $strControlId  ?>) $this-><?php echo $strControlId  ?>->Checked = $this-><?php echo $strObjectName  ?>-><?php echo $objColumn->PropertyName  ?>;
			if ($this-><?php echo $strLabelId  ?>) $this-><?php echo $strLabelId  ?>->Text = ($this-><?php echo $strObjectName  ?>-><?php echo $objColumn->PropertyName  ?>) ? QApplication::Translate('Yes') : QApplication::Translate('No');