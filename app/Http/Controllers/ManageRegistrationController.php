<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ManageRegistrationController extends Controller
{
    function index()
    {
        return view('LoginPage');
    }

    public function updateName(Request $request){
        $request->validate([
            'name' =>'required|min:4|string|max:255'
        ]);
        $user = Auth::user();
        $user->name = $request['name'];
        $user->save();
        return back()->with('success','Profile Updated');
    }

    public function updatePic(Request $request){
        $user = Auth::user();
        $user->name = $request['picture'];
        $user->save();
        return back()->with('success','Profile Updated');
    }

    public function deleteAccount(){
        $user = Auth::user()->UserID;
        $data = User::find($user);
        $data->delete();
        return back()->with('success', 'Account deleted!');
    }
}
