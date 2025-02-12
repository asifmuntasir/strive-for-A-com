


@extends('layouts.teacher.app')

@section('teacher_content')
    <x-admin.page-title dashboard_title="Tutor" title="post" page_name="Create post">
        <a href="{{ route('teacher.post.index') }}" class="btn btn-success">posts</a>
    </x-admin.page-title>
    <div class="container-fluid">

        <div class="page-content-wrapper">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="header-title">Add post</h4>
                            <p class="card-title-desc"></p>

                            <form id="submi" action="{{ route('teacher.post.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">


                                    <x-admin.form-group label="title" placeholder="Enter post title" :value="$post->title ?? ''" column="col-lg-6"  required/>

    <x-admin.form-group label="category" :required="false" isType="select" class="select2" column="col-lg-6" required>
        <option value="">Select Category</option>
        {{-- <option value="{{ $category->classroom_id ?? '' }}">{{ $category->classroom->title ?? 'Select Class' }}</option> --}}
        @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->title }}</option>
        @endforeach
    </x-admin.form-group>
                                {{-- <x-admin.form-group label="description" :required="false" isType="textarea" class="form-control" id="elm1"></x-admin.form-group> --}}
                                <div><br/>
                                    <textarea  class="form-control your_summernote" name="description" rows="5" placeholder="Type here">

                                    </textarea>
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                                <x-admin.form-group
                                label="file"
                                type="file"
                                accept="" column="col-lg-6"

                            />
                                        {{-- <x-admin.form-group label="image" for="image" class="mb-3" :required="false" type="file"
                                        data-show-image="show_post_image" column="col-lg-6" /><br> --}}

                                </div><br>
                                        {{-- <x-admin.submit-button :text="isset($post) ? 'Update':'Submit'" /> --}}
                                      <button type="submit" class="btn btn-success">Submit</button>
                                        <a href="{{ route('teacher.post.index') }}" class="btn btn-secondary waves-effect">
                                            Cancel
                                        </a>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div>
    </div> <!-- container-fluid -->

@endsection
