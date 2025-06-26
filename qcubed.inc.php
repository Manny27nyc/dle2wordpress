/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php 

$configPath = "includes/configuration";

if (isset($__CONFIG_ONLY__) && $__CONFIG_ONLY__ == true) {
	require_once($configPath . '/configuration.inc.php');
} else {
	require_once($configPath . '/prepend.inc.php');
}
?>