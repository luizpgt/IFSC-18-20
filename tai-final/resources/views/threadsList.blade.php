@extends('layout.master')

@section('card-headers')

    <li class="breadcrumb-item"><a class="text-success" href="{{ route('index') }}">Home</a></li>

    <li class="breadcrumb-item"><a class="text-assuntos-home" href="{{ route('thread.create', $assunto->id) }}">Iniciar nova
            Thread em: {{ $assunto->assunto }}</a></li>

    <li class="breadcrumb-item"><a class="text-escopos-home"
            href="{{ route('user.profile', Auth::id()) }}">{{ Auth::user()->name }}</a></li>

@endsection

@section('header')
    <!--titulo da pagina-->
    <div class="row justify-content-center">
        <h2 class="mb-3 mr-4 ml-4 text-escopos-home"><b>{{ $assunto->assunto }}</b></h2>
    </div>
    <div class="row justify-content-center">
        <h6 class="mb-3 mr-4 ml-4 text-escopos-home"><u>{{ $assunto->escopos->escopo }}</u></h6>
    </div>
    <hr>
    <div class="row justify-content-center">
        <a href="{{ route('thread.create', $assunto->id) }}" class="text-assuntos-home">Iniciar nova Thread em:
            {{ $assunto->assunto }}</a>
    </div>
    <hr>
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
    <script language="javascript">
        <!--
        function aumenta(obj) {
            //obj.height=obj.height*5;
            obj.width = obj.width * 5;
        }

        function diminui(obj) {
            // obj.height=obj.height/5;
            obj.width = obj.width / 5;
        }
        //

        -->
    </script>

    <main role="main" class="container ml-4 ">
        <div class="col-sm">
            <!--card-->
            @foreach ($threads as $thread)
                <div class=" bg-bg-boards border border-escopos-home">
                    <div class="col md-4 mb-0">
                        <p class="mb-0 text-gray-dark">
                            @if (Auth::id() === $thread->user_id)
                                <a href="{{ action('ThreadsController@edit', $thread->id) }}"><i
                                        class="fas fa-edit text-success"></i></a>
                            @endif
                            @if (Auth::id() === 1 || Auth::id() === $thread->user_id)
                                <a href="{{ action('ThreadsController@destroy', $thread->id) }}"
                                    onclick="return confirm('Tem certeza que deseja remover {{ $thread->title }}?');"><i
                                        class="fas fa-trash-alt text-escopos-home"></i></a>
                            @endif
                            <a class="text-info" type="button">
                                <b>{{ $thread->title }}!</b>
                            </a> <a class="text-logo-color"
                                href="{{ route('user.profile', $thread->user_id) }}"><b>{{ $thread->user_id }}</b></a>
                            [{{ $thread->created_at }}]
                            <b class="text-danger">No.{{ $thread->id }}</b> <a
                                href=" {{ route('discuss.show', $thread->id) }} ">[Clique Aqui]</a> para ver mais
                        </p>
                    </div>
                    <div class="col-md-4 media mt-0">
                        <a href="{{ $thread->image }}">
                            <img src="{{ $thread->image }}" alt="" class="mr-2 " width='200rem' onMouseOver="aumenta(this)"
                                onMouseOut="diminui(this)">
                        </a>
                    </div>
                    <div class="col md-4">
                        <p class="pb-3 mb-0 lh-125">
                            {{ $thread->desc }}
                        </p>
                    </div>
                </div>
                <hr class="mb-1 mt-1">
            @endforeach
            <!--card-->
        </div>
    </main>
@endsection
<!--https://wallpaperaccess.com/full/2413558.jpg-->
