

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
 <form action="{{route('position.store')}}" method="post" enctype="multipart/form-data" style="padding-top: 10px">
        @csrf
        <div class="row" style="padding-left: 8px">
            <div class="col-md-6">
               <input type="text" name="name" placeholder="Position Name" class="form-control" value="{{old('name',$name)}}"> 
            </div>
            <button class="btn btn-success" type="submit">
                    <i class="fas fa-plus"> Position</i>
                </button>
        </div>
       
                
            
        </div>
    </form>
     @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
     @endif
    <div class="table-responsive" style="font-size:15px">
                <table class="table table-bordered styled-table">
                  <thead>
                    <tr> 
                      <th>No</th>
                        <th>Position Name</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                    <tbody>
              		 @foreach($positions as $position)
                        <tr>
                            <td>{{++$i}}</td>
                            <td>{{$position->name}}</td>
                            <td>
                                <form action="{{route('position.destroy',$position->id)}}" method="post"
                                    onsubmit="return confirm('Do you want to delete?');">
                                   @csrf
                                   @method('DELETE')
                                    <a class="btn btn-sm btn-primary" href="{{route('position.edit',$position->id)}}"><i class="fa fa-fw fa-edit"></i></a>
                                    <button class="btn btn-sm btn-danger btn-sm" type="submit">
                                        <i class="fa fa-fw fa-trash" title="Delete"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                         @endforeach
			            
                    </tbody>
           </table> 
       </div>   
@endsection