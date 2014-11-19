<?php
 require("../lib/admin.class.php");
 $etinadmin = new etinadmin();

if (isset($_POST["id"])) {
    $etinadmin->ajax_delete_picture();
}
?>