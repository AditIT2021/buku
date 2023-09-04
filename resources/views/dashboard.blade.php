@extends('layouts.mainlayout')

@section('title', 'Dashboard')

@section('content')

<h3>Welcome, {{Auth::user()->username}}</h3>
    
    <div class="row my-5">
        <div class="col-lg-4">
            <div class="card-data a">
                <div class="row">
                    <div class="col-6"><i class="bi bi-journal-bookmark"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">Books</div>
                        <div class="card-count">{{$book_count}}</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card-data b">
                <div class="row">
                    <div class="col-6"><i class="bi bi-list-task"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">Categori</div>
                        <div class="card-count">{{$category_count}}</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card-data c">
                <div class="row">
                    <div class="col-6"><i class="bi bi-people"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">Users</div>
                        <div class="card-count">{{$user_count}}</div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mt-5">
            <div class="mt-5">
                <h3>#Daftar Penyewa</h3>
                <x-rent-log-table :rentlog='$rent_logs' />
            </div>
        </div>
        
    </div>

@endsection
    
