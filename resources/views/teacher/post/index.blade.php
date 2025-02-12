
@extends('layouts.teacher.app')

@section('teacher_content')

<x-admin.page-title dashboard_title="Tutor" title="post" page_name="All post">
    <a href="{{ route('teacher.post.create') }}" class="btn btn-success" id="">Add post</a>
</x-admin.page-title>

{{-- <x-admin.table title="post" :headers="['No', 'title', 'Action']" /> --}}

<div class="container-fluid">

    <div class="page-content-wrapper">

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="header-title">Post</h4>

                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>

                        <th>Action</th>
                    </tr>
                    </thead>


                    <tbody>
            @foreach ($posts as $key=>$post)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $post->title }}</td>
                {{-- <td>{{ $question->type }}</td> --}}



                {{-- <td>{{ $question->created_at->format("M-h-D") }}</td> --}}
                <td>
                    <a href="{{ route('teacher.post.edit',$post->id)  }}" class="btn btn-outline-success btn-sm" ><i class="fas fa-pencil-alt"></i></a>
                    <a href="{{ route('teacher.post.destroy',$post->id)  }}" class="btn btn-outline-danger btn-sm" id="deleteBtn"><i class="fas fa-trash-alt"></i></a>
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

{{-- @push('js')
    <script>
        var table = $('#datatable').DataTable({
            ajax: '{!! route('teacher.post.index') !!}',
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'id',
                    searchable: false
                },
                {
                    data: 'title',
                    name: 'title'
                },


                {
                    data: 'action',
                    name: 'action',
                    searchable: false,
                    render: function(data, type, row) {
                        return `
                        <a href="${route('teacher.post.show',row.id) }" class="btn btn-outline-success btn-sm" id="editBtn"><i class="fas fa-eye"></i></a>
                    <a href="${route('teacher.post.edit',row.id) }" class="btn btn-outline-secondary btn-sm" id=""><i class="fas fa-pencil-alt"></i></a>
                    <a href="${route('teacher.post.destroy',row.id) }" class="btn btn-outline-danger btn-sm" id="deleteBtn"><i class="fas fa-trash-alt"></i></a>
                    `;

                    }
                },
            ]
        });
    </script>
@endpush --}}
