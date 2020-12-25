@extends('layouts.app')
@section('content')
<  <div class="container" style="margin-top: 50px; ">
        <form action="{{route('position.update',$positions->id)}}" method="POST" >
        @csrf
       @method('PUT')

       <div class="row">
               
        <label class="col-md-2 unicode">Position Name</label>
        <div class="col-md-5 {{ $errors->first('name', 'has-error') }}">
            
            <input type="text" name="name" id="name" value="{{$positions->name}}" class="form-control unicode">
         
        </div>    
    </div><br>

        <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <a class="btn btn-primary unicode" href="{{route('position.index')}}"> Back</a>
                        <button type="submit" class="btn btn-success unicode">Update</button>
                    </div>
            </div>

        </form>
    </div>
@endsection