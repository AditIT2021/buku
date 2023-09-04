@extends('layouts.mainlayout')

@section('title', 'User')

@section('content')
    <h3>Detail users</h3>

    <div class="mt-5 d-flex justify-content-end">
        @if ($user-> status == 'inactive')
            <a href="/user-approve/{{ $user -> slug }}" class="btn btn-info me-3">Aproved User</a>
        @endif
    </div>

    <div class="my-3 w-25">
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
    </div>

    <div class="mt-5">
        <x-rent-log-table :rentlog='$rent_logs' />
    </div>

@endsection