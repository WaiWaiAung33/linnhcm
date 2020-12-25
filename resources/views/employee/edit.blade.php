@extends('layouts.app')
@section('content')

 <form action="{{route('employee.update',$employees->id)}}" method="post" enctype="multipart/form-data" style="padding-top: 10px">
        @csrf
        @method('PUT')

       <div class="row">
               
        <label class="col-md-2 unicode">Branch Name</label>
        <div class="col-md-5 {{ $errors->first('name', 'has-error') }}">
            
           <select class="form-control" name="branch">
                <option value="">Select Branch</option>
               @foreach($branchs as $branch)
                 <option value="{{$branch->id}}" {{ (old('branch',$employees->branch_id)==$branch->id)?'selected':'' }}> {{$branch->name}}
                 </option>
               @endforeach
            </select>   
         
        </div>    
    </div><br>

    <div class="row">
               
        <label class="col-md-2 unicode">Department Name</label>
        <div class="col-md-5 {{ $errors->first('name', 'has-error') }}">
            
           <select class="form-control" name="department">
                <option value="">Select Department</option>
                 @foreach($departments as $department)
                 <option value="{{$department->id}}" {{ (old('department',$employees->dep_id)==$department->id)?'selected':'' }}>{{$department->name}}</option>
               @endforeach
            </select>   
         
        </div>    
    </div><br>

    <div class="row">
               
        <label class="col-md-2 unicode">Position Name</label>
        <div class="col-md-5 {{ $errors->first('name', 'has-error') }}">
            
            <select class="form-control" name="position" >
                <option value="">Select Position</option>
                 @foreach($positions as $position)
                 <option value="{{$position->id}}" {{ (old('position',$employees->position_id)==$position->id)?'selected':'' }}>{{$position->name}}</option>
               @endforeach
            </select>   
         
        </div>    
    </div><br>

        <div class="row">
               
        <label class="col-md-2 unicode">Name</label>
        <div class="col-md-5 {{ $errors->first('name', 'has-error') }}">
            
            <input type="text" name="name" class="form-control unicode" value="{{ old('name',$employees->name) }}">
         
        </div>    
    </div><br>

    <div class="row">
               
        <label class="col-md-2 unicode">Father Name</label>
        <div class="col-md-5 {{ $errors->first('name', 'has-error') }}">
            
            <input type="text" name="father_name" class="form-control unicode" value="{{ old('father_name',$employees->father_name) }}">
         
        </div>    
    </div><br>

     <div class="row">
               
        <label class="col-md-2 unicode">Phone No</label>
        <div class="col-md-5 {{ $errors->first('name', 'has-error') }}">
            
            <input type="number" name="phone_no" class="form-control unicode" value="{{ old('phone_no',$employees->phone_no) }}">
         
        </div>    
    </div><br>

     <div class="row">
               
        <label class="col-md-2 unicode">Nrc No</label>
        <div class="col-md-5 {{ $errors->first('name', 'has-error') }}">
            
            <input type="text" name="nrc" class="form-control unicode" value="{{ old('nrc',$employees->nrc) }}">
         
        </div>    
    </div><br>

    <div class="row">
               
        <label class="col-md-2 unicode">Date of Birth</label>
        <div class="col-md-5 {{ $errors->first('name', 'has-error') }}">
            
            <input type="date" name="date_of_birth" class="form-control unicode" value="{{ old('date_of_birth',$employees->date_of_birth) }}">
         
        </div>    
    </div><br>

       <div class="row">
               
        <label class="col-md-2 unicode">Join Date</label>
        <div class="col-md-5 {{ $errors->first('name', 'has-error') }}">
            
            <input type="date" name="join_date" class="form-control unicode" value="{{ old('join_date',$employees->join_date) }}">
         
        </div>    
    </div><br>

     <div class="row">
               
        <label class="col-md-2 unicode">Address</label>
        <div class="col-md-5 {{ $errors->first('name', 'has-error') }}">
            
            <input type="text" name="address" class="form-control unicode" value="{{ old('address',$employees->address) }}">
         
        </div>    
    </div><br>

      <div class="row">
               
        <label class="col-md-2 unicode">Salary Amount</label>
        <div class="col-md-5 {{ $errors->first('name', 'has-error') }}">
            
            <input type="number" name="salary" class="form-control unicode" value="{{ old('salary',$employees->salary) }}">
         
        </div>    
    </div><br>

      <div class="row">
               
        <label class="col-md-2 unicode">Photo</label>
        <div class="col-md-5 {{ $errors->first('name', 'has-error') }}">
            
            <input type="file" name="photo" class="form-control unicode" value="{{ old('photo',$employees->photo) }}">
         
        </div>    
    </div><br>
      <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <a class="btn btn-primary unicode" href="{{route('employee.index')}}"> Back</a>
                        <button type="submit" class="btn btn-success unicode">Save</button>
                    </div>
        </div>
    </form>
     @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
	@endif
@endsection