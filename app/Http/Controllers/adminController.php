<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin; 
use App\Models\user; 
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class adminController extends Controller
{
    
    public function create(Request $req)
    {
        $info = new admin;
        $info->adminName = $req->adminName;
        $info->adminPassword = Hash::make($req->adminPassword);
        $info->save();
        return redirect()->back();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = user::select("*")->paginate(10);
        return view('/admin/adminHome', compact("data"));
    }

    public function adminLogin(Request $request)
    {
        $id = $request->adminName; 
        $data = admin::all();
        $validatedName = $request->adminName;
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function loginpage()
    {
        return view('admin/adminLogin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = $UserID;
        $data = user::find($UserID);//find record id
        $this->UserID = $data->UserID;//found record id

        $data->delete();
        $message = "Request is successful deleted.";
        echo "<script type='text/javascript'>alert('$message');</script>";
        
        return redirect()->back()->with('msj', 'Record is Deleted');
    }
}
