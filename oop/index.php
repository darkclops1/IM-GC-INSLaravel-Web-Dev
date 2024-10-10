<?php

// Mengimpor file Animal, Ape, dan Frog
require_once 'animal.php';
require_once 'Ape.php';
require_once 'Frog.php';

// Instance object dari class Animal
$sheep = new Animal("shaun");
echo "Name: " . $sheep->get_name() . "<br>";
echo "Legs: " . $sheep->get_legs() . "<br>";
echo "Cold Blooded: " . $sheep->get_cold_blooded() . "<br><br>";

// Instance object dari class Frog
$kodok = new Frog("buduk");
echo "Name: " . $kodok->get_name() . "<br>";
echo "Legs: " . $kodok->get_legs() . "<br>";
echo "Cold Blooded: " . $kodok->get_cold_blooded() . "<br>";
$kodok->jump(); // Output: Hop Hop
echo "<br>";

// Instance object dari class Ape
$sungokong = new Ape("kera sakti");
echo "Name: " . $sungokong->get_name() . "<br>";
echo "Legs: " . $sungokong->get_legs() . "<br>";
echo "Cold Blooded: " . $sungokong->get_cold_blooded() . "<br>";
$sungokong->yell(); // Output: Auooo

?>