/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<template OverwriteFlag="true" DocrootFlag="false" DirectorySuffix="" TargetDirectory="<?php echo __MODEL_GEN__  ?>" TargetFileName="_type_class_paths.inc.php"/>
<?php print("<?php\n"); ?>
<?php foreach ($objTableArray as $objTable) { ?>
	// ClassPaths for the <?php echo $objTable->ClassName  ?> type class
<?php if (__MODEL__) { ?>
		QApplicationBase::$ClassFile['<?php echo strtolower($objTable->ClassName)  ?>'] = __MODEL__ . '/<?php echo $objTable->ClassName  ?>.class.php';
<?php } ?>
<?php } ?>
?>