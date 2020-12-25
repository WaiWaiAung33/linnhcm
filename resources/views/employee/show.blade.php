@extends('layouts.app')
@section('content')

    <div class="row">
      <div class="col-md-11"></div>
      <div class="col-md-1">
      <a class="btn btn-primary unicode" href="{{route('employee.index')}}" style="margin-top: 15px;"> Back</a>
      </div>
    </div>
       <div class="row" style="padding-top: 15px">
               
        <label class="col-md-2 unicode">Branch Name</label>
        <div class="col-md-5 {{ $errors->first('name', 'has-error') }}">
            
            <input type="text" name="price" id="price" value="{{$employees->viewBranch->name}}" class="form-control unicode" readonly>
         
        </div>    
    </div><br>

    <div class="row">
               
        <label class="col-md-2 unicode">Department Name</label>
        <div class="col-md-5 {{ $errors->first('name', 'has-error') }}">
            
           <input type="text" name="price" id="price" value="{{$employees->viewDepartment->name}}" class="form-control unicode" readonly>
         
        </div>    
    </div><br>

    <div class="row">
               
        <label class="col-md-2 unicode">Position Name</label>
        <div class="col-md-5 {{ $errors->first('name', 'has-error') }}">
            
            <input type="text" name="price" id="price" value="{{$employees->viewPosition->name}}" class="form-control unicode" readonly>
         
        </div>    
    </div><br>

        <div class="row">
               
        <label class="col-md-2 unicode">Name</label>
        <div class="col-md-5 {{ $errors->first('name', 'has-error') }}">
            
            <input type="text" name="name" class="form-control unicode" value="{{$employees->name }}" readonly>
         
        </div>    
    </div><br>

    <div class="row">
               
        <label class="col-md-2 unicode">Father Name</label>
        <div class="col-md-5 {{ $errors->first('name', 'has-error') }}">
            
            <input type="text" name="father_name" class="form-control unicode" value="{{$employees->father_name}}" readonly>
         
        </div>    
    </div><br>

     <div class="row">
               
        <label class="col-md-2 unicode">Phone No</label>
        <div class="col-md-5 {{ $errors->first('name', 'has-error') }}">
            
            <input type="number" name="phone_no" class="form-control unicode" value="{{$employees->phone_no}}" readonly>
         
        </div>    
    </div><br>

     <div class="row">
               
        <label class="col-md-2 unicode">Nrc No</label>
        <div class="col-md-5 {{ $errors->first('name', 'has-error') }}">
            
            <input type="text" name="nrc" class="form-control unicode" value="{{$employees->nrc}}" readonly>
         
        </div>    
    </div><br>

    <div class="row">
               
        <label class="col-md-2 unicode">Date of Birth</label>
        <div class="col-md-5 {{ $errors->first('name', 'has-error') }}">
            
            <input type="text" name="date_of_birth" class="form-control unicode" value="{{$employees->date_of_birth}}" readonly>
         
        </div>    
    </div><br>

       <div class="row">
               
        <label class="col-md-2 unicode">Join Date</label>
        <div class="col-md-5 {{ $errors->first('name', 'has-error') }}">
            
            <input type="text" name="join_date" class="form-control unicode" value="{{$employees->join_date}}" readonly>
         
        </div>    
    </div><br>

     <div class="row">
               
        <label class="col-md-2 unicode">Address</label>
        <div class="col-md-5 {{ $errors->first('name', 'has-error') }}">
            
            <input type="text" name="address" class="form-control unicode" value="{{$employees->address}}" readonly>
         
        </div>    
    </div><br>

      <div class="row">
               
        <label class="col-md-2 unicode">Salary Amount</label>
        <div class="col-md-5 {{ $errors->first('name', 'has-error') }}">
            
            <input type="number" name="salary" class="form-control unicode" value="{{ $employees->salary}}" readonly>
         
        </div>    
    </div><br>

      <div class="row">
               
        <label class="col-md-2 unicode">Photo</label>
        <div class="col-md-5 {{ $errors->first('name', 'has-error') }}">
            
            <img src="{{asset('uploads/employeePhoto/'.$employees->photo)}}" alt="photo" width="80%" height="200px">
         
        </div>    
    </div><br>
     
@endsection