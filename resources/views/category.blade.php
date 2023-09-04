@extends('layouts.mainlayout')

@section('title', 'Category')

@section('content')
    <h3>Category List</h3>

        <div class="col-lg-12">
            <div class="card">
            <div class="card-header d-flex justify-content-end">
                <a href="category-deleted" class="btn btn-secondary me-3">View Deleted Data</a>
                <a href="category-add" class="btn btn-primary">Tambah Data</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                        <table class="table table-responsive-md">
                        <thead>
                            <tr>
                                    <th><strong>NO.</strong></th>
                                    <th><strong>Nama</strong></th>
                                    <th><strong>Action</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $item)
                            <tr>
                                <td>{{ $loop -> iteration }}</td>
                                <td>{{ $item -> name }}</td>
                                <td>
                                <div class="d-flex">
                                        <a href="category-edit/{{ $item -> slug }}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="bi bi-pencil-square"></i></a>
                                        <a href="category-delete/{{ $item -> slug }}" class="btn btn-danger shadow btn-xs sharp"><i class="bi bi-trash"></i></a>
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



    {{-- <div class="mt-5 d-flex justify-content-end">
        <a href="category-deleted" class="btn btn-secondary me-3">View Deleted Data</a>
        <a href="category-add" class="btn btn-primary">Tambah Data</a>
    </div>

    <div class="my-3">
        <table class="table table-striped table-bordered ">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $item)
                <tr>
                    <td>{{ $loop -> iteration }}</td>
                    <td>{{ $item -> name }}</td>
                    <td>
                        <a href="category-edit/{{ $item -> slug }}"><i class="bi bi-pencil-square"></i></a>
                        |
                        <a href="category-delete/{{ $item -> slug }}"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div> --}}
@endsection
    
