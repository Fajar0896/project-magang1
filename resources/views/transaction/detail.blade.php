@extends ('need.main')
@section ('konten')
@section ('transaction', 'active')
@section ('judul','Detail Data Pembayaran')


<ul class="list-group">
  <li class="list-group-item">Nama Barang : {{$transaction->item->nama_barang }} </li>
  <li class="list-group-item">Nama Pembeli : {{$transaction->buyer->nama_pembeli }}</li>
  <li class="list-group-item">Tanggal : {{$transaction->tanggal }}</li>
  <li class="list-group-item">Jenis Pembayaran : {{$transaction->jenis_pembayaran }}</li>
</ul>
<div class="mb-3">
  <a href="/transaction" class="btn btn-secondary">Kembali</a>
</div>
@endsection