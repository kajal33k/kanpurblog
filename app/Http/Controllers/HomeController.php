<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.index');
    }
    public function mainstories()
    {
        return view('front.mainstories');
    }
    public function weather()
    {
        return view('front.weather');
    }
    public function special()
    {
        return view('front.special');
    }
    public function kanpurcentral()
    {
        return view('front.kanpurcentral');
    }
    public function bithoor()
    {
        return view('front.bithoor');
    }
    public function iit()
    {
        return view('front.iit');
    }
    public function art()
    {
        return view('front.art');
    }
    public function temple()
    {
        return view('front.temple');
    }
    public function company()
    {
        return view('front.company');
    }
    public function rich()
    {
        return view('front.rich');
    }
    public function food()
    {
        return view('front.food');
    }
    public function manchester()
    {
        return view('front.manchester');
    }
    public function famous(){
        return view('front.famous');
        }
        public function college(){
            return view('front.college');
            }    
}
