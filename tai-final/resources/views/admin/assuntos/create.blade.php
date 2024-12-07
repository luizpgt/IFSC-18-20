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
        <h2 class="mb-3 mr-4 ml-4 text-escopos-home"><b>ADICIONE UM NOVO ASSUNTO!</b></h2>
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
                    <form action="{{ action('AssuntoController@store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <input name="id" type="hidden">
                                <label class="text-escopos-home">
                                    <h6 class="mr-1 mb-0 mt-2">Assunto:</h6>
                                </label>
                                <input name="assunto"
                                    class="form-control form-control-lg @error('assunto') is-invalid @enderror" type="text"
                                    placeholder="(ex: tecnologia, esportes ...)" maxlength="17">
                                @error('assunto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="exampleFormControlSelect1" class="text-escopos-home">
                                    <h6 class="mr-1 mb-0 mt-2">Selecione um
                                        Escopo:</h6>
                                </label>
                                <select name="escopo_id" class="form-control" id="exampleFormControlSelect1">
                                    @foreach ($escopos as $escopo)
                                        <option value="{{ $escopo->id }}">{{ $escopo->escopo }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="row justify-content-end mt-2">
                                <button class="btn btn-card-headers border border-escopos-home text-escopos-home"
                                    type="submit">Submit</button>
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
