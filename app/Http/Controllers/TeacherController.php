<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function index()
    {   $teachers = Teacher::orderBy('id', 'desc')->get();
    	return view('teacher',compact('teachers'));
    }

    public function store(Request $request)
    {
       $request->validate([
          'name'  =>'required',
          'email' =>'required',
          'phone' =>'required|max:11',
          'address' =>'required',
       ],[
         
         'name.required' => 'Please input your name',
          'email.required' => 'Please input your email',
          'phone.required' => 'Please input your phone',
          'address.required' => 'Please input your address',
    
       ]);

       Teacher::insert([
          'name'  => $request->name,
          'email' => $request->email,
          'phone' => $request->phone,
          'address' => $request->address,  
       ]);

       return redirect()->back()->with('success', 'Your data hass been inserted suessfully!');
    }

    public function edit($id)
    {
    	$teachers = Teacher::findOrFail($id);
    	return view('edit', compact('teachers'));
    }

    public function update(Request $request,$id)
    {
     Teacher::findOrFail($id)->update([

          'name'  => $request->name,
          'email' => $request->email,
          'phone' => $request->phone,
          'address' => $request->address,  
     ]);
          
      return redirect()->to('/tercher-list')->with('update', 'Your data has been updated! suessfully!');
    }

    public function delete($id)
    {
    	Teacher::findOrFail($id)->delete();
    	return redirect()->back()->with('delete', 'Your data hass been inserted suessfully!');
    }

}
