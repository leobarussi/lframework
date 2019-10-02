<?php
    namespace App\Requests;
    class AuthRequest{
        public function validate(){
            try{
                if(!isset($_POST['username']) || empty($_POST['username'])){
                    throw new \Exception('Informe seu usuário!');
                }else if(!isset($_POST['password']) || empty($_POST['password'])){
                    throw new \Exception('Informe a senha!');
                }

                return $_POST;
            }catch(\Exception $ex){
                throw new \Exception($ex->getMessage());
            }
        }
    }
?>