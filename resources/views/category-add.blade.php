@extends('layouts.mainlayout')

@section('title', 'Add Category')

@section('content')
    
    <h3>Add New Category</h3>

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
        
        <form action="category-add" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Category Name">
            </div>

            <div class="mb-3">
                <button class="btn btn-success"> Save </button>
            </div>
        </form>
    </div>


    
@endsection
    
