@extends('before')

@section('content')

<body>
<div class="page-header clear-filter" filter-color="orange">
  <div class="page-header-image" style="background-image:url(./assets/img/registrasi.jpg)"></div>
  <div class="content">
    <div class="container">
      <div class="col-md-4 ml-auto mr-auto">
        <div class="card card-login card-plain">
          <form class="form" method="" action="">
            {{csrf_field()}}
            <div class="card-header text-center">
              <h2>Daftar Akun</h2>
              <h10>Daftarkan diri Anda dengan memasukkan nama, tanggal lahir, email, dan kata sandi</h10>
            </div>

            <div class="card">
  <div class="card-body">
            <div class="card-body">


              <div class="input-group no-border input-lg">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="now-ui-icons users_circle-08"></i>
                  </span>
                </div>
                <input type="text" class="form-control" placeholder="Nama...">
              </div>
              <div class="input-group no-border input-lg">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="now-ui-icons users_circle-08"></i>
                  </span>
                </div>
                <input type="email" class="form-control" placeholder="Email...">
              </div>
              <div class="input-group no-border input-lg">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="now-ui-icons text_caps-small"></i>
                  </span>
                </div>
                <input type="password" placeholder="Kata sandi..." class="form-control" />
              </div>
            </div>
</div>
</div>
            <div class="card-footer text-center">
              <a href="/registrasi/" class="btn btn-primary btn-round btn-lg btn-block">Daftar</a>
              <div class="pull-left">
                <h6>
                  <a href="/login/" class="link">Masuk Akun</a>
                </h6>
              </div>
              <div class="pull-right">
                <h6>
                  <a href="#pablo" class="link">Butuh Bantuan?</a>
                </h6>
              </div>
          </form>
          </div>
        </div>
        </div>
        </div>
      </div>
    </div>
  </div>

</div>


</body>
@endsection
