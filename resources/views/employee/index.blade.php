

@extends('layouts.app')

<style type="text/css">
   .styled-table {
          border-collapse: collapse;
          /*margin: 25px 0;*/
          font-size: 0.9em;
          font-family: sans-serif;
          min-width: 400px;
          box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
          }
          .styled-table thead tr {
              background-color: #009879;
              color: #ffffff;
              text-align: left;
          }
          .styled-table th,
          .styled-table td {
              padding: 12px 15px;
          }

          .styled-table tbody tr {
              border-bottom: 1px solid #dddddd;
          }

          .styled-table tbody tr:nth-of-type(even) {
              background-color: #c7d4dd;
          }

          .styled-table tbody tr:last-of-type {
              border-bottom: 2px solid #009879;
          }

</style>
@section('content')
 <?php
  $name = isset($_GET['name'])?$_GET['name']:''; 
  $branch_id = isset($_GET['branch_id'])?$_GET['branch_id']:''; 
  ?>
<div class="container">
  <div>
    <p style="font-size: 20px">Search</p>
    <form action="{{route('employee.index')}}" method="get" accept-charset="utf-8" class="form-horizontal">
            <div class="row" class="col-md-9">
                        <div class="col-md-3">
                           
                            <input type="text" name="name" class="form-control" placeholder="Search..." value="{{ old('name',$name) }}">
                        </div>
                      
                
            </div><br>
            <div class="row">
                <div class="col-md-3">
                            
                           <select class="form-control" id="branch_id" name="branch_id">
                                <option value="">Select Branch</option>
                                @foreach($branchs as $branch)
                                <option value="{{$branch->id}}" {{ (old('branch_id',$branch_id)==$branch->id)?'selected':'' }}>{{$branch->name}}</option>
                                @endforeach
                            </select>
                </div>
               <div class="col-md-3">
                          
                  <select class="form-control" id="brand_id" name="brand_id">
                      <option value="">Select Department</option>
                     
                  </select>
                </div>

                 <div class="col-md-3">
                  
                    <select class="form-control" id="brand_id" name="brand_id">
                        <option value="">Select Position</option>
                       
                    </select>
                </div>
            </div>
        </form>
  </div><hr>
  <p style="font-size: 20px">Employee Management</p>
  <div style="margin-top: 32px;float: right;">
                    <a class="btn btn-success unicode" href="{{route('employee.create')}}"><i class="far fa-edit" /></i> Add New!</a>
  </div><br>
  <p style="padding-top: 35px">Total record: {{$count}}</p>
    <div class="table-responsive" style="font-size:15px;">
                <table class="table table-bordered styled-table">
                  <thead>
                    <tr> 
                      <th>No</th>
                        <th>Branch Name</th>
                        <th>Department Name</th>
                        <th>Position Name</th>
                        <th>Name</th>
                        <th>Phone No</th>
                        <th>Join Date</th>
                        <th>Photo</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                    <tbody>
              		 @foreach($employees as $employee)
                        <tr>
                            <td>{{++$i}}</td>
                            <td>{{$employee->viewBranch->name}}</td>
                            <td>{{$employee->viewDepartment->name}}</td>
                            <td>{{$employee->viewPosition->name}}</td>
                            <td>{{$employee->name}}</td>
                             <td>{{$employee->phone_no}}</td>
                            <td>{{date('d-m-Y',strtotime($employee->join_date))}}
                            </td>
                            <td>
                              <img src="{{ asset('uploads/employeePhoto/'.$employee->photo) }}" alt="photo" width="50px" height="35px">
                            </td>
                            <td>
                                <form action="{{route('employee.destroy',$employee->id)}}" method="post"
                                    onsubmit="return confirm('Do you want to delete?');">
                                   @csrf
                                   @method('DELETE')
                                    <a class="btn btn-sm btn-info" href="{{route('employee.show',$employee->id)}}"><i class="fa fa-fw fa-eye" /></i></a> 
                                    <a class="btn btn-sm btn-primary" href="{{route('employee.edit',$employee->id)}}"><i class="fa fa-fw fa-edit"></i></a>
                                    <button class="btn btn-sm btn-danger btn-sm" type="submit">
                                        <i class="fa fa-fw fa-trash" title="Delete"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        
			           @endforeach
                    </tbody>
           </table> 
           {!! $employees->appends(request()->input())->links() !!}
       </div>  
@endsection

@section('js')
<script> 
    $(document).ready(function(){
        setTimeout(function(){
        $("div.alert").remove();
        }, 1000 ); 
        $(function() {
            $('#name').on('change',function(e) {
            this.form.submit();
           // $( "#form_id" )[0].submit();   
            }); 

          
    });
     
    });
</script>
