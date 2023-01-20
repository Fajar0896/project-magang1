@extends ('need.main')
@section ('konten')
@section ('supply', 'active')
@section ('judul','Edit Data Supllier')

<form action="/supply/{{$supply->id}}" method="post">
  @csrf
  @method('put')
  <div class="mb-3">
    <label for="">Nama Supplier</label>
    <input type="text" class="form-control @error('nama_supplier') is-invalid  @enderror" name="nama_supplier" value="{{ $supply -> nama_supplier }}" >
    @error('nama_supplier')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="">No Telepon</label>
    <input type="number" class="form-control @error('no_telp') is-invalid  @enderror" name="no_telp" value="{{ $supply -> no_telp }}" >
    @error('no_telp')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="">Alamat</label>
    <input type="text" class="form-control @error('alamat') is-invalid  @enderror" name="alamat" value="{{ $supply -> alamat }}" >
    @error('alamat')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <a href="/supply" class="btn btn-secondary">Kembali</a>
    <button class="btn btn-primary" type="submit">Edit</button>
  </div>
</form>

@endsection