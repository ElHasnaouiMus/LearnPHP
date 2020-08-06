<?php

include('President.php');

$var1 = President::getInstance();
$var2 = President::getInstance();

print $var1==$var2;
