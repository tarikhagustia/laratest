<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instructors;
class InstructorsController extends Controller
{
    public function index()
    {
        $instructors = Instructors::all();
        return view('instructors.list', ['instructors' => $instructors]);
    }
    public function tambah(Request $request)
    {
      $this->validate($request, [
          'name' => 'required',
          'gender' => 'required'
      ]);
      $students = new Instructors;
      $students->name = $request->name;
      $students->gender = $request->gender;
      $students->save();
      return redirect('/instructors');
    }
    public function edit_instructors($id)
    {
      $instructors = Instructors::where('id' , $id)->first();
      return view('instructors.edit' , ['instructors' => $instructors]);
    }
    public function edit_post(Request $request)
    {
      $this->validate($request, [
          'name' => 'required',
          'gender' => 'required'
      ]);
      $students = Instructors::find($request->id);

      $students->name = $request->name;
      $students->gender = $request->gender;
      $students->save();
      return redirect('/instructors');
    }
    public function delete_instructors($id)
    {
      $students = Instructors::find($id);
      $students->forceDelete();
      return redirect('/instructors');
    }
}
