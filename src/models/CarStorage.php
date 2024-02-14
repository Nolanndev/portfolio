<?php

require("./Car.php");
require("./DBManager.php");

class CarStorage {
    public static function readAll() {
        $db = new DBManager();
        if ($db->connection() == null) {
            return null;
        }
        $result = $db->query("SELECT * FROM Cars");
        $db->close();
        $cars = array();
        if ($result != null) {
            foreach($result as $car) {
                $cars[] = new Car($car["constructor"], $car["model"], $car["year"]);
            }
        }
        return $cars;
    }

    public static function read($id) {

        // TODO sécuriser l'entrée de l'utilisateur pour éviter les injections
        $db = new DBManager();
        if ($db->connection() == null) {
            return null;
        }
        $result = $db->query("SELECT * FROM Cars where id=$id");
        $db->close();
        if ($result != null) {
            $result =  new Car($result["constructor"], $result["model"], $result["year"]);
        }
        return $result;
    }

    // public static function write($car) {
    //     $db = new DBManager();
    //     if ($db->connection() == null) {
    //         return null;
    //     }
    //     $result = $db->query("INSERT INTO");
    //     $cars = array();
    //     if ($result != null) {
    //         foreach($result as $car) {
    //             $cars[] = new Car($car["constructor"], $car["model"], $car["year"]);
    //         }
    //     }
    //     $db->close();
    //     return $cars;
    // }

}