/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
    if (count($HTTP_GET_VARS) > 0) {
        $_GET = $HTTP_GET_VARS;
    }
?><html>
    <head><title>Test of form self submission</title></head>
    <body>
        <form>
            <input type="hidden" name="secret" value="Wrong form">
        </form>
        <p>[<?php print $_GET['visible']; ?>]</p>
        <p>[<?php print $_GET['secret']; ?>]</p>
        <p>[<?php print $_GET['again']; ?>]</p>
        <form>
            <input type="text" name="visible">
            <input type="hidden" name="secret" value="Submitted">
            <input type="submit" name="again">
        </form>
        <!-- Bad form closing tag --></form>
    </body>
</html>