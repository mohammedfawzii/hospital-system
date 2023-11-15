<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

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
    public function staff(){
        return view("dashboard.staff");
    }
    public function account(){
        return view("dashboard.account");
    }
    public function pharmacy(){
        return view("dashboard.pharmacy");
    }
}
