<?php
    namespace App\Controller;

    class ControllerHome{
        public function viewHome(){
            return view('home/home', 'app');
        }
    }
?>