@extends ('need.main')
@section ('konten')
@section ('transaksi', 'active')
@section ('judul','Detail Data Transaksi')


<ul class="list-group">

      
  <li class="list-group-item">Nama Barang : {{ $transaction->item_id }}</li>
  <li class="list-group-item">Nama Pembeli : {{ $transaction->buyer_id}}</li>
  <li class="list-group-item">Tanggal : {{ $transaction->tanggal }}</li>
  <li class="list-group-item">Jenis Pembayaran : {{ $transaction->jenis_pembayaran }}</li>
</ul>
<div class="mb-3">
  <a href="/transaksi" class="btn btn-secondary">Kembali</a>
</div>
@endsection