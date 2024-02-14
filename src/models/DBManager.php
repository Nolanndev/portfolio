<?php

class DBManager {
    private $conn;

    public function __construct() {
        $this->conn = null;
    }

    function connection() {
        $db_server = null;
        $db_user = null;
        $db_psswd = null;
        $db_name = null;
        $db_port = null;
        $env = parse_ini_file("/private/Protected/MySQL/.env");

        if (key_exists("DB_SERVER", $env)) {
            $db_server = $env["DB_SERVER"];
        }
        if (key_exists("DB_USER", $env)) {
            $db_user = $env["DB_USER"];
        }
        if (key_exists("DB_PSSWD", $env)) {
            $db_psswd = $env["DB_PSSWD"];
        }
        if (key_exists("DB_NAME", $env)) {
            $db_name = $env["DB_NAME"];
        }
        if (key_exists("DB_PORT", $env)) {
            $db_port = $env["DB_PORT"];
        }

        if ($db_server == null || $db_user == null || $db_psswd == null || $db_name == null || $db_port == null) {
            return null;
        }

        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $this->conn = mysqli_connect($db_server, $db_user, $db_psswd, $db_name, $db_port);
        if ($this->conn->connect_error) {
            return null;
        }
        return $this->conn;
    }

    function query($query) {
        if ($this->conn == null) {
            return null;
        }
        return $this->conn->query($query);
    }

    function close() {
        if ($this->conn != null) {
            mysqli_close($this->conn);
        }
    }
    
}
