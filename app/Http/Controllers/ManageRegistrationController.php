<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

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

    public function store(Request $request){
        $user = Auth::user();
        $user->picture = $request['picture'];
        dd($user->picture);
        $user->save();
        return back()->with('success','Profile Updated');
    }

    public function deleteAccount(){
        $user = Auth::user()->UserID;
        $data = User::find($user);
        $data->delete();
        return back()->with('success', 'Account deleted!');
    }

    public function updatePic(Request $req){
        // $img = Auth::user()->picture; //default image
        $user = Auth::user(); 
        $picture = $req->file('picture');
        // dd($picture);
        $newpicture = time().'.'. $picture->getClientOriginalExtension();
        $picture->move(public_path('images/profile'), $newpicture);
        $user->update(['picture' => $newpicture]);

        
        return back()
            ->with('success','You have successfully upload image.')
            ->with('picture',$newpicture);
    }
}
