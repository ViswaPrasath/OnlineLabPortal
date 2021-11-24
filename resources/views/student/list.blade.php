@extends('layout.layout')
@section('body')
<ul class="nav nav-tabs">
    <img src="{{env('ASSET_URL')}}collegeLogo.png" height="60px" alt="logo">
    <li class="nav-item">
        <a href="{{url('/dashboard')}}" class="nav-link ">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="{{url('/student/list')}}">Student</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{url('/class/list')}}">Class</a>
    </li>
    <li class="nav-item">
        <a href="{{url('logout')}}" class="nav-link">Logout</a>
    </li>
</ul>

<div class="card">
    <div class="card-header row" style="justify-content: space-between;">
        <div class="col-6">
            Students List
            <a name="" id="" class="btn btn-primary" href="{{url('/student/add')}}" role="button">Add</a>
        </div>
        <form class="row" method="GET" action="{{url('/student/show')}}">
        <input type="text" class="col-6 form-control" name="search" id="search" aria-describedby="helpId" placeholder="Search">
        <button type="submit" class="btn btn-success">Search</button>
        </form>
    </div>
    <div class="card-body" style="overflow: scroll;">
        @include('validation-errors')

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Roll No</th>
                    <th>Class</th>
                    <th>Code</th>
                    <th>Manual</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr>
                    <td scope="row">{{$student->name}}</td>
                    <td>{{$student->roll_no}}</td>
                    <td>{{$student->class}}</td>
                    <td>{{$student->paper_code}}</td>
                    <td><a href="{{env('ASSET_URL').$student->pdf}}" target="_blank">View</a></td>
                    <td>
                        <button type="button" class="btn btn-outline-primary"><a href="{{url('/student/edit/'.$student->id)}}" style="text-decoration: none;color:black;">Update</a></button>
                        <button type="button" class="btn btn-outline-danger"><a href="{{url('/student/delete/'.$student->id)}}" style="text-decoration: none;color:black;">Delete</a></button>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    {{-- <div class="card-footer text-muted">
        Footer
    </div> --}}
</div>
@endsection