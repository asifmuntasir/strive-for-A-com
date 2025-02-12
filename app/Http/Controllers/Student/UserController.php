<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UserController extends Controller
{

    public function show_course(){

    }

    public function singup(Request $request)
    {

        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|same:password',
        ]);

        $user = new User();
        $user->name=$request->name;

        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->save();
        // $user = User::create([
        //     'name' => $request->name,
        //     'student_id' => $request->student_id,
        //     'class' => $request->class,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        // ]);

        // event(new Registered($user));

        // Auth::login($user);

        return redirect()->route('login');
    }
}
