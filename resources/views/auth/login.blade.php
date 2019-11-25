<<<<<<< Updated upstream
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
=======
@extends('before')

@section('content')

<body>

    <div class="page-header clear-filter" filter-color="orange">
        <div class="page-header-image" style="background-image:url(./assets/img/log.jpg)"></div>
        <div class="content">
            <div class="container">
                <div class="col-md-4 ml-auto mr-auto">
                    <div class="card card-login card-plain">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
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
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                                name="password" required autocomplete="current-password">

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
                                            {{ __('Masuk') }}
                                        </button>
                                <div class="pull-left">
                                    <h6>
                                        <a href="{{route('register')}}" class="link">Daftar Akun</a>
                                    </h6>
                                </div>
                                <div class="pull-right">
                                    <h6>
                                        <a href="#pablo" class="link">Butuh Bantuan?</a>
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


</body>
@endsection
>>>>>>> Stashed changes
