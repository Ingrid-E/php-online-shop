<?php
    require_once('../app/dao/clientDao.php');
    class ClientController{
        private $clientDao;

        public function getAllClients(){
            $clientDao= new ClientDao();
            return $clientDao->findAll();
        }
    }