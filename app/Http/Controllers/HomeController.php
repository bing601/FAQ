<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $questions = $user->questions()->paginate(6);
        return view('home')->with('questions', $questions);
    }

    /** Return view to upload file */
    public function uploadFile()
    {
        return view('uploadfile');
    }

    /** Example of File Upload */
    public function uploadFilePost(Request $request)
    {
        $request->validate([
            'fileToUpload' => 'required|file|max:1024',
        ]);
       // $file=$request->file('fileToUpload');
        //dd($file);
        $fileName = "fileName".time().'.'.request()->fileToUpload->getClientOriginalExtension();
        $request->file('fileToUpload')->storeAs('Uploadflies',$fileName);

        return back()
            ->with('success', 'You have successfully upload file.');

    }
}
