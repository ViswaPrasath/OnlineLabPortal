@extends('layout.layout')
@section('body')
<ul class="nav nav-tabs">
    <img src="{{env('ASSET_URL')}}collegeLogo.png" height="60px" alt="logo">
    <li class="nav-item">
        <a href="{{url('/dashboard')}}" class="nav-link ">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{url('/student/list')}}">Student</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="{{url('/class/list')}}">Class</a>
    </li>
    <li class="nav-item">
        <a href="{{url('logout')}}" class="nav-link">Logout</a>
    </li>
</ul>

<div class="card">
    <div class="card-header">
        Class List
        <a name="" id="" class="btn btn-primary" href="{{url('/class/add')}}" role="button">Add</a>
    </div>
    <div class="card-body" style="overflow: scroll;">
        @include('validation-errors')
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach ($classes as $class)
                <tr>
                    <td scope="row">{{$i++}}</td>
                    <td>{{$class->name}}</td>
                    <td>
                        <button type="button" class="btn btn-outline-primary"><a href="{{url('/class/edit/'.$class->id)}}" style="text-decoration: none;color:black;">Update</a></button>
                        <button type="button" class="btn btn-outline-danger"><a href="{{url('/class/delete/'.$class->id)}}" style="text-decoration: none;color:black;">Delete</a></button>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection