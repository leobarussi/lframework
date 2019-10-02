<?php
    namespace Config;
    class Response{
        public static function response(){
            $instance = new static();
            return $instance;
        }

        public function success($message){
            echo json_encode(array('success' => $message));
        }

        public function error($message){
            echo json_encode(array('error' => $message));
        }
    }
?>