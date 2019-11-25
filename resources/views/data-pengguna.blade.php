@extends('admin')

@section('content')


<div class="card-header">
  <h5 class="title">Data Pengguna</h5>
  <p class="category">Seluruh Pengguna yang Bergabung dengan SOSMEKES</p>
<a href="/tambah-pengguna" class="btn btn-info">+ Tambah Pengguna</a>
  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nama</th>
      <th scope="col">Tanggal lahir</th>
      <th scope="col">Email</th>
      <th scope="col">Kata sandi</th>
      <th scope="col">Foto</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td><button type="button" class="btn btn-success">Ubah</button> <button type="button" class="btn btn-danger">Hapus</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td><button type="button" class="btn btn-success">Ubah</button> <button type="button" class="btn btn-danger">Hapus</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td><button type="button" class="btn btn-success">Ubah</button> <button type="button" class="btn btn-danger">Hapus</button></td>
    </tr>
  </tbody>
</table>
</div>

@endsection
