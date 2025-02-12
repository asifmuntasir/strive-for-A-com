<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Notifications\AdminNotification;
use Illuminate\Support\Facades\Notification;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class HomeController extends Controller
{
    public function home()
    {
        $posts = Post::orderBy('id', 'desc')->get();;
        return view('welcome',compact('posts'));

    }

    public function singup(){
        return view('registration');
    }

   public function student_reg(Request $request)
   {
    $request->validate([
        'name' => 'required',
        'email' => 'required|unique:users',
        'password' =>'required|min:8',
        'password_confirmation' => 'same:password'
    ]);

    $store = new User();
    $store->name = $request->name;
    $store->email = $request->email;
    $store->password = bcrypt($request->password);
    $store->save();

    // $store->notify(new AdminNotification($store->name,$store->email,$request->password));
    return response()->json([
        'message' => 'Student added successfully'
    ]);
   }

}
