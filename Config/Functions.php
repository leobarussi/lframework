<?php
use Config\Route;
use Config\Redirect;
function route($route, $parameters = null){
    return Redirect::name($route);
}
