@extends('layouts.mainlayout')

@section('title', 'Delete Category')

@section('content')
    <h2>Apakah Anda Yakin ingin menghapus Buku {{ $book -> title }} ?</h2>
    <div >
        <a href="/book-destroy/{{ $book -> slug }}" class="btn btn-danger me-2 mt-3">Yakin</a>
        <a href="/books" class="btn btn-info mt-3">Batal</a>
    </div>

    
@endsection
    
