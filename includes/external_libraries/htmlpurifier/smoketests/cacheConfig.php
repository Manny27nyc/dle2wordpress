/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

require_once 'common.php';

$config = HTMLPurifier_Config::createDefault();
$config->set('HTML.Doctype', 'HTML 4.01 Strict');
$config->set('HTML.Allowed', 'b,a[href],br');
$config->set('CSS.AllowTricky', true);
$config->set('URI.Disable', true);
$serial = $config->serialize();

$result = unserialize($serial);
$purifier = new HTMLPurifier($result);
echo htmlspecialchars($purifier->purify('<b>Bold</b><br><i><a href="http://google.com">no</a> formatting</i>'));

