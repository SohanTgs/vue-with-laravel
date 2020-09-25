<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Name;

class MainController extends Controller
{
    public function index(){
    	return view('index');
    }

    public function save(Request $request){
 		$name = new Name();
 		$name->name = $request->name;
 		$name->save();
    }

}
