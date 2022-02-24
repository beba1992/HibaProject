<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;


class StudentsController extends Controller
{
    public function getStudents(){
        $students = DB::select('select * from students');
        return view('students',['student'=>$students]);
        }
}
