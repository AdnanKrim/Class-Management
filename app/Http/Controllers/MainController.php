<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Teacher;

class MainController extends Controller
{
    function index(){
        return view('loginT');
    }
  function check(Request $req)
  {
      $req->validate([
          'email'=> 'required|email',
          'password'=> 'required|min:5|max:12'
      ]);
      $user= Teacher::where('email','=',$req->email)->first();
      if($user){
          if(Hash::check($req->password,$user->password)){
              $req->session()->put('logged',$user->id);
              return redirect('profile');
          }
          else{
              return back()->with('Fail','Invalid password');
          }
      }
      else{
        return back()->with('Fail','email error');
      }
  }
  function profile(){
      return view('teacher');
    }
    function logout(){
        if(session()->has('logged')){
            session()->pull('logged');
            return redirect('user');
        }
    }
  
}
