@extends ('need.main')
@section ('konten')
@section ('supply', 'active')
@section ('judul','Tambah Data Supplier')

<form action="/supply" method="post">
  @csrf
  <div class="mb-3">
    <label for="">Nama Supplier</label>
    <input type="text" class="form-control @error('nama_supplier') is-invalid  @enderror" name="nama_supplier" value="{{ @old ('nama_supplier') }}">
    @error('nama_supplier')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="">No Telepon</label>
    <input type="number" class="form-control @error('no_telp') is-invalid  @enderror" name="no_telp" value="{{ @old ('no_telp') }}" >
    @error('no_telp')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="">Alamat</label>
    <input type="text" class="form-control @error('alamat') is-invalid  @enderror" name="alamat" value="{{ @old ('alamat') }}" >
    @error('alamat')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <a href="/supply" class="btn btn-secondary">Kembali</a>
    <button class="btn btn-primary" type="submit">Tambah Data</button>
  </div>
</form>

@endsection