@extends('layouts.mainlayout')

@section('title', 'Dleted Category')

@section('content')
    <h3>Deleted Category List</h3>
    
    <div class="mt-3 d-flex justify-content-end">
        <a href="categories" class="btn btn-primary">Kembali</a>
    </div>

    <div class="my-5">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($deletedCategories as $item)
                <tr>
                    <td>{{ $loop -> iteration }}</td>
                    <td>{{ $item -> name }}</td>
                    <td>
                        <a href="category-restore/{{ $item -> slug }}">Restore</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
    
