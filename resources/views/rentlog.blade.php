@extends('layouts.mainlayout')

@section('title', 'Dashboard')

@section('content')
    <h1>ini renlog</h1>

        <div class="my-3">
            <x-rent-log-table :rentlog='$rent_logs' />
        </div>
@endsection
    
