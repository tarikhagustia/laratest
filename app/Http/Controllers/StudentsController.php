<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;
class StudentsController extends Controller
{
    public function index()
    {
      $students = Students::orderBy('created_at' , 'DESC')->get();
      return view('students/list' , ['students' => $students]);
    }
    public function tambah(Request $request)
    {
      $students = new Students;
      $students->name = $request->name;
      $students->email = $request->email;
      $students->password = bcrypt($request->password);
      $students->gender = $request->gender;
      $students->active = $request->active;
      $students->save();
      return redirect('/students');
    }
    public function edit_students($id)
    {

      $students = Students::where('id' , $id)->first();
      return view('students/edit' , ['students' => $students]);
    }
    public function edit_post(Request $request)
    {
      $students = Students::find($request->id);

      $students->name = $request->name;
      $students->email = $request->email;
      if ($request->password != null) {
        $students->password = bcrypt($request->password);
      }
      $students->gender = $request->gender;
      $students->active = $request->active;
      $students->save();
      return redirect('/students');
    }
}
