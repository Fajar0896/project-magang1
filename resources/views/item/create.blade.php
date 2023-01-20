@extends ('need.main')
@section ('konten')
@section ('item', 'active')
@section ('judul','Tambah Data Barang')

<form action="/item" method="post">
  @csrf
  <div class="mb-3">
    <label for="">Nama Barang</label>
    <input type="text" class="form-control @error('nama_barang') is-invalid  @enderror" name="nama_barang" value="{{ @old ('nama_barang') }}" >
    @error('nama_barang')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="">Harga</label>
    <input type="number" class="form-control @error('harga') is-invalid  @enderror" name="harga" value="{{ @old ('harga') }}" >
    @error('harga')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="">Stok</label>
    <input type="number" class="form-control @error('stok') is-invalid  @enderror" name="stok" value="{{ @old ('stok') }}" >
    @error('stok')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <a href="/item" class="btn btn-secondary">Kembali</a>
    <button class="btn btn-primary" type="submit">Kirim</button>
  </div>
</form>

@endsection