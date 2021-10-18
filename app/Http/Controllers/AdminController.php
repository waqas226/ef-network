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
        $request->session()->put('username',$request->username);
        $request->session()->put('login','ok');
       return redirect('index');
    }else{
        
        $request->session()->flash('error', 'Wrong Credentails !!');
     return redirect('login');      
    }

}

public function users(){
    return view('users');
}
public function videos(){
    return view('videos');
}
public function articles(){
    return view('articles');
}
}
