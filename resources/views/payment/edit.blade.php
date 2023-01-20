@extends ('need.main')
@section ('konten')
@section ('payment', 'active')
@section ('judul','Edit Data Pembayaran')

<form action="/payment/{{$payment->id}}" method="post">
  @csrf
  @method('put')
  <div class="mb-3">
    <label for="">Tanggal Bayar</label>
    <input type="date" class="form-control @error('tgl_bayar') is-invalid  @enderror" name="tgl_bayar" value="{{ $payment -> tgl_bayar }}" >
    @error('tgl_bayar')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="">Total Bayar</label>
    <input type="number" class="form-control @error('total_bayar') is-invalid  @enderror" name="total_bayar" value="{{ $payment -> total_bayar }}" >
    @error('total_bayar')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="">ID Transaksi</label>
    <input type="number" class="form-control @error('id_transaksi') is-invalid  @enderror" name="id_transaksi" value="{{ $payment -> id_transaksi }}" >
    @error('id_transaksi')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <a href="/payment" class="btn btn-secondary">Kembali</a>
    <button class="btn btn-primary" type="submit">Edit</button>
  </div>
</form>

@endsection