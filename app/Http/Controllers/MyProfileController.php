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

    // WK5
    public function coronavirus(){
        $reports = [
            (object) ["country"=>"China" , "date"=>"2020-04-19" , "total"=>"2765", "active"=>"790"  , "death"=>"47", "recovered"=>"1928"],
            (object) ["country"=>"South Korea" , "date"=>"2020-04-18" , "total"=>"2733", "active"=>"899"  , "death"=>"47", "recovered"=>"1787"],
            (object) ["country"=>"Thailand" , "date"=>"2020-04-17" , "total"=>"2700", "active"=>"964"  , "death"=>"47", "recovered"=>"1689"],
            (object) ["country"=>"Thailand" , "date"=>"2020-04-16" , "total"=>"2672", "active"=>"1033" , "death"=>"46", "recovered"=>"1593"],
            (object) ["country"=>"Thailand" , "date"=>"2020-04-15" , "total"=>"2643", "active"=>"1103" , "death"=>"43", "recovered"=>"1497"],
        ];
        return view("myprofile/coronavirus", compact("reports") );
    }







    

}
