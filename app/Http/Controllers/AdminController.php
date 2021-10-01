<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('index');
    }
   public function login(Request $request){
        $validated = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
    
    if($request->username=='admin' AND $request->password=='admin123'){
       return redirect('index');
    }else{
        echo 'not match';
    }

}
}
