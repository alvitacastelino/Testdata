<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EmployeeModel;
use DB;


class EmployeeController extends Controller
{

  public function employee()
  {
    $employee = EmployeeModel::orderby('username','asc')
    ->orderby('email','asc')
    ->paginate(10);
    $title = 'All Listings';
    return view('employee',compact('title','employee'));
      
  }


  public function employeedata_store(Request $request)
 {
     
      $centreaddarray = array(
      'username'=>$request->username,
      'email'=>$request->email,
      'phone'=>$request->phone,
      'gender'=>$request->gender,
       );

    $employee = EmployeeModel::create($centreaddarray);
     return redirect()->back()
    ->with('success','Data Inserted Successfully');
  }

  public function employee_edit($id)
  {
    $employee=EmployeeModel::find($id);
    return view('edit', compact('employee'));
  }


  public function employee_update(Request $request)
  {
        
       $id=$_POST['id'];
       $prop=EmployeeModel::find($id);
  
    
    
   $prop->username = $request->input('username');
   $prop->email = $request->input('email');
   $prop->phone = $request->input('phone');
    $prop->gender = $request->input('gender');
   

   $prop->save();
    return redirect()->route('employee')
    ->with('success','Data Updated Successfully');
  }



  public function employee_destroy($id)
  {
    $employee=EmployeeModel::find($id);
    $employee->delete();
    return redirect()->back()
    ->with('success','Data Deleted Successfully');

  }


  public function blogsstatus(Request $request)
    {
      $blogs = BlogsModel::find($request->id);
      $blogs->status = $request->status;
      $blogs->save();
    }
    
    
   


}
