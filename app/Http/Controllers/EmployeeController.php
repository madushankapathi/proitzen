<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;

class EmployeeController extends Controller
{
    public function stroe(Request $request){
        //dd('ok');
        $emp_no = $request->input('emp_no');
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $date_of_birth = $request->input('date_of_birth');
        $hire_date = $request->input('hire_date');
        $gender = $request->input('gender');

        $employee = new employee();
        $employee->emp_no = $emp_no;
        $employee->birth_date = $date_of_birth;
        $employee->first_name = $first_name;
        $employee->last_name = $last_name;
        $employee->gender = $gender;
        $employee->hire_date = $hire_date;

        $employee->save();

        return redirect('/')->with('success', 'Employee registered successfully!');
    }
    public function viewAll(Request $request){
        //dd('ok');
        $employee = employee::all();
        return view('All_view')->with('employee', $employee);
    }
}
