<?php
 class Car {
    public $color;
    public $manufacturer;
    }
    $beetle = new Car();
    $beetle->color = "red";
    $beetle->manufacturer = "Volkswagen";
    $mustang = new Car();
    $mustang->color = "green";
    $mustang->manufacturer = "Ford";
    echo $beetle->color."\n";
    echo $beetle->manufacturer."\n";
    echo $mustang->color."\n";
    echo $mustang->manufacturer."\n";
    print_r($beetle);
    print_r($mustang);
?>