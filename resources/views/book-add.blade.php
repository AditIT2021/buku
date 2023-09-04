@extends('layouts.mainlayout')

@section('title', 'Add Book')

@section('content')

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    
    <h3>Add New Book</h3>

    <div class="mt-5 w-75">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="book-add" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="book_code" class="form-label">Kode Buku</label>
                <input type="text" name="book_code" id="book_code" class="form-control" placeholder="Masukkan Kode Buku" value="{{ old('book_code')}}">
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Judul</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Masukkan Judul Buku" value="{{ old('title')}}">
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" name="image" id="cover" class="form-control" placeholder="Masukkan Cover Buku">
            </div>

            <div class="mb-3">
                <label for="category" class="form-label">Categori</label>
                <select name="categories[]" id="category" class="form-control select-multiple" multiple>
                    @foreach ($categories as $item)
                        <option value="{{ $item -> id}}">{{ $item -> name }}</option>
                    @endforeach
                    
                </select>
            </div>

            <div class="mb-3">
                <button class="btn btn-success"> Save </button>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.select-multiple').select2();
        });
    </script>
@endsection
    
