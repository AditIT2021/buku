@extends('layouts.mainlayout')

@section('title', 'Delete Category')

@section('content')
    <h2>Apakah Anda Yakin ingin menghapus Categori {{ $category -> name }} ?</h2>
    <div >
        <a href="/category-destroy/{{ $category -> slug }}" class="btn btn-danger me-2 mt-3">Yakin</a>
        <a href="/categories" class="btn btn-info mt-3">Batal</a>
    </div>

    
@endsection
    
