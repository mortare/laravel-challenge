<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class Login_Controller extends Controller
{
    public function index()
    {
      return view('login.index');
    }
    public function enter(Request $req)
    {
      $data = $req->all();
      if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']])){
        return redirect()->route('admin.events');
      }
      return redirect()->route('login,index');
    }
    public function exit()
    {
      Auth::logout();
      return redirect()->route('login,index');
    }
}
