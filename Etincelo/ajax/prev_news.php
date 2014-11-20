<?php
require_once("../lib/main.class.php");
$etincelo = new etincelo_main();

$etincelo->get_prev_news($_POST["id"]);