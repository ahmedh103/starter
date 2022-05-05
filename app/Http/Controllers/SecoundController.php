<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecoundController extends Controller
{
 public  function showString(){



return 'static String';




 }






 public function getIndex(){



    // $object = new \stdClass();
    
    
    // $object -> name ='ahmed';
    // $object -> id =5;
    // $object -> age=90;
    
    
    
    return view('welcome')-> with('name','ahmed hassan');
    
        }
}
