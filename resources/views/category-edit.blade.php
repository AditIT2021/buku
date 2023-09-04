@extends('layouts.mainlayout')

@section('title', 'Edit Category')

@section('content')
    
    <h3>Edit Category</h3>

    <div class="mt-5 ">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="/category-edit/{{ $category -> slug }}" method="POST">
            @csrf
            @method('put')
            {{-- <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $category -> name }}">
            </div> --}}

            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <div class="mb-3">
                    <label for="nim" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="name" value="{{ $category -> name }}">
                    </div>
                </div>

            <div class="mb-3">
                <button class="btn btn-success"> Update </button>
            </div>
        </div>
        </form>
    </div>


    
@endsection
    
