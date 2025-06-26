/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
	/* This includes library file is used by the qcubed_downloader.cli and qcubed_downloader.phpexe scripts
	 * to perform the QCubed Update Utility's File Downloading functionality.
	 */

	// Call the CLI prepend.inc.php
	require('cli_prepend.inc.php');

	// Finally, load the QUpdateUtility class itself
	require(__QCUBED_CORE__ . '/framework/QUpdateUtility.class.php');

	// Ensure that there are parameters
	if ($_SERVER['argc'] != 5)
		QUpdateUtility::PrintDownloaderInstructions();

	$strVersion = trim(strtolower($_SERVER['argv'][1]));
	if (($strVersion == 'stable') || ($strVersion == 'development'))
		QUpdateUtility::Error('Invalid Version format: ' . $strVersion);

	$objUpdateUtility = new QUpdateUtility($strVersion);
	$objUpdateUtility->RunDownloader($_SERVER['argv'][2], $_SERVER['argv'][3], $_SERVER['argv'][4]);
?>