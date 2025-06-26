/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
/**
		 * Reload this <?php echo $objTable->ClassName  ?> from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved <?php echo $objTable->ClassName  ?> object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = <?php echo $objTable->ClassName  ?>::Load(<?php foreach ($objTable->PrimaryKeyColumnArray as $objColumn) { ?>$this-><?php echo $objColumn->VariableName ?>, <?php } ?><?php GO_BACK(2); ?>);

			// Update $this's local variables to match
<?php foreach ($objTable->ColumnArray as $objColumn) { ?>
<?php if (!$objColumn->Identity) { ?>
<?php if ($objColumn->Reference) { ?>
			$this-><?php echo $objColumn->PropertyName  ?> = $objReloaded-><?php echo $objColumn->PropertyName  ?>;
<?php } ?><?php if (!$objColumn->Reference) { ?>
			$this-><?php echo $objColumn->VariableName  ?> = $objReloaded-><?php echo $objColumn->VariableName  ?>;
<?php } ?><?php if ($objColumn->PrimaryKey) { ?>
			$this->__<?php echo $objColumn->VariableName  ?> = $this-><?php echo $objColumn->VariableName  ?>;
<?php } ?><?php } ?><?php } ?>
		}