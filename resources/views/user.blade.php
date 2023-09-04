@extends('layouts.mainlayout')

@section('title', 'User')

@section('content')
   <h3>List users</h3>

      <div class="col-lg-12">
         <div class="card">
         <div class="card-header d-flex justify-content-end">
            <a href="users-baned" class="btn btn-secondary me-3">View Baned User</a>
            <a href="registered-users" class="btn btn-primary">New Registered Data</a>
         </div>
         <div class="card-body">
            <div class="table-responsive">
                     <table class="table table-responsive-md">
                     <thead>
                        <tr>
                                 <th><strong>NO.</strong></th>
                                 <th><strong>Nama</strong></th>
                                 <th><strong>No.Tlp</strong></th>
                                 <th><strong>Action</strong></th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach ($users as $item)
                        <tr>
                           <td>{{ $loop -> iteration }}</td>
                           <td>{{ $item -> username }}</td>
                           <td>{{ $item -> phone }}</td>
                           <td>
                           <div class="d-flex">
                                    <a href="user-detail/{{$item -> slug}}" class="btn btn-primary shadow btn-xs sharp me-1">Detail</a>
                                    <a href="user-ban/{{$item -> slug}}" class="btn btn-danger shadow btn-xs sharp">Ban User</a>
                           </div>
                           </td>
                        </tr>
                        @endforeach
                     </tbody>
                     </table>
            </div>
         </div>
         </div>
   </div>

   {{-- <div class="mt-5 d-flex justify-content-end">
      <a href="users-baned" class="btn btn-secondary me-3">View Baned User</a>
      <a href="registered-users" class="btn btn-primary">New Registered Data</a>
   </div>

   <div class="my-3">
         <table class="table table-striped table-bordered ">
            <thead>
               <tr>
                     <th>No.</th>
                     <th>Name</th>
                     <th>Phone</th>
                     <th>Action</th>
               </tr>
            </thead>
            <tbody>
               @foreach ($users as $item)
               <tr>
                     <td>{{ $loop -> iteration }}</td>
                     <td>{{ $item -> username }}</td>
                     <td>{{ $item -> phone }}</td>
                     <td>
                        <a href="user-detail/{{$item -> slug}}" class="btn btn-primary">Detail</i></a>
                        <a href="user-ban/{{$item -> slug}}" class="btn btn-danger">Ban User</i></a>
                     </td>
               </tr>
               @endforeach
            </tbody>
         </table>
   </div> --}}

@endsection