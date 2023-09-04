@extends('layouts.mainlayout')

@section('title', 'Ban User')

@section('content')
    <h2>Apakah Anda Yakin ingin Ban user {{ $user -> username }} ?</h2>
    <div >
        <a href="/user-destroy/{{ $user -> slug }}" class="btn btn-danger me-2 mt-3">Yakin</a>
        <a href="/users" class="btn btn-info mt-3">Batal</a>
    </div>

    
@endsection
    
