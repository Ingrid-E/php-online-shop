<?php
    class ViewModel{
        protected static function get_views_model($view){
            $viewList=['register', 'login'];
            if(in_array($view, $viewList)){
                if(is_file('../app/views/contents/'.$view."View.php")){
                    $content = '../app/views/contents/'.$view."View.php";
                }else{
                    $content="404";
                }
            }elseif($view =="login" || $view =="index"){
                $content = "login";
            }else{
                $content="404";
            }
            return $content;
        }
    }