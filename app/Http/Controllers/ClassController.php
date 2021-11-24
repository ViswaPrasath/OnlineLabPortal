<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes;

class ClassController extends Controller
{

    public function list(Request $request)
    {
         $classes  = Classes::all();

         return view('class.list')->with(['classes' => $classes]);
    }

    public function add(Request $request)
    {
       return view('class.add');
    }

    public function store(Request $request)
    {
        Classes::create([
            'name' => $request->input('name')
        ]);
        $response = [
            'message' => 'Class Added!!!',
            'error' => 0
        ];
        return \redirect('class/list')->with($response);
    }

    public function edit(Request $request,$id)
    {
        $class = Classes::where('id',$id)->first();
        return view('class.edit')->with(['class' => $class]);
    }

    public function update(Request $request,$id)
    {
        $class = Classes::where('id',$id)->first();
        $class['name'] = $request->input('name');
        $class->save();
        $response = [
            'message' => 'Class Update!!!',
            'error' => 0
        ];
        return \redirect('class/list')->with($response);
    }

    public function delete(Request $request,$id)
    {
        $class = Classes::where('id',$id)->first();
        $class->delete();
        $response = [
            'message' => 'Class Delete!!!',
            'error' => 0
        ];
        return \redirect('class/list')->with($response);
    }
}
