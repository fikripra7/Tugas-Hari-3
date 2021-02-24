@extends('layout/main')

@section('title', 'Mahasiswa | Coba Framework Laravel')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-10">
      <h1 class="mt-3">Daftar Mahasiswa</h1>

      <table class="table table-striped">
        <thead class="table-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">NPM</th>
            <th scope="col">Kelas</th>
            <th scope="col">Email</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Fikri Prasetyo</td>
            <td>12117353</td>
            <td>4KA22</td>
            <td>fikripra7@gmail.com</td>
            <td>Sistem Informasi</td>
            <td>
              <a href=""><span class="badge bg-success">Edit</a>
              <a href=""><span class="badge bg-danger">Delete</a>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Prasetyo Fikri</td>
            <td>11117457</td>
            <td>4KA22</td>
            <td>fikripra123@gmail.com</td>
            <td>Sistem Informasi</td>
            <td>
              <a href=""><span class="badge bg-success">Edit</a>
              <a href=""><span class="badge bg-danger">Delete</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection