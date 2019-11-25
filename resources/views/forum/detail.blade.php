@extends('header')

@section('content')

<body>
  <div class="page-header clear-filter" filter-color="orange">
    <div class="page-header-image" style="background-image:url(./assets/img/bgabout.jpg)"></div>
    <div class="container">
      <div class="content-center brand">
        <h1 class="h1-seo">Forum Diskusi Kesehatan</h1>
      </div>
      <div class="card" style="padding: 20px;">
        <img src="../foto-artikel/{{$data->gambar}}" style="object-fit: cover;height: 250px;width: 100%;">
        <h3 class="mt-4 text-primary">{{$data->judul}}</h3>
        <small>
          <div class="row">
            @if($data->user->role=="user")
            <img src="../foto-user.png" class="rounded-circle ml-3" style="height: 20px;">
            @endif
            @if($data->user->role=="dokter")
            <img src="../foto-dokter.png" class="rounded-circle ml-3" style="height: 20px;">
            @endif
            <p class="ml-2">Oleh : {{$data->user->name}} ( <strong>{{$data->user->role}}</strong> )</p>
          </div>
        </small>

        <div class="row">
          <div class="col-md-10 text-justify">
            {!! $data->deskripsi !!}
          </div>
        </div>
      </div>
      <h2 class="mt-4">{{$data->komen->count()}} Komentar </h2>
      @foreach($data->komen as $dk)
      <div class="row">
        <div class="col-md-7">
          <div class="bg-white">
            <b>{{$dk->user->name}} </b>: {{$dk->commenttext}}
            <p style="font-size:9px;">{{ date('M d, Y h:i A', strtotime($dk->created_at)) }}</p>
          </div>
          <hr>
        </div>
      </div>
      @endforeach
      @auth
      <form action="{{url('/buat-komen')}}" method="POST">
        {{ csrf_field()}}
        <div class="row">
          <input type="hidden" value="{{$data->id}}" name="artikel_id">
          <div class="col-md-7">
            <input type="text" name="commenttext" class="form-control" placeholder="Tulis komentar disini">
          </div>
          <div class="col-md-2">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </form>
      @endauth
    </div>
  </div>
</body>
@endsection