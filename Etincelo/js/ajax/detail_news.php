<?php
require_once("../../lib/main.class.php");
$etincelo = new etincelo_main();

$etincelo->get_detailnews_byid($_POST["id"]);
