<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index(){
        $title = "Vartech East Africa- Marketing Firm In Kenya | Digital Marketing";
        return view('front.index', compact('title'));
    }

    public function company(){
        $title = "About Skyline PR";
        return view('front.about', compact('title'));
    }


    
    public function contact_us(){
        $title = "Contact Us";
        return view('front.contact', compact('title'));
    }

    public function services($slung){
        
        $Service = DB::table('services')->where('slung',$slung)->get();
        foreach ($Service as $key => $value) {
            $title = $value->title;
            # code...
            return view('front.service', compact('Service','title'));
        }
    }


    public function location($slung){
        
        $Service = DB::table('portfolios')->where('slung',$slung)->get();
        foreach ($Service as $key => $value) {
            $title = $value->title;
            # code...
            return view('front.location', compact('Service','title'));
        }
    }

    
}
