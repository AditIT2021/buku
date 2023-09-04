@extends('layouts.mainlayout')

@section('title', 'Dashboard')

@section('content')

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-md-3">
        <h3 class="mb-5">Form Rental Buku</h3>

        <div class="mt-5">
            @if (session('message'))
                <div class="alert {{session('alert-class')}} ">
                    {{ session('message') }}
                </div>
            @endif
        </div>

        <form action="book-rent" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">User</label>
                <select name="user_id" id="user_id" class="form-control inputbox" >
                    <option value="">Pilih User</option>
                    @foreach ($users as $item)
                    <option value="{{$item -> id}}">{{$item -> username}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Book</label>
                <select name="book_id" id="book_id" class="form-control inputbox" >
                    <option value="">Pilih Buku</option>
                    @foreach ($books as $item)
                    <option value="{{$item -> id}}">{{$item -> title}}</option>
                    @endforeach
                </select>
            </div>

            <div >
                <button type="submit" class="btn btn-primary w-25">Submit</button>
            </div>

        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.inputbox').select2();
        });
    </script>


@endsection