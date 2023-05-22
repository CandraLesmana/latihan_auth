@extends('layouts.dashboard')

@push('style')

    <link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

@endpush

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid w-50">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 py-4">Tambah Kategori</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">

            <form action="{{ route('category.create.store') }}" method="post">
            @csrf
                <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" required>
                </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="modal_add_category" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                    <button type="button" class="btn-close bg-transparent border-0" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
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