@extends('admin')

@section('content')


<div class="card-header">
  <h5 class="title">Tambah Pengguna Baru</h5>
  <form>
    <div class="form-group">
      <label for="exampleInputEmail1">Nama</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Email </label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Kata sandi</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Kata sandi">
    </div>
    <label for="exampleInputEmail1">Foto Pengguna</label>
    <div class="form-group">
      <label for="exampleInputEmail1">Foto Pengguna</label>
  <input type="file" class="custom-file-input" id="validatedCustomFile" required>
  <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
</div>

    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
</div>

@endsection
