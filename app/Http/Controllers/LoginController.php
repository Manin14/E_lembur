<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//pake auth
use Auth;

class LoginController extends Controller
{
    //belum jalan
    public function postlogin (Request $request){
      //dd($request->all()); 
      
      if (Auth::attempt($request->only('email','password'))){
          return redirect('HalamanDepan.beranda');
      }
     
    // $data = [
    //     'email' => session('email'),
    //     'password' => session('password'),
    // ];

    // if (Auth::attempt($data)){
    //            return redirect('/beranda');
    //        }
      return redirect('login');
    }

    //jalan
    public function logout (Request $request){
        Auth::logout();

        return redirect('/');
      }
}
