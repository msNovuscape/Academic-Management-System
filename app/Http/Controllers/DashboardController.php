<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public $title = 'Dashboard';

    public function index(){
        $title = $this->title;
        return view('dashboard',compact('title'));
    }
}
