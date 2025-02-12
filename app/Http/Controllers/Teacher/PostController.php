<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;


use Yajra\DataTables\Facades\DataTables;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $posts = Post::all();
      $categories = Category::all();
        return view('teacher.post.index',compact('posts','categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Post $post)
    {

        $categories = Category::all();
        return view('teacher.post.form',compact('post','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);
        if($request->file==null){
            $file = null;
        }else{
            $file = file_upload($request->file, 'post');
        }
        $store = new Post();
        $store->category_id = $request->category;
        $store->teacher_id = auth()->user()->id;

        $store->title = $request->title;
        $store->description = $request->description;
        $store->image = $file;
        $store->save();
        return redirect()->route('teacher.post.index');
        // return response()->json([
        //     'message' => 'Post added successfully'
        // ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('teacher.post.edit',compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|max:150',

        ]);
        if($request->file==null){
            $file = null;
        }else{
            $file = file_upload($request->file, 'post');
        }
        $post->update([
                'category_id'=> $request->category,
                'title'=>$request->title,
                'description'=>$request->description,
                'image'=> $file,

        ]);
        return redirect()->route('teacher.post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return response()->json([
            'message'=>'Post deleted successfylly'
        ]);
    }
}
