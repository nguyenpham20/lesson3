<?php
include_once "index.php";
$fan = new Fan();
echo $fan->__toString()."<br/>";
$fan->setOn(TRUE);
echo $fan->__toString();
