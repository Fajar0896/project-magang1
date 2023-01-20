@extends ('need.main')
@section ('konten')
@section ('item', 'active')
@section ('judul','Detail Data Barang')


<ul class="list-group">
  <li class="list-group-item">ID : {{ $item->id }} </li>
  <li class="list-group-item">Nama Barang : {{ $item->nama_barang }}</li>
  <li class="list-group-item">Harga : {{ $item->harga }}</li>
  <li class="list-group-item">Stok : {{ $item->stok }}</li>
  <li class="list-group-item">ID Supplier : {{ $item->id_supplier }}</li>
</ul>
<div class="mb-3">
  <a href="/item" class="btn btn-secondary">Kembali</a>
</div>
@endsection