<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;
use App\Models\Course;
use App\Models\Content;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function dashboard(){
        // $courses = Course::where('classroom_id','=',auth()->user()->classroom_id)
        // ->where('section_id','=',auth()->user()->section_id)->get();

        return view('student.dashboard');
    }

   
    public function file_download(Request $request,$file)
    {
        return response()->download(public_path('assets/',$file));
    }
}
