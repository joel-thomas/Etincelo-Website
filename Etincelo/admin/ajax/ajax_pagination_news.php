<?php
 require("../lib/admin.class.php");
 $etinadmin = new etinadmin();

$etinadmin->ajax_pagination_news($_GET["new"]);