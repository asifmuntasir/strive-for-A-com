
@extends('layouts.admin.app')

@section('admin_content')

<x-admin.page-title dashboard_title="Admin" title="Teacher" page_name="All teacher">
    <a href="{{ route('admin.teacher.create') }}" class="btn btn-success">Add tutor</a>
</x-admin.page-title>


<div class="container-fluid">

    <div class="page-content-wrapper">

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="header-title">Tutor</h4>

                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>

                        <th>Action</th>
                    </tr>
                    </thead>


                    <tbody>
            @foreach ($teachers as $key=>$teacher)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $teacher->name }}</td>
                <td>{{ $teacher->email }}</td>
                {{-- <td>{{ $question->type }}</td> --}}



                {{-- <td>{{ $question->created_at->format("M-h-D") }}</td> --}}
                <td>
                    <a href="{{ route('admin.teacher.edit',$teacher->id)  }}" class="btn btn-outline-success btn-sm" ><i class="fas fa-pencil-alt"></i></a>
                    <a href="{{ route('admin.teacher.destroy',$teacher->id)  }}" class="btn btn-outline-danger btn-sm" id="deleteBtn"><i class="fas fa-trash-alt"></i></a>
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

