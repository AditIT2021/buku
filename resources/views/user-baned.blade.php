@extends('layouts.mainlayout')

@section('title', 'Baned User')

@section('content')
    <h3>Baned Users List</h3>
    
    <div class="mt-3 d-flex justify-content-end">
        <a href="users" class="btn btn-primary">Kembali</a>
    </div>

    <div class="my-5">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Username</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($banedUsers as $item)
                <tr>
                    <td>{{ $loop -> iteration }}</td>
                    <td>{{ $item -> username }}</td>
                    <td>{{ $item -> phone }}</td>
                    
                    <td>
                        <a href="/user-restore/{{ $item -> slug }}" class="btn btn-success">Restore</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
    
