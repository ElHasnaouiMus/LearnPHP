<?php
class Personne
{
    private $nom =null;
    private $prenom = "el hasnaoui";

    public function __construct(){
        echo '<h1>hiii construct';
    }
    public function say_youname()
    {
        # code...
        echo "<br><h2>my personne name is <b> $this->nom $this->prenom";
    }

    public function SetNom($nom)
    {
        $this->nom=$nom;
    }


}