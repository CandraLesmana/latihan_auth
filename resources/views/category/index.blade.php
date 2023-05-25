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

            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_add_category">              	
                <i class="fa fa-plus"></i>
                Add Category
            </button> -->

            <button class="btn btn-primary mb-3" onclick="createPDF()" type="submit"><i class="fas fa-print mr-2"></i>Print</button>

            <a href="/dashboard/category/create" class="btn btn-primary mb-3">
            <i class="fa fa-plus mr-2"></i><b>Add Category</b></a>

            <div class="" id="box">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Post</th>
                                <th class="hiden">Action</th> 
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp

                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->slug }}</td>
                                    <td>{{ $category->posts->count() }}</td>
                                    <td class="hiden">
                                        <div class="dropdown">
                                            <i class="fa fa-ellipsis-v"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="/dashboard/category/edit/{{ $category->id }}">
                                                <i class="fa fa-edit pr-2 text-primary"></i>Edit</a>
                                                <a class="dropdown-item" href="/dashboard/category/delete/{{ $category->id }}"
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

    </div>

    @include('category.export')

@endsection

@push('script')

    <!-- Page level plugins -->
    <script src="/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/js/demo/datatables-demo.js"></script>

@endpush