<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    // public function index(){
        
    //         return view('index',['name'=>'Good trick','role'=>'webdeveloper']);
        
    // }
//
public function contact(){
        
    return view('contact',
    ['name'=>'Good trick','role'=>'webdeveloper',
    'company'=>'Public Service','quote'=>'my attitude in my own way']);

}
public function display($view){
        
    if(view::exists($view)){
        echo $view. ":this view exists";
    }

    else{
        echo $view. ":this view does not exists!";
    }
    // return view('index',['name'=>'Good trick','role'=>'webdeveloper']);

}

public function employees(){
        
    return view('employees',
    [
    'employee1'=>['ruot kun','Web Developer','ABC company','my attitude in my own way'],
    'employee2'=>['kun rut','Web Developer','ABC company','my attitude in my own way'],
    'employee3'=>['dereje chalachew','Web Developer','ABC company','my attitude in my own way'],
]);

}

}
