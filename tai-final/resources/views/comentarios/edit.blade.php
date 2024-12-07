@extends('layout.master')

@section('card-headers')
    <li class="breadcrumb-item"><a class="text-success" href="{{ route('index') }}">Home</a></li>

    <li class="breadcrumb-item"><a class="text-escopos-home"
            href="{{ route('user.profile', Auth::id()) }}">{{ Auth::user()->name }}</a></li>
@endsection

@section('header')
    <!--titulo da pagina-->
    <div class="row justify-content-center">
        <h2 class="mb-3 mr-4 ml-4 text-escopos-home"><b>EDITE SEU COMENTÁRIO!</b></h2>
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
                    <form action="{{ action('ComentarioController@update') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <input name="id" type="hidden" value="{{ $comentario->id }}">

                                <label for="exampleFormControlSelect1" class="text-escopos-home">
                                    <h6 class="mr-1 mb-0 mt-2">Thread:</h6>
                                </label>
                                <input name="thread_id" class="form-control form-control-lg" type="text"
                                    value="{{ $comentario->threads->title }}" disabled>

                                @if (!empty($comentario->coment_id))
                                    <label for="exampleFormControlSelect1" class="text-escopos-home">
                                        <h6 class="mr-1 mb-0 mt-2">Comentário referente:</h6>
                                    </label>
                                    <input name="coment_id" class="form-control form-control-lg" type="text"
                                        value="No.{{ $comentario->coment_id }}" disabled>
                                @endif

                                <input name="user_id" type="hidden" value="{{ Auth::id() }}">
                                <label class="text-escopos-home">
                                    <h6 class="mr-1 mb-0 mt-2">Imagem:</h6>
                                </label>
                                <input name="image" class="form-control form-control-lg" type="text"
                                    value="{{ $comentario->image }}">

                                <label class="text-escopos-home">
                                    <h6 class="mr-1 mb-0 mt-2">Comentário:</h6>
                                </label>
                                <input name="comentario" class="form-control form-control-lg" type="text"
                                    value="{{ $comentario->comentario }}">
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
