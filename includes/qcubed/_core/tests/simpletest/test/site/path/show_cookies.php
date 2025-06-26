/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
    if (count($HTTP_COOKIE_VARS) > 0) {
        $_COOKIE = $HTTP_COOKIE_VARS;
    }
?><html>
    <head><title>Simple test target file</title></head>
    <body>
        A target for the SimpleTest test suite that displays cookies.
        <h1>Cookies</h1>
        <?php
            if (count($_COOKIE) > 0) {
                foreach ($_COOKIE as $key => $value) {
                    print $key . "=" . $value . ";";
                }
            }
        ?>
    </body>
</html>