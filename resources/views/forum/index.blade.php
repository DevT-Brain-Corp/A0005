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

    @auth
    @if(Auth::user()->role !== "admin")
    <a href="{{url('/tambah-artikel')}}" class="btn btn-primary btn-sm ">Tambah Artikel</a>
    @endif
    @endauth

    <div class="row">
      @foreach($data as $d)
      <div class="card mt-4 ml-2" style="width: 18rem;">
        <img class="card-img-top" src="foto-artikel/{{$d->gambar}}"
          style="object-fit: cover;height: 200px;width: 100%;">
        <div class="card-body">
          <span class="badge badge-pill badge-primary">{{$d->kategori}}</span>
          <h3 class="card-text mt-2"><a href="/forum/{{$d->slug}}">{{$d->judul}}</a></h3>
          @auth
          <a href="{{url('/edit-artikel')}}/{{$d->id}}" class="btn btn-primary btn-sm"
            style="display: {{Auth::user()->id == $d->user->id ? "block" : "none"}}">
            Edit
          </a>
          @endauth
          <div class="row">
            @if($d->user->role=="user")
            <img src="foto-user.png" class="rounded-circle ml-3" style="height: 20px;">
            @endif
            @if($d->user->role=="dokter")
            <img src="foto-dokter.png" class="rounded-circle ml-3" style="height: 20px;">
            @endif
            <p class="ml-2">Oleh : {{$d->user->name}} ( <strong>{{$d->user->role}}</strong> )</p>
          </div>
          @auth
          @if(Auth::user()->role=="admin" && $d->user->role=="user")
          <form action="{{url('/hapus-artikel')}}" method="POST">
            {{ csrf_field()}}
            <input type="hidden" value="{{$d->id}}" name="id_artikel">
            <button type="submit" class="btn btn-danger btn-sm float-right">Hapus</button>
          </form>
          @endif
          @endauth
        </div>
      </div>
      @endforeach
    </div>
</body>
@endsection