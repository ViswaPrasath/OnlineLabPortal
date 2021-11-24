@extends('layout.layout')
@section('body')
    <div class="card">
      {{-- <img class="card-img-top" src="{{env('ASSET_URL')}}collegeLogo.png" alt=""> --}}
      <div class="card-body">
        <h4 class="card-title">Update Student</h4>
        <form class="col-6" method="POST" action="{{url('student/update/'.$student->id)}}">
            <div class="form-group row">
                <label for="name" class="col-sm-1-12 col-form-label">Name</label>               
                <input type="text" class="form-control" name="name" id="name" placeholder="name" value="{{$student->name}}">
                @csrf
            </div>
            
            <div class="form-group row">
                <label for="roll_no" class="col-sm-1-12 col-form-label">Roll No</label>
                <input type="text" name="roll_no" id="roll_no" class="form-control" placeholder="roll_no" value="{{$student->roll_no}}">
            </div>

            <div class="form-group row">
                <label for="class" class="col-sm-1-12 col-form-label">Class</label>
                <input type="text" name="class" id="class" class="form-control" placeholder="class" value="{{$student->class}}">
            </div>
            
            <div class="form-group">
              <label for="paper_code">Paper Code</label>
              <select class="form-control" name="paper_code" id="paper_code">
                @foreach (App\Paper::all() as $item)
                    <option value="{{$item->code}}" @if ($item->code == $student->code)
                        selected
                    @endif>{{$item->name}}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
        @include('validation-errors')
      </div>
    </div>
@endsection