<?php
/**
 * Created by IntelliJ IDEA.
 * User: lucas
 * Date: 25/11/14
 * Time: 10:29
 */

require_once 'inc/smarty/libs/Smarty.class.php';
$sm = new Smarty();
$sm->template_dir = "views/";
$sm->compile_dir = "inc/smarty/templates_c";
?>