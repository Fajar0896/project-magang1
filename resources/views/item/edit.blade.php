@extends ('need.main')
@section ('konten')
@section ('item', 'active')
@section ('judul','Edit Data Barang')

<form action="/item/{{$item->id}}" method="post">
  @csrf
  @method('put')
  <div class="mb-3">
    <label for="">Nama Barang</label>
    <input type="text" class="form-control @error('nama_barang') is-invalid  @enderror" name="nama_barang" value="{{ $item -> nama_barang }}" >
    @error('nama_barang')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="">Harga</label>
    <input type="text" class="form-control @error('harga') is-invalid  @enderror" name="harga" value="{{ $item -> harga }}" >
    @error('harga')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="">Stok</label>
    <input type="text" class="form-control @error('stok') is-invalid  @enderror" name="stok" value="{{ $item -> stok }}" >
    @error('stok')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <a href="/item" class="btn btn-secondary">Kembali</a>
    <button class="btn btn-primary" type="submit">Edit</button>
  </div>
</form>

@endsection