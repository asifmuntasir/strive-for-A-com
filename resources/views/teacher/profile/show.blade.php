
@extends('layouts.teacher.app')

@section('teacher_content')
<x-admin.page-title dashboard_title="Tutor" title="Profile" page_name="My profile">
    <a href="{{ route('teacher.password.show') }}" class="btn btn-success">Edit Password</a>
</x-admin.page-title>
<div class="container-fluid">

    <div class="page-content-wrapper">
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="container">
                <div class="main-body">

                      <div class="row gutters-sm mt-4">
                        <div class="col-md-4 mb-3">
                          <div class="card">
                            <div class="card-body">
                              <div class="d-flex flex-column align-items-center text-center">
                                <img src="{{ uploaded_file(auth()->user()->image) }}" alt="" class="rounded-circle img-thumbnail" width="150" style="height:150px">
                                <div class="mt-3">
                                  <h4>  {{ auth()->user()->name }}</h4>
                                  <p class="text-secondary mb-1">  {{ auth()->user()->email }}</p>
                                  {{-- <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p> --}}

                                </div>
                              </div>
                            </div>
                          </div>

                        </div>
                        <div class="col-md-8">
                          <div class="card mb-3">
                            <div class="card-body">
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Full Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                  {{ auth()->user()->name }}
                                </div>
                              </div>
                              <hr>

                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Gender</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ auth()->user()->gender }}
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Phone</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ auth()->user()->phone }}
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Date of birth</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ auth()->user()->dob }}
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Address</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ auth()->user()->address }}
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-12">
                                  <a class="btn btn-info " href="{{route('teacher.profile.edit')}}" id="editBtn">Edit Profile</a>
                                </div>
                              </div>
                            </div>
                          </div>



        </div>
    </div>
    </div>
</div>
</div>
</div>
<!---Continer-fluied---->
@endsection
