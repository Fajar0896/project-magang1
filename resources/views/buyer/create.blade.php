@extends ('need.main')
@section ('konten')
@section ('buyer', 'active')
@section ('judul','Tambah Data Pembeli')

<form action="/buyer" method="post">
  @csrf
  <div class="mb-3">
    <label for="">Nama Pembeli</label>
    <input type="text" class="form-control @error('nama_pembeli') is-invalid  @enderror" name="nama_pembeli" value="{{ @old ('nama_pembeli') }}">
    @error('nama_pembeli')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="">Email</label>
    <input type="email" class="form-control @error('email') is-invalid  @enderror" name="email" value="{{ @old ('email') }}" >
    @error('email')
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
    <label for="">No Telepon</label>
    <input type="text" class="form-control @error('no_telp') is-invalid  @enderror" name="no_telp" value="{{ @old ('no_telp') }}" >
    @error('no_telp')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <a href="/buyer" class="btn btn-secondary">Kembali</a>
    <button class="btn btn-primary" type="submit">Tambah Data</button>
  </div>
</form>

@endsection