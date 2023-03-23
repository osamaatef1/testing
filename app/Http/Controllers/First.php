<?php

namespace App\Http\Controllers;

class First extends Controller
{

public function getindex(){

    $data = [];
    $data['name']= 'osama';
    $data['age']= '22';

    $obj = new \stdClass();
    $obj -> name = 'ahmed';
    $obj -> id = 1;
    return view('welcome' , compact('obj'));

}
}
