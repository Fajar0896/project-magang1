@extends ('need.main')
@section ('konten')
@section ('payment', 'active')
@section ('judul','Tambah Data Pembayaran')

<form action="/payment" method="post">
  @csrf
  <div class="mb-3">
    <label for="">Tanggal Bayar</label>
    <input type="date" class="form-control @error('tgl_bayar') is-invalid  @enderror" name="tgl_bayar" value="{{ @old ('tgl_bayar') }}">
    @error('tgl_bayar')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="">Total Bayar</label>
    <input type="number" class="form-control @error('total_bayar') is-invalid  @enderror" name="total_bayar" value="{{ @old ('total_bayar') }}" >
    @error('total_bayar')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <a href="/payment" class="btn btn-secondary">Kembali</a>
    <button class="btn btn-primary" type="submit">Tambah Data</button>
  </div>
</form>

@endsection