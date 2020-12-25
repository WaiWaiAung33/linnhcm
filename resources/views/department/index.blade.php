

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
<div class="container">
   <p style="font-size: 20px">Department Management</p>
 <form action="{{route('department.store')}}" method="post" enctype="multipart/form-data" style="padding-top: 10px">
       @csrf
        <div class="row" style="padding-left: 8px">
            <div class="col-md-8">
               <input type="text" name="name" placeholder="Department Name" class="form-control"> 
            </div>
        </div>

        <div class="row" style="padding-left: 8px;padding-top: 10px">
              <div class="col-md-4">
                <label>In Time</label>
              </div>
              <div class="col-md-4">
                <label>Out Time</label>
              </div>
        </div>

        <div class="row" style="padding-left: 8px;padding-top: 5px">
            
              <div class="col-md-4">
               <input type="date" class="form-control unicode" placeholder="01-08-2020" name="in_time" id="in_time">
              </div>
  
              <div class="col-md-4">
               <input type="date" class="form-control unicode" placeholder="01-08-2020" name="out_time" id="out_time">
              </div>
            
            <button class="btn btn-success" type="submit">
                    <i class="fas fa-plus"> Department</i>
            </button>
        </div>     
      
    </form><hr>
     @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
     @endif
     <p style="padding-left: 10px">Total record:{{$count}}</p>
    <div class="table-responsive" style="font-size:15px">
                <table class="table table-bordered styled-table">
                  <thead>
                    <tr> 
                      <th>No</th>
                        <th>Department Name</th>
                        <th>In Time</th>
                        <th>Out Time</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                    <tbody>
              		@foreach($departments as $department)
                        <tr>
                            <td>{{++$i}}</td>
                            <td>{{$department->name}}</td>
                            <td>{{$department->in_time}}</td>
                            <td>{{$department->out_time}}</td>
                            <td>
                                <form action="{{route('department.destroy',$department->id)}}" method="post"
                                    onsubmit="return confirm('Do you want to delete?');">
                                    @csrf
                                    @method('DELETE')
                                    <a class="btn btn-sm btn-primary" href="{{route('department.edit',$department->id)}}"><i class="fa fa-fw fa-edit"></i></a>
                                    <button class="btn btn-sm btn-danger btn-sm" type="submit">
                                        <i class="fa fa-fw fa-trash" title="Delete"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        
			            @endforeach
                    </tbody>
           </table> 
             {!! $departments->appends(request()->input())->links() !!}
       </div>  
@endsection
