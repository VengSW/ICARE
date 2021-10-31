<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ManageRecognitionModel;
use App\Models\User;

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
        return view('ManageRecognition.recognitionPage');
    }
       
    //VIEW ALL RECORDS
    public function viewRecognitionPage($id){ 
        $data = User::where('UserID',$id)->get();
        return view('ManageRecognition.recognitionPage', compact("data"));
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
        $data = ManageRecognitionModel::where('UserID',$id)->get();
        return view('ManageRecognition.recognitionPage', compact("data"));
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
