@extends('need.main')
@section('konten')
@section('judul', 'Pembeli')
@section('buyer', 'active')
  
    <a href="/buyer/create" class="btn btn-primary"><i class="bi bi-plus-square"></i>Tambah Data</a>

          <table class="table table-responsive">
            <thead>
              <th>No</th>
              <th>Nama Pembeli</th>
              <th>Email</th>
              <th>Alamat</th>
              <th>Aksi</th>
            </thead>
            <tbody>
              @foreach ($data as $x )
                  
              
              <tr>
                <td>{{ $loop -> iteration }}</td>
                <td>{{ $x ->nama_pembeli }}</td>
                <td>{{ $x ->email }}</td>
                <td>{{ $x ->alamat }}</td>
                <td>
                  <a href="/buyer/{{ $x->id }}/" class="btn btn-success"><i class="bi bi-list-task"></i>Detail</a>
                  <a href="/buyer/{{ $x->id }}/edit" class="btn btn-warning"><i class="bi bi-pencil-square"></i>Edit</a>
                  <form action="/buyer/{{ $x -> id }}" method="post" class="d-inline" onclick="return confirm('Yakin Mau Dihapus?')">
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