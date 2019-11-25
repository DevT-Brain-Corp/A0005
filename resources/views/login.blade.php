@extends('before')

@section('content')

<body>

<div class="page-header clear-filter" filter-color="orange">
  <div class="page-header-image" style="background-image:url(./assets/img/log.jpg)"></div>
  <div class="content">
    <div class="container">
      <div class="col-md-4 ml-auto mr-auto">
        <div class="card card-login card-plain">
          <form class="form" method="POST" action="{{ route('proses') }}">
            <div class="card-header text-center">
              <div class="logo-container">
                <img src="../assets/img/now-logo.png" alt="">
              </div>
            </div>

              <h2>Masuk Akun</h2>
              <div class="card">
    <div class="card-body">
              <div class="card-body">
              <div class="input-group no-border input-lg">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="now-ui-icons users_circle-08"></i>
                  </span>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
            <div class="btn btn-primary btn-round btn-lg btn-block">Masuk</div>
              <div class="pull-left">
                <h6>
                  <a href="/registrasi/" class="link">Daftar Akun</a>
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


</body>
@endsection
