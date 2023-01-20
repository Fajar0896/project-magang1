@extends('need.main')
@section('konten')
@section('judul', 'Supplier')
@section('supply', 'active')
<a href="/supply/create" class="btn btn-primary"><i class="bi bi-plus-square"></i>Tambah Data</a>
          <table class="table table-responsive">
            <thead>
              <th>No</th>
              <th>Nama Supplier</th>
              <th>No Telepon</th>
              <th>Alamat</th>
              <th>Aksi</th>
            </thead>
            <tbody>
              @foreach ($data as $x )
                  
              
              <tr>
                <td>{{ $loop -> iteration }}</td>
                <td>{{ $x ->nama_supplier }}</td>
                <td>{{ $x ->no_telp }}</td>
                <td>{{ $x ->alamat }}</td>
                <td>
                  <a href="/supply/{{ $x->id }}/edit" class="btn btn-warning"><i class="bi bi-pencil-square"></i>Edit</a>
                  <form action="/supply/{{ $x -> id }}" method="post" class="d-inline" onclick="return confirm('Yakin Mau Dihapus?')">
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