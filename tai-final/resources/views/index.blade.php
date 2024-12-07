@extends('layout.master')

@section('card-headers')

    <li class="breadcrumb-item"><a class="text-success" href="{{ route('index') }}">Home</a></li>

    <li class="breadcrumb-item"><a class="text-escopos-home"
            href="{{ route('user.profile', Auth::id()) }}">{{ Auth::user()->name }}</a></li>

    @if (Auth::id() === 1)
        <li class="breadcrumb-item"><a class="text-assuntos-home" href="{{ route('admin.escopo.create') }}">Adicionar
                Escopo</a></li>
        <li class="breadcrumb-item"><a class="text-assuntos-home" href="{{ route('admin.assunto.create') }}">Adicionar
                Assunto</a></li>
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
    <div class="row justify-content-center">
        @if ($errors->all())
            @foreach ($errors->all() as $error)
                <div class="alert alert-info border border-escopos-home" role="alert">
                    {{ $error }}
                </div>
            @endforeach
        @endif
    </div>
    <hr>
    <!--/titulo da pagina-->
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
            </div>
            <div class="col-8">
                <!--boards-->
                <div class="card border-escopos-home">
                    <div class="card-header bg-card-headers">
                        <!--form-->
                        <form action=" {{ action('AssuntoController@search') }}" method="POST">
                            @csrf

                            <div class="form-row">
                                <h4 class="mb-0 mt-1 text-escopos-home">Assuntos</h4>

                                <div class="form-group mx-sm-3 mb-2">
                                    <input name="assunto" type="text"
                                        class="form-control bg-bg-boards border border-escopos-home" id="inputPassword2"
                                        placeholder="Busque assuntos">
                                </div>
                                <button type="submit" class="btn btn-escopos-home mb-2">Buscar</button>
                            </div>
                        </form>
                        <!--form-->
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach ($escopos as $escopo)
                                <div class="col-md-3">
                                    <p class="mb-0 mt-3 text-escopos-home"><u><b>{{ $escopo->escopo }}</b>
                                            @if (Auth::id() === 1)
                                                <a href="{{ action('EscopoController@edit', $escopo->id) }}"><i
                                                        class="fas fa-edit text-success"></i></a><a
                                                    href="{{ action('EscopoController@destroy', $escopo->id) }}"
                                                    onclick="return confirm('Tem certeza que deseja remover {{ $escopo->escopo }}?');"><i
                                                        class="fas fa-trash-alt text-escopos-home"></i></a>
                                            @endif
                                        </u></p>
                                    @foreach ($escopo->assuntos as $assunto)
                                        <a class="text-assuntos-home"
                                            href="{{ action('ThreadsController@filterByAssunto', $assunto->id) }}">{{ $assunto->assunto }}</a>
                                        @if (Auth::id() === 1)
                                            <a href="{{ action('AssuntoController@edit', $assunto->id) }}"><i
                                                    class="fas fa-edit text-success"></i></a><a
                                                href="{{ action('AssuntoController@destroy', $assunto->id) }}"
                                                onclick="return confirm('Tem certeza que deseja remover {{ $assunto->assunto }}?');"><i
                                                    class="fas fa-trash-alt text-escopos-home"></i></a>
                                        @endif
                                        <br>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!--/boards-->
                <!--boards-->
                <div class="card border-escopos-home mt-2">
                    <div class="card-header bg-card-headers">
                        <!--form-->
                        <form action=" {{ action('ThreadsController@search') }}" method="POST">
                            @csrf

                            <div class="form-row">
                                <h4 class="mb-0 mt-1 text-escopos-home">Threads Recentes</h4>

                                <div class="form-group mx-sm-3 mb-2">
                                    <input name="title" type="text"
                                        class="form-control bg-bg-boards border border-escopos-home" id="inputPassword2"
                                        placeholder="Busque pelos títulos">
                                </div>
                                <button type="submit" class="btn btn-escopos-home mb-2">Buscar</button>
                            </div>
                        </form>
                        <!--form-->
                    </div>

                    <div class="card-body">
                        <div class="row">
                            @foreach ($threads as $thread)
                                <div class="col-md-3 justify-content-center">
                                    <p class="mb-0 mt-0 text-escopos-home text-center">
                                        <small><b>{{ $thread->assuntos->assunto }}</b></small>
                                    </p>
                                    @if (!empty($thread->image))

                                        <a href=" {{ route('discuss.show', $thread->id) }}">
                                            <img class="border border-escopos-home" src="{{ $thread->image }}" alt=""
                                                style="width: 10rem">
                                        </a>
                                    @endif

                                    <p class="mb-4 mt-0 text-escopos-home text-center" style="line-height: 100%">
                                        <small><b>{{ $thread->title }}~</b>{{ $thread->desc }}</small>
                                    </p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!--/boards-->

            </div>
            <div class="col">
            </div>
        </div>
    </div>

    </div>

@endsection
