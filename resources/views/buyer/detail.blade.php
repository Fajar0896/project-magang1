@extends ('need.main')
@section ('konten')
@section ('buyer', 'active')
@section ('judul','Detail Data Pembeli')


<ul class="list-group">
  <li class="list-group-item">ID : {{$buyer->id }} </li>
  <li class="list-group-item">Nama Pembeli : {{$buyer->nama_pembeli }}</li>
  <li class="list-group-item">Email : {{$buyer->email }}</li>
  <li class="list-group-item">Alamat : {{$buyer->alamat }}</li>
  <li class="list-group-item">No Telepon : {{$buyer->no_telp }}</li>
</ul>
<div class="mb-3">
  <a href="/buyer" class="btn btn-secondary">Kembali</a>
</div>
@endsection