<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paper;

class PaperController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    function add(Request $request)
    {
        return view('paper.add');
    }
    
    function store(Request $request)
    {
        $paper = new Paper();
        $paper['name'] = $request->input('name');
        $paper['code'] = $request->input('code');
        $paper->save();
        $response = [
            'message' => 'Paper Added !',
            'error'   =>  0
        ];
        return \redirect('/dashboard')->with($response);
    }

    function edit(Request $request,$id)
    {
         $paper  = Paper::where('id',$id)->first();

         return view('paper.edit')->with(['paper' => $paper]);
    }

    function update(Request $request,$id)
    {
           $paper = Paper::where('id',$id)->first();
           $paper['name'] = $request->input('name');
           $paper['code'] = $request->input('code');
           $paper->save();
           $response = [
            'message' => 'Paper Updated !',
            'error'   =>  0
        ];
           return \redirect('/dashboard')->with($response);
    }

    function delete(Request $request,$id)
    {
        $paper = Paper::where('id',$id)->first();
        $paper->delete();
        $response = [
            'message' => 'Paper Deleted!!',
            'error'   =>  0
        ];
           return \redirect('/dashboard')->with($response);
    }
}
