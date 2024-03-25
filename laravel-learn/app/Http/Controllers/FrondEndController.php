<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrondEndController extends Controller
{
    Public function HomePage (){
    return view('welcome');

    }

Public function About (){
    return view('about');
}



public function Contactus (){
    return view('contact-us');
}





}
