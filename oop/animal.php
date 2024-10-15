<?php

// Definisi Class Animal
class Animal {
    // Properties
    public $name;
    public $legs;
    public $cold_blooded;

    // Constructor untuk menginisialisasi property name
    public function __construct($name) {
        $this->name = $name;
        $this->legs = 4; // default value
        $this->cold_blooded = "no"; // default value
    }

    // Method untuk mengambil nama
    public function get_name() {
        return $this->name;
    }

    // Method untuk mengambil jumlah kaki
    public function get_legs() {
        return $this->legs;
    }

    // Method untuk mengambil status cold-blooded
    public function get_cold_blooded() {
        return $this->cold_blooded;
    }
}

?>