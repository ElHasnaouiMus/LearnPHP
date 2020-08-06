<?php

include "car.php";


class vehiculeFactory
{
    public static function Makevehicule($a, $b)
    {
        return new Car($a,$b);
        # code...
    }
}