<?php
require 'Personne.php';

class Mature extends Personne
{
    public function say_hi()
    {
        echo "<br>hi from mature inhitence";
        # code...
    }

    public function say_youname(Type $var = null)
    {
        echo "<br>my mature(inhitence) name is Mr mustapha";
        # code...
    }
}

?>