<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
class CourseController extends Controller
{
    public function index()
    {
      $courses = Course::orderBy('created_at', 'DESC')->get();
      return view('course.list', ['courses' => $courses]);
    }
}
