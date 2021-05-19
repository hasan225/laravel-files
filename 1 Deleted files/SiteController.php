<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;






class SiteController extends Controller
{    
    function Home (){
        return view('HomePage');
    }
     
    function about(){
        return view ('AboutPage');
    }
    
    function Contact (){
        return view ('contactPage');
    }
}





  // routing with controller

// class SiteController extends Controller
// {
//     function Home(){
//            return "im form site controller home";
//     }

//     function About(){
//        return "im from about";
//     }

//     function Contact(){
//         return "im from contact method";
//     }
// };
