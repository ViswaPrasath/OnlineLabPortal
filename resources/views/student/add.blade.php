@extends('layout.layout')
@section('body')
    <div class="card">
      {{-- <img class="card-img-top" src="{{env('ASSET_URL')}}collegeLogo.png" alt=""> --}}
      <div class="card-body">
        <h4 class="card-title">Add Student</h4>
        <form class="col-6" method="POST" action="{{url('student/store')}}">
            <div class="form-group row">
                <label for="name" class="col-sm-1-12 col-form-label">Name</label>               
                <input type="text" class="form-control" name="name" id="name" placeholder="name">
                @csrf
            </div>
            
            <div class="form-group row">
                <label for="roll_no" class="col-sm-1-12 col-form-label">Roll No</label>
                <input type="text" name="roll_no" id="roll_no" class="form-control" placeholder="roll_no" aria-describedby="helpId">
            </div>

            <div class="form-group">
              <label for="class">Class</label>
              <select class="form-control" name="class" id="class">
                @foreach (App\Classes::all() as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
              </select>
            </div>
            
            <div class="form-group">
              <label for="paper_code">Paper Code</label>
              <select class="form-control" name="paper_code" id="paper_code">
                @foreach (App\Paper::all() as $item)
                    <option value="{{$item->code}}">{{$item->name}}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </div>
        </form>
        @include('validation-errors')
      </div>
    </div>
@endsection