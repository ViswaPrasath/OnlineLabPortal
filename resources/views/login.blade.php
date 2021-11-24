@extends('layout.layout')
@section('body')
<div class="container">
    {{-- <img src="" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt=""> --}}
    <form class="col-6" method="POST" action="{{url('doLogin')}}">
        <legend>Login</legend>
        <div class="form-group row">
            <label for="username" class="col-sm-1-12 col-form-label">Username</label>               
            <input type="text" class="form-control" name="username" id="username" placeholder="Username">
            @csrf
        </div>
        
        <div class="form-group row">
            <label for="password" class="col-sm-1-12 col-form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="password" aria-describedby="helpId">
        </div>
        
        <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
    @include('validation-errors')
   </div>
@endsection