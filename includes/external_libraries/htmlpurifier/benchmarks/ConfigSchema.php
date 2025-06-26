/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

chdir(dirname(__FILE__));

//require_once '../library/HTMLPurifier.path.php';
shell_exec('php ../maintenance/generate-schema-cache.php');
require_once '../library/HTMLPurifier.path.php';
require_once 'HTMLPurifier.includes.php';

$begin = xdebug_memory_usage();

$schema = HTMLPurifier_ConfigSchema::makeFromSerial();

echo xdebug_memory_usage() - $begin;

// vim: et sw=4 sts=4
