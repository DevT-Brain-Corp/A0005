<<<<<<< Updated upstream
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
=======
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
                                <h2>Daftar Akun</h2>
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
                                        <a href="/register-dokter" class="link">Daftar sebagai dokter</a>
                                    </h6>
                                </div>
                        </form>
                    </div>
>>>>>>> Stashed changes
                </div>
            </div>
        </div>
    </div>
<<<<<<< Updated upstream
</div>
@endsection
=======
    </div>
    </div>

    </div>


</body>
@endsection
>>>>>>> Stashed changes
