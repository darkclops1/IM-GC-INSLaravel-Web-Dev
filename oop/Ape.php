<?php

// Inherit class Animal
require_once 'animal.php';

class Ape extends Animal {
    // Constructor khusus untuk Ape
    public function __construct($name) {
        parent::__construct($name);
        $this->legs = 2; // Ape memiliki kaki 2
    }

    // Method yell untuk Ape
    public function yell() {
        echo "Yell: Auooo<br>";
    }
}

?>