@extends('layout.layout')
@section('body')
 <ul class="nav nav-tabs">
     <img src="{{env('ASSET_URL')}}collegeLogo.png" height="60px" alt="logo">
     <li class="nav-item">
         <a href="#" class="nav-link active">Home</a>
     </li>
     <li class="nav-item">
        <a class="nav-link" href="{{url('/student/list')}}">Student</a>
    </li>
     <li class="nav-item">
         <a href="#" class="nav-link">Another link</a>
     </li>
     <li class="nav-item">
         <a href="#" class="nav-link disabled">Disabled</a>
     </li>
 </ul>
 <div style="display: flex;justify-content: space-between;">
     <h2>Papers</h2>
     <button class="btn">
        <a href="{{url('/paper/add')}}" class="badge badge-primary"> +  Add </a>
     </button>
 </div>
 <?php $i = 1?>
 @include('validation-errors')

 <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Code</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($papers as $paper)
      <tr>
        <th scope="row">{{$i++}} </th>
            
        <td>{{ $paper->name }} </td>
        <td>{{$paper->code }}</td>
        <td>
            <button type="button" class="btn btn-outline-primary"><a href="{{url('/paper/edit/'.$paper->id)}}" style="text-decoration: none;color:black;">Update</a></button>
            <button type="button" class="btn btn-outline-danger"><a href="{{url('/paper/delete/'.$paper->id)}}" style="text-decoration: none;color:black;">Delete</a></button>
        </td>
    </tr>
    @endforeach
    </tbody>
  </table>
@endsection