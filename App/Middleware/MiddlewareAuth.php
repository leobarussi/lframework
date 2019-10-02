<?php
    namespace App\Middleware;
    use Config\Session;
    use Config\Redirect;
    class MiddlewareAuth{
        public function isLogged(){
            try{
                $session = Session::Get('codigo_pessoa');
                if(empty($session)){
                    Redirect::redirect()->route('login')->with('error', 'Você não esta logado!');
                }

                return true;
            }catch(\Exception $ex){
                Redirect::redirect()->route('login')->with('error', $ex->getMessage());
            }
        }
    }
?>