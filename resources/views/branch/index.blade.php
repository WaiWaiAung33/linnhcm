

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
?>
<div class="container">
  <p style="font-size: 20px">Branch Management</p>
 <form action="{{route('branch.store')}}" method="post" enctype="multipart/form-data" style="padding-top: 10px">
        @csrf
        <div class="row" style="padding-left: 8px">
            <div class="col-md-8">
               <input type="text" name="name" placeholder="Branch Name" class="form-control" value="{{old('name',$name)}}"> 
            </div>
        </div>
        <div class="row" style="padding-left: 8px;padding-top: 10px">
        	  <div class="col-md-4">
                <input type="number" name="latitude" placeholder="Enter Latitude" class="form-control">
            </div>
            <div class="col-md-4">
                <input type="number" name="longitude" placeholder="Enter Longitude" class="form-control">
            </div>
                <button class="btn btn-success" type="submit">
                    <i class="fas fa-plus"> Branch</i>
                </button>
            </div>
        </div>
    </form><hr>
     @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
     @endif

     <div class="row">
      <div class="col-md-9">
      
       </div>
       <div class="col-md-3">                 
          <input type="text" name="" class="form-control" placeholder="Search...">
        </div>
     </div>
      <p style="padding-left: 10px">Total record:{{$count}}</p>
    <div class="table-responsive" style="font-size:15px">
                <table class="table table-bordered styled-table">
                  <thead>
                    <tr> 
                      <th>No</th>
                        <th>Branch Name</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                    <tbody>
              		 @foreach($branchs as $branch)

                        <tr>
                            <td>{{++$i}}</td>
                            <td>{{$branch->name}}</td>
                            <td>
                                <form action="{{route('branch.destroy',$branch->id)}}" method="post"
                                    onsubmit="return confirm('Do you want to delete?');">
                                   @csrf
                                   @method('DELETE')
                                    <a class="btn btn-sm btn-primary" href="{{route('branch.edit',$branch->id)}}"><i class="fa fa-fw fa-edit"></i></a>
                                    <button class="btn btn-sm btn-danger btn-sm" type="submit">
                                        <i class="fa fa-fw fa-trash" title="Delete"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                         @endforeach
			            
                    </tbody>
           </table> 
           {!! $branchs->appends(request()->input())->links() !!}
       </div>   
@endsection