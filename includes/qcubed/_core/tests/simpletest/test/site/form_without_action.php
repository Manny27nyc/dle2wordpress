/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<html>
    <head><title>Test of form submission</title></head>
    <body>
        <p>_GET : [<?php print $_GET['test']; ?>]</p>
        <p>_POST : [<?php print $_POST['test']; ?>]</p>
		<form method="post" name="form_project" id="form_project" action="">
			<input type="hidden" value="test" name="test" />
			<input type="submit" value="Submit Post With Empty Action" name="submit" />
		</form>
    </body>
</html>