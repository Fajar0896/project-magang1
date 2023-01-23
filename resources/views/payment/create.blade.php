@extends ('need.main')
@section ('konten')
@section ('payment', 'active')
@section ('judul','Tambah Data Pembayaran')

<form action="/payment" method="post">
  @csrf
  <div class="mb-3">
    <label for="">Tanggal Bayar</label>
    <input type="date" class="form-control @error('tgl_bayar') is-invalid @enderror" value="{{ old('tgl_bayar') }}" name="tgl_bayar">
    @error('tgl_bayar')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="">Total Bayar</label>
    <input type="number" name="total_bayar" value="{{ old('total_bayar') }}" class="form-control @error('total_bayar') is-invalid @enderror">
    @error('total_bayar')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="">Jenis Pembayaran</label>
    <select name="transaction_id" id="transaction_id" class="form-control select2">
      <option disabled value>Pilih Jenis Pembayaran</option>
      @foreach ( $transaction as $t)
          <option value="{{ $t -> id }}">{{ $t->jenis_pembayaran }}</option>
      @endforeach
    </select>
  </div>
  <div class="mb-3">
    <a href="/payment" class="btn btn-secondary">Kembali</a>
    <button class="btn btn-primary" type="submit">Tambah Data</button>
  </div>
</form>

@endsection