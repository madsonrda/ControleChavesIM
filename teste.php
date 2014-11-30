<?php
require_once "sm.php";
$sm->assign("data",date("d/m/Y"));
$sm->assign("nome","madson");
$sm->display("test.html");
?>
