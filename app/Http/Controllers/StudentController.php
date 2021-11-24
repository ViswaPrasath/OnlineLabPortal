<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Student;

class StudentController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function list()
    {
         $student = DB::table('student')
                   ->select('student.id','student.name','class.name as class','roll_no','student.paper_code','student.pdf')
                   ->join('class','student.class','=','class.id')
                   ->get();
         return view('student.list')->with(['students' => $student]);

    }

    public function show(Request $request)
    {
        $student = Student::where('roll_no','like',$request->input('search')."%")->get();
        return view('student.list')->with(['students' => $student]);
    }

    public function add(Request $request)
    {
        return view('student/add');
    }
    
    public function store(Request $request)
    {
        $student = new Student();
        
        Student::create([
            'name' => $request->input('name'),
            'roll_no' => $request->input('roll_no'),
            'class' => $request->input('class'),
            'paper_code' => $request->input('paper_code'),
            'pdf' => $request->input('roll_no').'.pdf'
        ]);

        $response = [
            'message' => 'Student Added!!!',
            'error'   =>  0
        ];
        return \redirect('/student/list')->with($response);
    }

    public function edit(Request $request,$id)
    {
        $student = Student::where('id',$id)->first();
        return view('student.edit')->with(['student' => $student]);
    }

    public function update(Request $request,$id)
    {
        $student = Student::where('id',$id)->first();
        $student['name'] = $request->input('name');
        $student['roll_no'] = $request->input('roll_no');
        $student['class'] = $request->input('class');
        $student['paper_code'] = $request->input('paper_code');
        $student->save();

        $response = [
            'message' => 'Student Updated!!!',
            'error'   =>  0
        ];
        return \redirect('/student/list')->with($response);
    }

    function delete(Request $request,$id)
    {
        $paper = Student::where('id',$id)->first();
        $paper->delete();
        $response = [
            'message' => 'Student Deleted!!',
            'error'   =>  0
        ];
           return \redirect('/student/list')->with($response);
    }
}
