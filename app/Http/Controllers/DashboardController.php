<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dash(){
        return view("layouts.layout-dash");
    }
    public function Department(){
        return view("dashboard.department");
    }
    public function clinic(){
        return view("dashboard.clinic");
    }
    public function Patient(){
        return view("dashboard.Patient");
    }
    public function message(){
        return view("dashboard.message");
    }
    public function staf(){
        return view("dashboard.staf");
    }
    public function account(){
        return view("dashboard.account");
    }
    public function pharmacy(){
        return view("dashboard.pharmacy");
    }
}
