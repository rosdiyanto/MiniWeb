<?php

class HomeController {
    protected $database;

    public function __construct($database) {
        $this->database = $database;
    }

    public function index() {
        // Aksi default saat mengakses domain
        echo "Welcome to the Home Page!";
    }
}
