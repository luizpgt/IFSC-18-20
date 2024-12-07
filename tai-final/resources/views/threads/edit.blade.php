@extends('layout.master')

@section('card-headers')
    <li class="breadcrumb-item"><a class="text-success" href="{{ route('index') }}">Home</a></li>

    <li class="breadcrumb-item"><a class="text-escopos-home"
            href="{{ route('user.profile', Auth::id()) }}">{{ Auth::user()->name }}</a></li>
@endsection

@section('header')
    <!--titulo da pagina-->
    <div class="row justify-content-center">
        <h2 class="mb-3 mr-4 ml-4 text-escopos-home"><b>EDITE UM ESCOPO!</b></h2>
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
                    <form action="{{ action('ThreadsController@update') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <input name="id" type="hidden" value="{{ $thread->id }}">
                                <label for="exampleFormControlSelect1" class="text-escopos-home">
                                    <h6 class="mr-1 mb-0 mt-2">Selecione um
                                        Assunto:</h6>
                                </label>
                                <!--tagselect-->
                                <select name="assunto_id" class="form-control" id="exampleFormControlSelect1">
                                    @foreach ($assuntos as $assunto)
                                        <option value="{{ $assunto->id }}" @if ($assunto->id == old('assunto_id', $thread->assunto_id))
                                            selected="selected"
                                    @endif>{{ $assunto->assunto }}</option>
                                    @endforeach
                                </select>

                                <input name="user_id" type="hidden" value="{{ Auth::id() }}">

                                <label class="text-escopos-home">
                                    <h6 class="mr-1 mb-0 mt-2">Título:</h6>
                                </label>
                                <input name="title" class="form-control form-control-lg" type="text"
                                    placeholder="(ex: japanese culture, interests ...)" value="{{ $thread->title }}">
                                <label class="text-escopos-home">
                                    <h6 class="mr-1 mb-0 mt-2">Imagem:</h6>
                                </label>
                                <input name="image" class="form-control form-control-lg" type="text"
                                    placeholder="(ex: japanese culture, interests ...)" value="{{ $thread->image }}">

                                <label class="text-escopos-home">
                                    <h6 class="mr-1 mb-0 mt-2">Descrição:</h6>
                                </label>
                                <input name="desc" class="form-control form-control-lg" type="text"
                                    placeholder="(ex: japanese culture, interests ...)" value="{{ $thread->desc }}">
                            </div>
                            <div class="row justify-content-end mt-2">
                                <button class="btn btn-card-headers border border-escopos-home text-escopos-home"
                                    type="submit">Update</button>
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
