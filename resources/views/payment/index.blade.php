@extends('need.main')
@section('konten')
@section('judul', 'Pembayaran')
@section('payment', 'active')
<a href="/payment/create" class="btn btn-primary"><i class="bi bi-plus-square"></i>Tambah Data</a>
          <table class="table table-responsive">
            <thead>
              <th>No</th>
              <th>Tanggal Bayar</th>
              <th>total Bayar</th>
              <th>ID Transaksi</th>
              <th>Aksi</th>
            </thead>
            <tbody>
              @foreach ($data as $x )
                  
              
              <tr>
                <td>{{ $loop -> iteration }}</td>
                <td>{{ $x ->tgl_bayar }}</td>
                <td>{{ $x ->total_bayar }}</td>
                <td>{{ $x ->id_transaksi }}</td>
                <td>
                  <a href="/payment/{{ $x->id }}/" class="btn btn-success"><i class="bi bi-list-task"></i>Detail</a>
                  <a href="/payment/{{ $x->id }}/edit" class="btn btn-warning"><i class="bi bi-pencil-square"></i>Edit</a>
                  <form action="/payment/{{ $x -> id }}" method="post" class="d-inline" onclick="return confirm('Yakin Mau Dihapus?')">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger" type="submit"><i class="bi bi-trash-fill"></i>Delete</button>
                  </form>
                </td>
              </tr>
            </tbody>
            @endforeach
          </table>
@endsection