<?php
require 'Mature.php';

$name = new Mature();

$name->SetNom($_POST["nom"]);

$name->say_youname();
$name->say_hi();
