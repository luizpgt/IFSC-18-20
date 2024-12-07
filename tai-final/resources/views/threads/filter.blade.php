@extends('layout.master')

@section('card-headers')

    <li class="breadcrumb-item"><a class="text-success" href="{{ route('index') }}">Home</a></li>

    <li class="breadcrumb-item"><a class="text-escopos-home"
            href="{{ route('user.profile', Auth::id()) }}">{{ Auth::user()->name }}</a></li>

@endsection

@section('header')
    <!--titulo da pagina-->
    <div class="row justify-content-center">
        <h2>
            <i class="fas fa-user-ninja text-logo-color"></i>
        </h2>
        <h2 class="mb-3 mr-4 ml-4 text-escopos-home"><b>BUSCA POR TÍTULOS!</b></h2>
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
                <div class="card border-escopos-home mt-2">
                    <div class="card-header bg-card-headers">
                        <form action=" {{ action('ThreadsController@search') }}" method="POST">
                            @csrf

                            <div class="form-row">
                                <h4 class="mb-0 mt-1 text-escopos-home">Last Threads</h4>

                                <div class="form-group mx-sm-3 mb-2">
                                    <input name="title" type="text"
                                        class="form-control bg-bg-boards border border-escopos-home" id="inputPassword2"
                                        placeholder="Busque pelos títulos">
                                </div>
                                <button type="submit" class="btn btn-escopos-home mb-2">Buscar</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach ($threads as $thread)
                                <div class="col-md-3 justify-content-center">

                                    @if (!empty($thread->image))
                                        <a href=" {{ route('discuss.show', $thread->id) }}">
                                            <img class="border border-escopos-home" src="{{ $thread->image }}" alt=""
                                                style="width: 10rem">
                                        </a>
                                    @endif

                                    <p class="mb-4 mt-0 text-escopos-home text-center" style="line-height: 100%">
                                        <small><b>~{{ $thread->title }}</b></small>
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
