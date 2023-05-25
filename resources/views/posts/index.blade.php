@extends('layouts.dashboard')

@push('style')

    <link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

@endpush

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 py-4">Management</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
        <a href="{{route('posts.create')}}" class="btn btn-primary mb-3 px-4">
            <i class="fa fa-plus mr-2"></i>
            Buat Post
        </a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Slug</th>
                            <th>Body</th>
                            <th>Author</th> 
                            <th>Category</th> 
                            <th>Action</th> 
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp

                        @foreach($posts as $post)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->slug }}</td>
                                <td>{{ $post->body }}</td>
                                <td>{{ $post->user->name }}</td>
                                <td>{{ $post->category->name }}</td>
                                <td>
                                <div class="dropdown ">
                                        <i class="fa fa-ellipsis-v"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="/dashboard/posts/edit/{{ $post->id }}">
                                            <i class="fa fa-edit pr-2 text-primary"></i>Edit</a>
                                            <a class="dropdown-item" href="/dashboard/posts/delete/{{ $post->id }}"
                                            onclick="return confirm('apakah adna yakin? Data akan dihapus!')">
                                            <i class="fa fa-trash pr-2 text-danger"></i>Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    </div>
    <!-- /.container-fluid -->
@endsection

@push('script')

    <!-- Page level plugins -->
    <script src="/vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="/js/demo/datatables-demo.js"></script>

@endpush