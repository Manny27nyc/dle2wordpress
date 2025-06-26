/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
		protected function <?php echo $objCodeGen->FormControlVariableNameForManyToManyReference($objManyToManyReference);  ?>_Update() {
			if ($this-><?php echo $strControlId  ?>) {
				$changedIds = $this->col<?php echo $objManyToManyReference->ObjectDescription  ?>Selected->GetChangedIds();
				$temp = <?php echo $objManyToManyReference->VariableType  ?>::QueryArray(QQ::In(QQN::<?php echo $objManyToManyReference->VariableType  ?>()-><?php echo $objCodeGen->GetTable($objManyToManyReference->AssociatedTable)->PrimaryKeyColumnArray[0]->PropertyName  ?>, array_keys($changedIds)));
				$changedItems = array();
				foreach($temp as $item) {
					$changedItems[$item-><?php echo $objCodeGen->GetTable($objManyToManyReference->AssociatedTable)->PrimaryKeyColumnArray[0]->PropertyName  ?>] = $item;
				}

				foreach($changedIds as $id=>$blnSelected) {
					$item = $changedItems[$id];
					if($blnSelected) {
						// Associate this <?php echo $objManyToManyReference->VariableType  ?>

						$this-><?php echo $strObjectName  ?>->Associate<?php echo $objManyToManyReference->ObjectDescription  ?>($item);
					} else {
						// Unassociate this <?php echo $objManyToManyReference->VariableType  ?>

						$results = $this-><?php echo $strObjectName  ?>->Unassociate<?php echo $objManyToManyReference->ObjectDescription  ?>($item);
					}
				}
			}
		}
