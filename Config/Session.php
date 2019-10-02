<?php
    namespace Config;
    use App\database\Oracle;
    class Session{
        public static function Set($param){
            try{
                if (session_status() == PHP_SESSION_NONE) {
                    session_start();
                }

                if(is_array($param)){
                    foreach($param as $name => $value){
                        $_SESSION[$name] = $value;
                    }
                }
            }catch(\Exception $ex){
                throw new \Exception($ex->getMessage());
            }
        }

        public static function Start(){
            try{
                if (session_status() == PHP_SESSION_NONE){
                    session_start();
                }
            }catch(\Exception $ex){
                throw new \Exception($ex->getMessage());
            }
        }

        public static function Get($sessionName){
            try{
                if (session_status() == PHP_SESSION_NONE){
                    session_start();
                }

                if(isset($_SESSION[$sessionName])){
                    return $_SESSION[$sessionName];
                }

            }catch(\Exception $ex){
                throw new \Exception($ex->getMessage());
            }
        }

        public static function GetAll(){
            try{
                if (session_status() == PHP_SESSION_NONE){
                    session_start();
                }

                return $_SESSION;
            }catch(\Exception $ex){
                throw new \Exception($ex->getMessage());
            }
        }

        public static function Remove($index){
            try{
                if (session_status() == PHP_SESSION_NONE){
                    session_start();
                }

                if(isset($_SESSION[$index])){
                    unset($_SESSION[$index]);
                }
            }catch(\Exception $ex){
                throw new \Exception($ex->getMessage());
            }
        }

        public static function setLog($modulo, $operacao, $historico, $codigoEmpresa = null, $codigoFilial = null, $usuario = null){
            try{
                $usuario = empty($usuario) ? Session::Get('nome_completo') : $usuario;
                $codigoEmpresa = empty($codigoEmpresa) ? Session::Get('codigo_empresa') : $codigoEmpresa;
                $codigoFilial = empty($codigoFilial) ? Session::Get('codigo_filial') : $codigoFilial;

                $seq = Oracle::sequence('SEQ_LOG')->nextval();
                $sql = "INSERT INTO LOG
                              (SEQUENCIA,
                               CODIGO_EMPRESA,
                               CODIGO_FILIAL,
                               USUARIO,
                               MODULO,
                               OPERACAO,
                               HISTORICO)
                            VALUES
                              (:SEQUENCE,
                               :CODIGO_EMPRESA,
                               :CODIGO_FILIAL,
                               :USUARIO,
                               :MODULO,
                               :OPERACAO,
                               :HISTORICO)";

                $params = array(':SEQUENCE' => $seq,
                                ':CODIGO_EMPRESA' => $codigoEmpresa,
                                ':CODIGO_FILIAL' => $codigoFilial,
                                ':USUARIO' => $usuario,
                                ':MODULO' => $modulo,
                                ':OPERACAO' => $operacao,
                                ':HISTORICO' => $historico);
                Oracle::insert($sql, $params);
            }catch(\Exception $ex){
                throw new \Exception($ex->getMessage());
            }
        }
    }
?>