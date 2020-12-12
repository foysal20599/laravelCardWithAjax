<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
   public function index()
   {
   	return view('employee.employees');
   }

   public function allData()
   {
   	$data = Employee::orderBy('id', 'DESC')->get();
   	return response()->json($data);

   }
}
