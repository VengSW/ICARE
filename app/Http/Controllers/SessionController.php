<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

//Added
use Session;


class SessionController extends Controller
{
    //
    public function data(Request $request) {
        $id = $request->email; 
        $data = user::where('email', $id)->get();
        session(['key' => $data]);//email
        $value = session('key');

        if($request->session()->has('key'))
         echo $request->session()->get('key');
        else
         echo 'No data in the session';

        return view('about');
     }

     public function try(Request $req) {
        $UserID =Auth::user()->UserID;
        $data = User::where('UserID', $UserId)->get();
        session(['hey' => $data]);
        if (session()->has('hey')){
            echo'stored';
            dd($data);
        }
        else{
            echo'no';
        }
        return view('try');
     }

     public function try2($id) {

        $data2 = user::where('UserID', $id)->get();
        return view('about',compact("data2"));
     }

     public function try3(Request $req) {
        $session = User::all();
        dd($session);
        return view('try');
     }
}
