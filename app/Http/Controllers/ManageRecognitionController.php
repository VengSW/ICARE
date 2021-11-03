<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ManageRecognitionModel;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ManageRecognitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        $info = new ManageRecognitionModel;
        $info->recordID = $req->recordid;
        $info->UserID = $req->userid;
        $info->Date = $req->date;
        $info->Image = $req->image;
        $info->save();
        return view('home');
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
    public function viewRecognitionPage()//view main recognition page
    {
        $UserID = Auth::user()->UserID;//authentication
        $data = ManageRecognitionModel::where('UserID',$UserID)->get();
        return view('ManageRecognition.recognitionPage', compact("data"));
    }

    public function show(Request $req)//view record details page
    {
        $id = Auth::id();//get current user's id
        $data = DB::table('records')->select('recordID');//get value for records
        dd($data);
        return view('ManageRecognition.recordDetailsPage', compact("data"));
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
        //
    }
}
