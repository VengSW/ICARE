<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AccountController extends Controller
{
    
    // update user's name
    public function updateName(Request $request){
        $request->validate([
            'name' =>'required|min:4|string|max:255'
        ]);
        $user = Auth::user();
        $user->name = $request['name'];
        $user->save();
        return back()->with('success','User name updated');
    }


    // delete user's account
    public function deleteAccount(){
        $user = Auth::user()->UserID;
        $data = User::find($user);
        $data->delete();
        return back()->with('success', 'Account deleted!');
    }

    // update user's profile picture
    public function updatePic(Request $req){
        $user = Auth::user(); 
        $picture = $req->file('picture');
        // dd($picture);
        $newpicture = time().'.'. $picture->getClientOriginalExtension();
        $picture->move(public_path('images/profile'), $newpicture);
        $user->update(['picture' => $newpicture]);

        
        return back()
            ->with('success','You have successfully update preofile picture!')
            ->with('picture',$newpicture);
    }
}
