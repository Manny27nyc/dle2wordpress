/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
    function show($name) {
        @unlink(dirname(__FILE__) . "/temp/$name");
        @move_uploaded_file($_FILES[$name]['tmp_name'], dirname(__FILE__) . "/temp/$name");
        $unsafe = @file_get_contents(dirname(__FILE__) . "/temp/$name");
        $safe = htmlentities($unsafe);
        $handle = fopen(dirname(__FILE__) . "/temp/$name", 'w');
        fwrite($handle, $safe);
        fclose($handle);
        print $safe;
    }
?><html>
    <head><title>Test of file upload</title></head>
    <body>
        <p><?php show('content'); ?></p>
        <p><?php show('supplemental'); ?></p>
    </body>
</html>