<?php

// Inherit class Animal
require_once 'animal.php';

class Frog extends Animal {
    // Constructor khusus untuk Frog
    public function __construct($name) {
        parent::__construct($name);
    }

    // Method jump untuk Frog
    public function jump() {
        echo "Jump: Hop Hop<br>";
    }
}

?>