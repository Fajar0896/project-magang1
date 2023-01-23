@extends ('need.main')
@section ('konten')
@section ('transaction', 'active')
@section ('judul','Edit Data Transaksi')

<form action="/transaction/{{$transaction->id}}" method="post">
  @csrf
  @method('put')
  <div class="mb-3">
    <label for="">Nama Barang</label>
    <select name="item_id" id="item_id" class="form-control select2">
      <option disabled value>Pilih Nama Barang</option>
      @foreach ( $item as $i)
          <option value="{{ $i -> id }}">{{ $i->nama_barang }}</option>
      @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label for="">Nama Pembeli</label>
    <select name="buyer_id" id="buyer_id" class="form-control select2">
      <option disabled value>Pilih Nama Barang</option>
      @foreach ( $buyer as $b)
          <option value="{{ $b -> id }}">{{ $b->nama_pembeli }}</option>
      @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label for="">Tanggal</label>
    <input type="date" class="form-control @error('tanggal') is-invalid @enderror" value="{{ $transaction->tanggal }}" name="tanggal">
    @error('tanggal')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="">Jenis Pembayaran</label>
    <select name="jenis_pembayaran" id="" class="form-control">
      <option disabled value>Pilih Jenis Pembayaran</option>
      <option value="Tunai">Tunai</option>
      <option value="Non Tunai">Non Tunai</option>
      <option value="Kredit">Kredit</option>
    </select>
  </div>
  <div class="mb-3">
    <a href="/transaction" class="btn btn-secondary">Kembali</a>
    <button class="btn btn-primary" type="submit">Edit</button>
  </div>
</form>

@endsection