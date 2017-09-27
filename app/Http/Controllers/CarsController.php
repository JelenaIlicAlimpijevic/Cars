<?php

namespace App\Http\Controllers;

use App\Cars;

use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function index(){
    	$cars=Cars::all();
    	return view('cars',compact('cars'));
    }

    public function show($id){
    	$car=Cars::find($id);
    	return view('single-car',compact('car'));
    }
}
