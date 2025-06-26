/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
$blnHasUnique = false;
foreach ($objTable->IndexArray as $objIndex) {
	if ($objIndex->Unique && !$objIndex->PrimaryKey){
		$blnHasUnique = true;
		continue;
	}
}
if ($blnHasUnique) {
?>
// Check for records that may violate Unique Clauses
<?php
	require 'validate_unique.tpl.php';

} ?>
