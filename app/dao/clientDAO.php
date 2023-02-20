<?php
    require_once('baseDaoInterface.php');
    require_once('../config/database.php');
    require_once('../app/models/clientModel.php');
    class ClientDao implements BaseDaoInterface{
        private $db;

        public function find($id){
        }
        public function findAll(){
            $db = new Database();
            $mysqli  = $db->conexion();
            $sql = 'SELECT * FROM `client`';
            $res = $mysqli->query($sql);
            $clients = array();
            while ($row = $res->fetch_assoc()){
                $client = new ClientModel();
                $client->setIdClient($row['id_client']);
                $client->setFirstname($row['firstname']);
                $client->setLastname($row['lastname']);
                $client->setImg($row['img']);
                $client->setEmail($row['email']);
                $client->setPhone($row['phone']);
                array_push($clients, $client);
            }
            return $clients;
        }

        public function create(){
            
        }

        public function delete(){
            
        }

        public function update(){
            
        }
    }