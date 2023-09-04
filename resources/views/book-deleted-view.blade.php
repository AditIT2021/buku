@extends('layouts.mainlayout')

@section('title', 'Dleted Category')

@section('content')
    <h3>Deleted Category List</h3>
    
    <div class="mt-3 d-flex justify-content-end">
        <a href="books" class="btn btn-primary">Kembali</a>
    </div>

    <div class="my-5">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Kode Buku</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($deletedBooks as $item)
                <tr>
                    <td>{{ $loop -> iteration }}</td>
                    <td>{{ $item -> book_code }}</td>
                    <td>{{ $item -> title }}</td>
                    <td>
                        @foreach ($item->categories as $category)
                            {{ $category -> name }} ,
                        @endforeach   
                    </td>
                    <td>
                        <a href="/book-restore/{{ $item -> slug }}">Restore</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
    
