@extends('layouts.admin.app')

@section('admin_content')
    <x-admin.page-title dashboard_title="Admin" title="student" page_name="All student">
        {{-- <a href="{{ route('admin.user.create') }}" class="btn btn-success" id="addBtn">Add student</a> --}}
    </x-admin.page-title>


<div class="container-fluid">

    <div class="page-content-wrapper">

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="header-title">Student</h4>

                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>

                        <th>Action</th>
                    </tr>
                    </thead>


                    <tbody>
            @foreach ($users as $key=>$user)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $user->name }}</td>
                {{-- <td>{{ $question->type }}</td> --}}



                {{-- <td>{{ $question->created_at->format("M-h-D") }}</td> --}}
                <td>
                    <a href="{{ route('admin.user.edit',$user->id)  }}" class="btn btn-outline-success btn-sm" ><i class="fas fa-pencil-alt"></i></a>
                    <a href="{{ route('admin.user.destroy',$user->id)  }}" class="btn btn-outline-danger btn-sm" id="deleteBtn"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
            @endforeach


                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->


</div>
</div>




@endsection
