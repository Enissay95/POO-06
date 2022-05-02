<?php


class Speedometer 
{

    public const factorConvertion = 0.621371;

    public static function convertKmToMiles (int $Km): ?float
    {
        return $Km * self::factorConvertion;
    }
}


echo Speedometer::convertKmToMiles(10);
