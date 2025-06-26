/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

// since Mocks can't be called from within test files, we need to do
// a little jumping through hoops to generate them
function generate_mock_once($name) {
    $mock_name = $name . 'Mock';
    if (class_exists($mock_name, false)) return false;
    Mock::generate($name, $mock_name);
}

// vim: et sw=4 sts=4
