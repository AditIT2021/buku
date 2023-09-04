@extends('layouts.mainlayout')

@section('title', 'User')

@section('content')
    <h3>Registered users</h3>

    <div class="mt-5 d-flex justify-content-end">
        <a href="users" class="btn btn-info me-3">Backr</a>
    </div>

    <div class="my-3">
            <table class="table table-striped table-bordered ">
                <thead>
                <tr>
                        <th>No.</th>
                        <th>Userame</th>
                        <th>Phone</th>
                        <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($registeredUsers as $item)
                        <tr>
                                <td>{{ $loop -> iteration }}</td>
                                <td>{{ $item -> username }}</td>
                                <td>{{ $item -> phone }}</td>
                                <td>
                                    <a href="user-detail/{{$item -> slug}}" class="btn btn-primary">Detail</a>
                                </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
    </div>

@endsection