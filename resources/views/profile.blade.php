@extends('layouts.mainlayout')

@section('title', 'Dashboard')

@section('content')

    <h3>Welcome, {{Auth::user()->username}}</h3>


    <h5 class="mt-5">Data Pinjaman Anda</h5>
    <div class="my-3">
        <x-rent-log-table :rentlog='$rent_logs' />
    </div>

    {{-- <div class="my-3 w-25">
        <div class="mb-3">
            <label for="" class="form-label">Username</label>
            <input type="text" class="form-control" readonly value="{{$user -> username}}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Phone</label>
            <input type="text" class="form-control" readonly value="{{$user -> phone}}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Status</label>
            <input type="text" class="form-control" readonly value="{{$user -> status}}">
        </div>
    </div> --}}
@endsection
    
