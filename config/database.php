<?php

    class Database {
        private $server;
        private $db;
        private $user;
        private $pass;
        private $conexionURL;

        public function __construct(){
            $this->server="localhost";
            $this->db="family_shop";
            $this->user="admin";
            $this->pass="admin";
        }

        public function conexion(){
            $conn = new mysqli($this->server, $this->user, $this->pass, $this->db);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            return $conn;
        }
    }