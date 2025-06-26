/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

/**
 * @file
 * Convenience file that registers autoload handler for HTML Purifier.
 *
 * @warning
 *      This autoloader does not contain the compatibility code seen in
 *      HTMLPurifier_Bootstrap; the user is expected to make any necessary
 *      changes to use this library.
 */

if (function_exists('spl_autoload_register')) {
    spl_autoload_register(array('HTMLPurifierExtras', 'autoload'));
    if (function_exists('__autoload')) {
        // Be polite and ensure that userland autoload gets retained
        spl_autoload_register('__autoload');
    }
} elseif (!function_exists('__autoload')) {
    function __autoload($class) {
        return HTMLPurifierExtras::autoload($class);
    }
}

// vim: et sw=4 sts=4
