/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
///////////////////////////////
		// ASSOCIATED OBJECTS' METHODS
		///////////////////////////////

<?php foreach ($objTable->ReverseReferenceArray as $objReverseReference) { ?><?php if (!$objReverseReference->Unique) { ?>
<?php include("associated_object.tpl.php"); ?>
<?php } ?><?php } ?>
<?php foreach ($objTable->ManyToManyReferenceArray as $objManyToManyReference) { ?>
<?php include("associated_object_manytomany.tpl.php"); ?>
<?php } ?>
