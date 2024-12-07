@extends('layout.master')

@section('card-headers')
<li class="breadcrumb-item">
    <a class="text-assuntos-home" href="{{ route('login') }}">{{ __('Login') }}</a>
</li>
@if (Route::has('register'))
    <li class="breadcrumb-item">
        <a class="text-escopos-home" href="{{ route('register') }}">{{ __('Register') }}</a>
    </li>
@endif
@endsection

@section('header')

    <!--titulo da pagina-->
    <div class="row justify-content-center">
        <h2>
            <i class="fas fa-user-ninja text-logo-color"></i>
        </h2>
        <h2 class="mb-3 mr-4 ml-4 text-escopos-home"><b>SEJA BEM VINDO</b></h2>
    </div>
    <hr>
    <!--/titulo da pagina-->

@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
            </div>
            <div class="col-5">
                <!--boards-->
                <div class="card border-escopos-home">
                    <div class="card-header bg-card-headers ">
                        <h4 class="mb-0 text-escopos-home">CADASTRE-SE EM NOSSO SITE!</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right text-escopos-home">{{ __('Nome') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="border border-escopos-home form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right text-escopos-home">{{ __('E-Mail') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="border border-escopos-home form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right text-escopos-home">{{ __('Senha') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="border border-escopos-home form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right text-escopos-home">{{ __('Confirmar Senha') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class=" border border-escopos-home form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-card-headers border border-escopos-home text-escopos-home">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--/boards-->
            </div>
            <div class="col">
            </div>
        </div>
    </div>
@endsection
