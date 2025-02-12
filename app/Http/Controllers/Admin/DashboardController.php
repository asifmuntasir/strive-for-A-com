<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Teacher;


class DashboardController extends Controller
{
    public function index(){
        $student = User::all();
        $teacher = Teacher::all();

        return view('admin.dashboard',compact('student','teacher'));
    }
}
