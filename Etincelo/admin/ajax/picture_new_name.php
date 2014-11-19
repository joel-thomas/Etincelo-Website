<?php
 require("../lib/admin.class.php");
 $etinadmin = new etinadmin();

if (isset($_POST["id"]) AND isset($_POST["value"])) {
   $etinadmin->ajax_newname_picture();
}
?>