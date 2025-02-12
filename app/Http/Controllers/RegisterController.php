<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
class RegisterController extends Controller
{
    public function index()
    {
        return view('teacher.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:admins',
            'password' =>'required|min:8|max:30',
            'password_confirmation' => 'same:password'
        ]);

        $store = new Teacher();
        $store->name = $request->name;
        $store->email = $request->email;
        $store->password = bcrypt($request->password);
        $store->save();
        return redirect()->route('teacher.login');
        // return response()->json([
        //     'message' => 'Post added successfully'
        // ]);
    }
}
