@extends ('need.main')
@section ('konten')
@section ('payment', 'active')
@section ('judul','Detail Data Pembayaran')


<ul class="list-group">
  <li class="list-group-item">Tanggal Bayar : {{$payment->tgl_bayar }}</li>
  <li class="list-group-item">Total Bayar : {{$payment->total_bayar }}</li>
  <li class="list-group-item">Jenis Pembayaran : {{$payment->transaction->jenis_pembayaran }}</li>
</ul>
<div class="mb-3">
  <a href="/payment" class="btn btn-secondary">Kembali</a>
</div>
@endsection