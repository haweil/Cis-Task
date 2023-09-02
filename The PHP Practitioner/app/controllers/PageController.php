<?php

namespace App\controllers;
class PageController {

    public function home() {
     return view('index');
    }
    public function about() {
        $company ="Haweil";
        return view('about',['company'=>$company]);
    }

    public function contact() {
        return view('contact');
    }

}
