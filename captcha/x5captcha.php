<?php
include("../res/x5engine.php");
$nameList = array("pyj","ur5","m5v","p6j","a86","h5r","3c5","hwt","euv","lcg");
$charList = array("8","X","Z","A","W","H","W","X","W","K");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
