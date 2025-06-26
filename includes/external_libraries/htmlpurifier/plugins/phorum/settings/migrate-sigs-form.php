/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

function phorum_htmlpurifier_show_migrate_sigs_form() {

    $frm = new PhorumInputForm ('', "post", "Migrate");
    $frm->hidden("module", "modsettings");
    $frm->hidden("mod", "htmlpurifier");
    $frm->hidden("migrate-sigs", "1");
    $frm->addbreak("Migrate user signatures to HTML");
    $frm->addMessage('This operation will migrate your users signatures
        to HTML. <strong>This process is irreversible and must only be performed once.</strong>
        Type in yes in the confirmation field to migrate.');
    if (!file_exists(dirname(__FILE__) . '/../migrate.php')) {
        $frm->addMessage('Migration file does not exist, cannot migrate signatures.
            Please check <tt>migrate.bbcode.php</tt> on how to create an appropriate file.');
    } else {
        $frm->addrow('Confirm:', $frm->text_box("confirmation", ""));
    }
    $frm->show();
}

// vim: et sw=4 sts=4
