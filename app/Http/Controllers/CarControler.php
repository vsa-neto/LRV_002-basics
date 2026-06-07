<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarControler extends Controller
{
    public function index(){
        return view('car.index', [
            'company' => 'my company',
        ]);
    }
}
