/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
	// This example header.inc.php is intended to be modfied for your application.
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="<?php _p(QApplication::$EncodingType); ?>" />
<?php if (isset($strPageTitle)) { ?>
		<title><?php _p($strPageTitle); ?></title>
<?php } ?>
		<style type="text/css">@import url("<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__); ?>/styles.css");</style>
	</head>
	<body>
		<section id="content">