@extends('header')

@section('content')

<body>
  <div class="page-header clear-filter" filter-color="orange">
    <div class="page-header-image" style="background-image:url(./assets/img/bgabout.jpg)"></div>
    <div class="container">
      <div class="content-center brand">

        <h1 class="h1-seo">Forum Diskusi Kesehatan</h1>

      </div>
    </div>
  </div>
  <div class="container">
    @if(session('sukses'))
    <div class="alert alert-success">
      {{session('sukses')}}
    </div>
    @endif
    @if(session('gagal'))
    <div class="alert alert-danger">
      {{session('gagal')}}
    </div>
    @endif

    <div class="card">
      <form action="{{url('/buat-artikel')}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field()}}
        <div class="row justify-content-center mt-4">
          <div class="col-md-10">
            <div class="form-group row">
              <label for="name" class="">Judul Artikel</label>
              <div class="col-md-6">
                <input type="text" class="form-control" name="judul" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="name" class="">Kategori Artikel</label>
              <div class="col-md-6">
                <input type="text" class="form-control" name="kategori" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="">Foto Artikel</label>
              <div class="col-md-6">
                <input type="file" class="form-control-file" name="foto" required placeholder="Foto">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-form-label text-md-right" for="inputDefault">Isi Artikel</label>
              <br>
              <textarea class="ckeditor" id="ckeditor" cols="30" rows="10" name="deskripsi"></textarea>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-info float-right">Buat</button>
      </form>
    </div>
  </div>

</body>
@endsection