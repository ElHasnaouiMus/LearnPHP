<?php

require_once "King.php";

$king1 = king::getInstance(); 
$king2 = king::getInstance(); 

var_dump($king1);
var_dump($king2);