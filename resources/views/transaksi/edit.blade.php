@extends ('need.main')
@section ('konten')
@section ('payment', 'active')
@section ('judul','Edit Data Pembayaran')

<form action="/payment/{{$payment->id}}" method="post">
  @csrf
  @method('put')
  <div class="mb-3">
    <label for="">Nama Sales</label>
    <input type="text" class="form-control @error('nama_sales') is-invalid  @enderror" name="nama_sales" value="{{ $payment -> nama_sales }}" >
    @error('nama_sales')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="">Tipe Barang</label>
    <select name="tipe_id" id="tipe_id" class="form-control select2">
      <option disable value>Pilih Tipe Perangkat</option>
      @foreach ($tip as $a)
          <option value="{{ $a->id }}">{{ $a->tipe }}</option>
      @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label for="">Tanggal bayar</label>
    <input type="date" class="form-control @error('tgl_bayar') is-invalid  @enderror" name="tgl_bayar" value="{{ $payment -> tgl_bayar }}" >
    @error('tgl_bayar')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="">Total Bayar</label>
    <input type="text" class="form-control @error('total_bayar') is-invalid  @enderror" name="total_bayar" value="{{ $payment -> total_bayar }}" >
    @error('total_bayar')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="">Kode Pembayaran</label>
    <input type="text" class="form-control @error('kode_pembayaran') is-invalid  @enderror" name="kode_pembayaran" value="{{ $payment -> kode_pembayaran }}" >
    @error('kode_pembayaran')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <a href="/payment" class="btn btn-secondary">Kembali</a>
    <button class="btn btn-primary" type="submit">Edit</button>
  </div>
</form>

@endsection