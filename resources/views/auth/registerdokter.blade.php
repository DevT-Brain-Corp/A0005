@extends('before')

@section('content')

<body>
    <div class="page-header clear-filter" filter-color="orange">
        <div class="page-header-image" style="background-image:url(./assets/img/registrasi.jpg)"></div>
        <div class="content">
            <div class="container">
                <div class="col-md-4 ml-auto mr-auto">
                    <div class="card card-login card-plain">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="card-header text-center">
                                <h2>Daftar Akun Dokter</h2>
                                <h6>Daftarkan diri Anda dengan memasukkan nama, tanggal lahir, email, dan kata sandi
                                </h6>
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
                                            <input id="name" type="text"
                                                class="form-control @error('name') is-invalid @enderror" name="name"
                                                value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nama">

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="input-group no-border input-lg">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="now-ui-icons users_circle-08"></i>
                                                </span>
                                            </div>
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="input-group no-border input-lg">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="now-ui-icons text_caps-small"></i>
                                                </span>
                                            </div>
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="new-password" placeholder="Password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="input-group no-border input-lg">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="now-ui-icons text_caps-small"></i>
                                                </span>
                                            </div>
                                            <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password" placeholder="Password Konfirmasi">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-center">
                                <button type="submit" class="btn btn-primary btn-round btn-lg btn-block">
                                    {{ __('Register') }}
                                </button>
                                <div class="pull-left">
                                    <h6>
                                        <a href="{{route('login')}}" class="link">Masuk Akun</a>
                                    </h6>
                                </div>
                                <div class="pull-right">
                                    <h6>
                                        <a href="/register" class="link">Daftar sebagai user</a>
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