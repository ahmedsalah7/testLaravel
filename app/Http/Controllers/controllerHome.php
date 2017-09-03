<?php

namespace App\Http\Controllers;




class controllerHome extends controller
{

    function home ($id = null){
        echo 'nice' . $id;
    }

    function loadView (){
        return   view('welcome');
    }
}
