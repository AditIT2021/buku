@extends('layouts.mainlayout')

@section('title', 'Dashboard')

@section('content')
   
   <h3>Daftar Buku</h3>

   {{-- <div class="my-3 p-3 bg-body rounded shadow-sm">
      <div class="pb-3 d-flex justify-content-end">
         <a href="book-deleted" class="btn btn-secondary me-3">View Deleted Data</a>
         <a href="book-add" class="btn btn-primary">Tambah Data</a>
      </div>
      <table class="table table-striped">
         <thead>
               <tr>
                  <th>No.</th>
                  <th>Kode Buku</th>
                  <th>Judul</th>
                  <th>Kategori</th>
                  <th>Status</th>
                  <th>Action</th>
               </tr>
         </thead>
         <tbody>
            @foreach ($books as $item)
               <tr>
                  <td>{{ $loop -> iteration }}</td>
                  <td>{{ $item -> book_code }}</td>
                  <td>{{ $item -> title }}</td>
                  <td>
                     @foreach ($item->categories as $category)
                        {{ $category -> name }} ,
                     @endforeach   
                  </td>
                  <td>{{ $item -> status }}</td>
                  <td>
                     <a href="/book-edit/{{ $item -> slug }}" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                     <a href="/book-delete/{{ $item -> slug }}" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                  </td>
               </tr>
            @endforeach
         </tbody>
      </table>
</div> --}}


   <div class="col-lg-12">
      <div class="card">
         <div class="card-header d-flex justify-content-end">
               <a href="book-deleted" class="btn btn-secondary me-3">View Deleted Data</a>
               <a href="book-add" class="btn btn-primary">Tambah Data</a>
         </div>
         <div class="card-body">
            <div class="table-responsive">
                  <table class="table table-responsive-md">
                     <thead>
                        <tr>
                              <th><strong>NO.</strong></th>
                              <th><strong>KODE BUKU</strong></th>
                              <th><strong>JUDUL BUKU</strong></th>
                              <th><strong>KATEGORI</strong></th>
                              <th><strong>Status</strong></th>
                              <th><strong>Action</strong></th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach ($books as $item)
                        <tr>
                              <td>{{ $loop -> iteration }}</td>
                              <td>{{ $item -> book_code }}</td>
                              <td>{{ $item -> title }}</td>
                              <td>
                                 @foreach ($item->categories as $category)
                                    {{ $category -> name }} ,
                                 @endforeach   
                              </td>
                              <td><div class="d-flex align-items-center"><i class=" {{ $item -> status == 'in stock' ? 'bi bi-circle-fill text-success' : ' bi bi-circle-fill text-danger'}}"></i> &nbsp;  {{  $item ->  status }} </div></td>
                              <td>
                                 <div class="d-flex">
                                    <a href="/book-edit/{{ $item -> slug }}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="bi bi-pencil-square"></i></a>
                                    <a href="/book-delete/{{ $item -> slug }}" class="btn btn-danger shadow btn-xs sharp"><i class="bi bi-trash"></i></a>
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
      <a href="book-deleted" class="btn btn-secondary me-3">View Deleted Data</a>
      <a href="book-add" class="btn btn-primary">Tambah Data</a>
   </div>

   <div class="my-3">
         <table class="table table-striped table-bordered ">
            <thead>
               <tr>
                     <th>No.</th>
                     <th>Kode Buku</th>
                     <th>Judul</th>
                     <th>Kategori</th>
                     <th>Status</th>
                     <th>Action</th>
               </tr>
            </thead>
            <tbody>
               @foreach ($books as $item)
               <tr>
                     <td>{{ $loop -> iteration }}</td>
                     <td>{{ $item -> book_code }}</td>
                     <td>{{ $item -> title }}</td>
                     <td>
                        @foreach ($item->categories as $category)
                           {{ $category -> name }} ,
                        @endforeach   
                     </td>
                     <td>{{ $item -> status }}</td>
                     <td>
                        <a href="/book-edit/{{ $item -> slug }}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                        <a href="/book-delete/{{ $item -> slug }}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                     </td>
               </tr>
               @endforeach
            </tbody>
         </table>
   </div> --}}

@endsection