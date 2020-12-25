

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
  <div style="margin-top: 32px;float: right;">
                    <a class="btn btn-success unicode" href="{{route('salary.create')}}"><i class="far fa-edit" /></i> Add New!</a>
  </div><br>
    <div class="table-responsive" style="font-size:15px;padding-top: 20px">
                <table class="table table-bordered styled-table">
                  <thead>
                    <tr> 
                      <th>No</th>
                        <th>Employee Name</th>
                        <th>Basic Pay</th>
                        <th>Donate</th>
                        <th>Net Pay</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                    <tbody>
              		
                        <tr>
                            <td>1</td>
                            <td>d</td>
                            <td>d</td>
                            <td>d</td>
                            <td>d</td>
                            
                            <td>
                                <form action="#" method="post"
                                    onsubmit="return confirm('Do you want to delete?');">
                                  
                                    <a class="btn btn-sm btn-primary" href="#"><i class="fa fa-fw fa-edit"></i></a>
                                    <button class="btn btn-sm btn-danger btn-sm" type="submit">
                                        <i class="fa fa-fw fa-trash" title="Delete"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        
			         
                    </tbody>
           </table> 
       </div>  
@endsection
