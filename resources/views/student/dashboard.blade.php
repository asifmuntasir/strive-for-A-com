@extends('layouts.student.app')
@section('student_content')
    <!-- end page title -->
    <x-admin.page-title dashboard_title="Student" title="Student" page_name="Dashboard">
        {{-- <a href="#" class="btn btn-success" >Add message</a> --}}
    </x-admin.page-title>
    {{-- @foreach ($courses as $course)
    @if($course->classroom_id == auth()->user()->classroom_id && $course->section_id == auth()->user()->section_id)
    {{ $course->subjects->pluck('name')->implode(', ') }}
  @endif
    @endforeach --}}
    <div class="container-fluid">

        <div class="page-content-wrapper">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">

                        <div class="card-body">
                            <h3 class=" py-2">My class</h3>
                            <div class="row">

                                <div class="col-lg-4 col-lg-4 col-md-6 col-12">
                                    <div class="border p-4 my-2 rounded bg-light">
                                        <div class="media">
                                            <div class="media-body">
                                                <p class="text-muted mb-2">Digital signal</p>
                                                <h5 class="font-size-15 mb-3">James Alax</h5>

                                                <ul class="list-inline product-review-link mb-0">
                                                    <li class="list-inline-item">
                                                        <a href="#" class="btn btn-primary btn-sm text-white">Join
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>
                                            <p class="float-sm-right font-size-12">11:00 AM, 13 Feb</p>
                                        </div>


                                    </div>
                                </div>

                                <div class="col-lg-4 col-lg-4 col-md-6 col-12">
                                    <div class="border p-4 my-2 rounded bg-light">
                                        <div class="media">
                                            <div class="media-body">
                                                <p class="text-muted mb-2">Digital signal</p>
                                                <h5 class="font-size-15 mb-3">James Alax</h5>

                                                <ul class="list-inline product-review-link mb-0">
                                                    <li class="list-inline-item">
                                                        <a href="#" class="btn btn-primary btn-sm text-white">Join
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>
                                            <p class="float-sm-right font-size-12">02:30 AM, 21 Feb</p>
                                        </div>


                                    </div>
                                </div>

                                <div class="col-lg-4 col-lg-4 col-md-6 col-12">
                                    <div class="border p-4  rounded bg-light">
                                        <div class="media">
                                            <div class="media-body">
                                                <p class="text-muted mb-2">Netwarking</p>
                                                <h5 class="font-size-15 mb-3">Jeo max</h5>

                                                <ul class="list-inline product-review-link mb-0">
                                                    <li class="list-inline-item">
                                                        <a href="#" class="btn btn-primary btn-sm text-white">Join
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>
                                            <p class="float-sm-right font-size-12">10:00 AM, 11 Feb</p>
                                        </div>


                                    </div>
                                </div>

                            </div>


                

                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div> <!-- container-fluid -->

    </div>
    <!-- End Page-content -->
@endsection
