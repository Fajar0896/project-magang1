@extends ('need.main')
@section ('konten')
@section ('buyer', 'active')
@section ('judul','Edit Data Pembeli')

<form action="/buyer/{{$buyer->id}}" method="post">
  @csrf
  @method('put')
  <div class="mb-3">
    <label for="">Nama Pembeli</label>
    <input type="text" class="form-control @error('nama_pembeli') is-invalid  @enderror" name="nama_pembeli" value="{{ $buyer -> nama_pembeli }}" >
    @error('nama_pembeli')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="">Email</label>
    <input type="email" class="form-control @error('email') is-invalid  @enderror" name="email" value="{{ $buyer -> email }}" >
    @error('email')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="">Alamat</label>
    <input type="text" class="form-control @error('alamat') is-invalid  @enderror" name="alamat" value="{{ $buyer -> alamat }}" >
    @error('alamat')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="">No Telepon</label>
    <input type="text" class="form-control @error('no_telp') is-invalid  @enderror" name="no_telp" value="{{ $buyer -> no_telp }}" >
    @error('no_telp')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <a href="/buyer" class="btn btn-secondary">Kembali</a>
    <button class="btn btn-primary" type="submit">Edit</button>
  </div>
</form>

@endsection