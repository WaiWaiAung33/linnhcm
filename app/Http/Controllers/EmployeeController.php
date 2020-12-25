<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use App\Branch;
use App\Department;
use App\Position;
use File;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $branchs = Branch::all();
        $departments = Department::all();
        $positions = Position::all();
        $employees = new Employee();
        if($request->name != '') {
        $employees = $employees->Where('name','like','%'.$request->name.'%');
        }
          if ($request->branch_id != '') {
            $employees = $employees->where('branch_id',$request->branch_id);
        }
        $count = $employees->get()->count();
        $employees = $employees->orderBy('created_at','desc')->paginate(10);
        return view('employee.index',compact('branchs','departments','positions','employees','count'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $branchs = Branch::all();
        $departments = Department::all();
        $positions= Position::all();
        return view('employee.create',compact('branchs','departments','positions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            
      $destinationPath = public_path() . '/uploads/employeePhoto/';
      $photo = "";
        //upload image
        if ($file = $request->file('photo')) {
            $extension = $file->getClientOriginalExtension();
            $safeName = str_random('10') . '.' . $extension;
            $file->move($destinationPath, $safeName);
            $photo = $safeName;
        }

         $employee=Employee::create([
            'branch_id'=>$request->branch,
            'dep_id'=>$request->department,
            'position_id'=>$request->position,
            'name'=> $request->name,
            'father_name'=>$request->father_name,
            'phone_no'=>$request->phone_no,
            'nrc'=>$request->nrc,
            'date_of_birth'=>$request->date_of_birth,
            'join_date'=>$request->join_date,
            'address'=>$request->address,
            'salary'=>$request->salary,
            'photo'=>$photo,
        ]
        );

          return redirect()->route('employee.index')->with('success','Employee created successfully');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $branchs = Branch::all();
        $departments = Department::all();
        $positions = Position::all();
        $employees = Employee::find($id);
        return view('employee.show',compact('branchs','departments','positions','employees'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $branchs = Branch::all();
        $departments =Department::all();
        $positions=Position::all();     
        $employees = Employee::find($id); 
         return view('employee.edit',compact('branchs','departments','positions','employees'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $employees=Employee::find($id);
        $employees=$employees->update($request->all());
         return redirect()->route('employee.index')->with('success','Employee updated successfully');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employee.index')
                        ->with('success','Employee deleted successfully');
    }
}
