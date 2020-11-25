
@extends('layouts.app')
@section('content')
<p>Create USer</p>

<form action="{{route('users.store')}}" method="POST" >
        @csrf
			 <div class="row">
               
                <label class="col-md-2 unicode">Name</label>
                <div class="col-md-5">
                        
                <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control unicode">
                     
                 </div>    
               
            </div>
            <br>

            <div class="row">
               
                <label class="col-md-2 unicode">Email</label>
                <div class="col-md-5">
                        
                <input type="text" name="email" id="email" value="{{ old('email') }}" class="form-control unicode">
                     
                 </div>    
               
            </div>
            <br>

             <div class="row">
               
                <label class="col-md-2 unicode">Password</label>
                <div class="col-md-5">
                        
                <input type="text" name="password" id="password" value="{{ old('password') }}" class="form-control unicode">
                     
                 </div>    
               
            </div>
            <br>

            <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <a class="btn btn-primary unicode" href="#"> Back</a>
                        <button type="submit" class="btn btn-success unicode">Save</button>
                    </div>
            </div>
</form>

@endsection