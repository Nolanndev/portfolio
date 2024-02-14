<?php

class Car {
    private $constructor;
    private $model;
    private $year;

    function __construct($constructor, $model, $year) {
        $this->constructor = $constructor;
        $this->model = $model;
        $this->year = $year;
    }

    public function getconstructor() { return $this->constructor; }
    public function getModel() { return $this->model; }
    public function getYear() { return $this->year; }

    function displayEssentials() {
        return "<p>$this->constructor $this->model $this->year</p>";
    }

    function displayDetails() {

    }
}

