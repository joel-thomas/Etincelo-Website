<?php
require_once("../../lib/main.class.php");
$etincelo = new etincelo_main();

$etincelo->show_listnew($_GET["new"]);
