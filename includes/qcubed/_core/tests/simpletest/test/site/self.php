/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
function my_path() {
    return preg_replace('|/[^/]*.php$|', '/', $_SERVER['SCRIPT_URI']);
}
?>