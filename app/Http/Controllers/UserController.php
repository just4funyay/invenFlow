<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function dashboardMonitor(){
        return view('monitor.home');
    }

    public function dashboardInputter(){
        return view('inputter.home');
    }

    

}
