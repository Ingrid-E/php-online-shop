<?php
    require_once('../app/models/viewModel.php');
    class ViewController extends ViewModel{
        public function get_template_contoller(){
            return require_once '../app/views/template.php';
        }

        public function get_views_controller(){
            if(isset($_GET['url'])){
                $route=explode("/", $_GET['url']);
                $response=ViewModel::get_views_model($route[0]);
            }else{
                $response="login";
            }
            return require_once $response;
        }

    }