<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyProfileController extends Controller
{
    public function edit($id)
    {   
        $profile = (object)[
            "id" => $id,
            "name" => "James" ,
            "lastname" =>  "Mars",
            "email" => "james@vru.ac.th",
        ];
        $others = "hello world";
        return view("myprofile/edit" , compact('profile','others') );
    }

    public function show($id)
    {   
        $profile = (object)[
            "id" => $id,
            "name" => "James" ,
            "lastname" =>  "Mars",
            "email" => "james@vru.ac.th",
        ];
        $others = "hello world";
        return view("myprofile/show" , compact('profile','others') );
    }




    public function gallery()
    {
        $ant = "https://cdn3.movieweb.com/i/article/Oi0Q2edcVVhs4p1UivwyyseezFkHsq/1107:50/Ant-Man-3-Talks-Michael-Douglas-Update.jpg";
        $cat = "http://www.onyxtruth.com/wp-content/uploads/2017/06/black-panther-movie-onyx-truth.jpg";

        return view("test/index", compact("ant", "cat"));
    }

    public function ant()
    {
        $ant = "https://cdn3.movieweb.com/i/article/Oi0Q2edcVVhs4p1UivwyyseezFkHsq/1107:50/Ant-Man-3-Talks-Michael-Douglas-Update.jpg";

        return view("test/ant", compact("ant"));
    }
    
    public function cat()
    {
        $cat = "http://www.onyxtruth.com/wp-content/uploads/2017/06/black-panther-movie-onyx-truth.jpg";

        return view("test/cat", compact("cat"));
    }

    





}
