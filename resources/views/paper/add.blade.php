@extends('layout.layout')
@section('body')
    <div class="card">
      {{-- <img class="card-img-top" src="{{env('ASSET_URL')}}collegeLogo.png" alt=""> --}}
      <div class="card-body">
        <h4 class="card-title">Add Paper</h4>
        <form class="col-6" method="POST" action="{{url('paper/store')}}">
            <div class="form-group row">
                <label for="name" class="col-sm-1-12 col-form-label">Name</label>               
                <input type="text" class="form-control" name="name" id="name" placeholder="name">
                @csrf
            </div>
            
            <div class="form-group row">
                <label for="code" class="col-sm-1-12 col-form-label">code</label>
                <input type="text" name="code" id="code" class="form-control" placeholder="code" aria-describedby="helpId">
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