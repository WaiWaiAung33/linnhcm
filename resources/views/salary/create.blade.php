@extends('layouts.app')
@section('content')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Scripts -->
<script src="{{ asset('js/components/pizza.js')}}">
   $(document).ready(function(){
        $('#basic_pay').change(function(e){
          alert("Hello");
        });
    });
</script>
 <form action="#" method="post" enctype="multipart/form-data" style="padding-top: 10px">
        
       <div class="row">
               
        <label class="col-md-2 unicode">Employee Name</label>
        <div class="col-md-5 {{ $errors->first('name', 'has-error') }}">
            
           <select class="form-control" name="employee">
                <option value="">Select Employee</option>
              
                @foreach ($employees as $employee )
                  <option  value="{{$employee->id}}">{{$employee->name}}</option>
                @endforeach
                
            </select>   
         
        </div>    
    </div><br>

        <div class="row">
               
        <label class="col-md-2 unicode">Basic Pay</label>
        <div class="col-md-5 {{ $errors->first('name', 'has-error') }}">
            
            <input type="text" name="basic_pay" class="form-control unicode" id="basic_pay">
         
        </div>    
    </div><br>

    <div class="row">
               
        <label class="col-md-2 unicode">Performance Allow</label>
        <div class="col-md-5 {{ $errors->first('name', 'has-error') }}">
            
            <input type="text" name="per_allow" class="form-control unicode" id="per_allow">
         
        </div>    
    </div><br>

     <div class="row">
               
        <label class="col-md-2 unicode">OT</label>
        <div class="col-md-5 {{ $errors->first('name', 'has-error') }}">
            
            <input type="number" name="ot" class="form-control unicode" id="ot">
         
        </div>    
    </div><br>

     <div class="row">
               
        <label class="col-md-2 unicode">Bonus</label>
        <div class="col-md-5 {{ $errors->first('name', 'has-error') }}">
            
            <input type="text" name="bonus" class="form-control unicode" id="bonus">
         
        </div>    
    </div><br>

    <div class="row">
               
        <label class="col-md-2 unicode">Absence</label>
        <div class="col-md-5 {{ $errors->first('name', 'has-error') }}">
            
            <input type="number" name="absence" class="form-control unicode" id="absence">
         
        </div>    
    </div><br>

       <div class="row">
               
        <label class="col-md-2 unicode">Donate</label>
        <div class="col-md-5 {{ $errors->first('name', 'has-error') }}">
            
            <input type="number" name="donate" class="form-control unicode" id="donate">
         
        </div>    
    </div><br>

     <div class="row">
               
        <label class="col-md-2 unicode">Net Pay</label>
        <div class="col-md-5 {{ $errors->first('name', 'has-error') }}">
            
            <input type="text" name="net_pay" class="form-control unicode">
         
        </div>    
    </div><br>

      
      <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <a class="btn btn-primary unicode" href="{{route('salary.index')}}"> Back</a>
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

