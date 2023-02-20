<?php
    require_once "../config/database.php";

    class ClientModel{
        private $id_client;
        private $firstname;
        private $lastname;
        private $pass;
        private $img;
        private $email;
        private $phone;

        public function __construct($properties = null){

        }

        public function getIdClient(){
            return $this->id_client;
        }
        public function getFirstname(){
            return $this->firstname;
        }
        public function getLastname(){
            return $this->lastname;
        }
        public function getImg(){
            return $this->img;
        }
        public function getEmail(){
            return $this->email;
        }
        public function getPhone(){
            return $this->phone;
        }
        
        public function setIdClient($id_client){
            $this->id_client=$id_client;
        }
        public function setFirstname($firstname){
            $this->firstname=$firstname;
        }
        public function setLastname($lastname){
            $this->lastname=$lastname;
        }
        public function setImg($img){
            $this->img=$img;
        }
        public function setEmail($email){
            $this->email=$email;
        }
        public function setPhone($phone){
            $this->phone=$phone;
        }
    }