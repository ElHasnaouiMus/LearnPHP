<?php

$file=fopen("List_person.txt", "x+");

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];

$file_content = file("List_person.txt");

foreach($file_content as $line)
{
    echo $line."<br>";
}
fwrite($file, "$nom $prenom\n");

fclose($file);


$file_content = file("List_person.txt");

foreach($file_content as $line)
{
    echo $line."<br>";
}

?>