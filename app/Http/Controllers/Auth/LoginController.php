<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
use App\Models\admin;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function loginkey(Request $request)
    {
        $id = $request->UserID; 
        $data = User::where('UserID', $id)->get();
        session(['key' => $data]);
        $value = session('key');
        
        return view('try');
    }

    public function adminLogin(Request $request)
    {
        $id = $request->adminName; 
        $data = admin::all();
        $validatedName = $request->adminName;
        dd($id);
        $validatedPass = $request->adminPassword;
        foreach($data as $data2){
            $data3 = $data2->adminName; 
            $data4 = $data2->adminPassword;
        }
        $verify = password_verify($validatedPass,$data4);
        if($validatedName == $data3 && $verify){
            $validatedData = $request->validate([
                'adminName'   => 'required',
                'adminPassword' => 'required|min:8'
            ]);
            session_start();
            session(['key' => $data3]);
            $value = session('key');
            
            return view('/admin/adminHome', compact(['data']));
        }
        return redirect()->back()->with('message', 'The email and password does not match.');
    }
}
