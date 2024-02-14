<?php

require_once("../views/WebView.php");

class Router {
    public static function main() {
        $action = key_exists("action", $_GET) ? trim($_GET["action"]) : null;
        $view = new WebView();
        switch ($action) {
            case "catalog":
                echo "catalog";
                break;
            default:
                $view->prepareHomePage();
                break;
        }
        $view->render();
    }

    public static function test() {
        echo "ok";
    }

}