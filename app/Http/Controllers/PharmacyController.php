<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PharmacyController extends Controller
{
    public function  pharmaceutical(){
        return view('sections.pharmacy.pharmaceutical');
    }
    public function  invoice(){
        return view('sections.pharmacy.invoice');
    }
    public function  totalSales(){
        return view('sections.pharmacy.total-sales');
    }
    public function  shortfalls(){
        return view('sections.pharmacy.shortfalls');
    }
    public function  expired(){
        return view('sections.pharmacy.expired');
    }
    public function  note(){
        return view('sections.pharmacy.note');
    }
}
