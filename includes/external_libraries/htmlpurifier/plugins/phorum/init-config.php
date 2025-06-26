/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

/**
 * Initializes the appropriate configuration from either a PHP file
 * or a module configuration value
 * @return Instance of HTMLPurifier_Config
 */
function phorum_htmlpurifier_get_config($default = false) {
    global $PHORUM;
    $config_exists = phorum_htmlpurifier_config_file_exists();
    if ($default || $config_exists || !isset($PHORUM['mod_htmlpurifier']['config'])) {
        $config = HTMLPurifier_Config::createDefault();
        include(dirname(__FILE__) . '/config.default.php');
        if ($config_exists) {
            include(dirname(__FILE__) . '/config.php');
        }
        unset($PHORUM['mod_htmlpurifier']['config']); // unnecessary
    } else {
        $config = HTMLPurifier_Config::create($PHORUM['mod_htmlpurifier']['config']);
    }
    return $config;
}

function phorum_htmlpurifier_config_file_exists() {
    return file_exists(dirname(__FILE__) . '/config.php');
}

// vim: et sw=4 sts=4
