<?php
    interface BaseDaoInterface{
        public function find($id);
        public function findAll();
        public function create();
        public function delete();
        public function update();
    }