@extends('layout.master')

@section('card-headers')
    <li class="breadcrumb-item"><a class="text-success" href="{{ route('index') }}">Home</a></li>
    <li class="breadcrumb-item"><a class="text-assuntos-home" href="{{ route('user.password.edit', Auth::id()) }}">Alterar
            Senha</a></li>
    <li class="breadcrumb-item"><a class="text-escopos-home"
            href="{{ route('user.profile', Auth::id()) }}">{{ Auth::user()->name }}</a></li>
@endsection

@section('header')
    <!--titulo da pagina-->
    <div class="row justify-content-center">
        <h2 class="mb-3 mr-4 ml-4 text-escopos-home"><b>EDITE SEU PERFIL!</b></h2>
    </div>
    <!--/titulo da pagina-->
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
            </div>
            <div class="col-8">
                <!-- error display -->
                <div class="row justify-content-center">
                    @if ($errors->all())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-info" role="alert">
                                {{ $error }}
                            </div>
                        @endforeach
                    @endif
                </div>
                <hr>
                <!-- /error display -->
                <!--central form-->
                <div class="card border-escopos-home">
                    <div class="card-header bg-card-headers">
                        <h4 class="mb-0 text-escopos-home"></h4>
                    </div>
                    <form action="{{ action('UserController@update') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <input name="id" type="hidden" value="{{ $user->id }}">
                                <label class="text-escopos-home">
                                    <h6 class="mr-1 mb-0 mt-2">Nome de usuário:</h6>
                                </label>
                                <input name="name" class="form-control form-control-lg " type="text" placeholder=""
                                    value="{{ $user->name }}">
                                <label class="text-escopos-home">
                                    <h6 class="mr-1 mb-0 mt-2">Email:</h6>
                                </label>
                                <input name="email" class="form-control form-control-lg " type="text" placeholder=""
                                    value="{{ $user->email }}">
                            </div>
                            <div class="row justify-content-center mt-2 mb-2">
                                <a class="text-escopos-home" href=" {{ route('user.password.edit', Auth::id()) }}"><u>Deseja
                                        alterar sua senha?</u></a>
                            </div>
                            <div class="row justify-content-between mt-2">
                                <a href="{{ route('user.profile', $user->id) }}"
                                    class="btn btn-card-headers border border-escopos-home text-escopos-home"
                                    type="submit">Voltar</a>
                                <button class="btn btn-card-headers border border-escopos-home text-escopos-home"
                                    type="submit">Atualizar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!--/central form-->
            </div>
            <div class="col">
            </div>
        </div>
    </div>

    </div>
@endsection
