@extends('layout.master')

@section('card-headers')
    <li class="breadcrumb-item"><a class="text-success" href="{{ route('index') }}">Home</a></li>

    <li class="breadcrumb-item"><a class="text-assuntos-home"
            href="{{ action('ThreadsController@filterByAssunto', $thread->assunto_id) }}">
            Voltar às Threads </a>
    </li>
    <li class="breadcrumb-item"><a class="text-escopos-home"
            href="{{ route('user.profile', Auth::id()) }}">{{ Auth::user()->name }}</a></li>


@endsection

@section('header')

    <div class="row justify-content-center">
        <h2 class="mb-3 mr-4 ml-4 text-escopos-home"><u>Sessão</u>/<b> {{ $thread->title }}</b></h2>
    </div>
    <div class="row justify-content-center">
        <i class="fas fa-info-circle text-success"> Você pode pesquisar pelas imagens deste tópico clicando sobre elas!</i>

    </div>
    <hr class="mb-2 mt-3">
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

    <div class="bg-bg-boards border border-escopos-home" id="thread-{{ $thread->id }}">
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
                <a class="text-info" type="button"><b>{{ $thread->title }}!</b></a> <a class="text-logo-color"
                    href="{{ route('user.profile', $thread->user_id) }}"><b>{{ $thread->user_id }}</b></a>
                [{{ $thread->created_at }}]
                <b class="text-danger">No.{{ $thread->id }}</b>
                @foreach ($comentarios as $comentario)
                    @if ($comentario->thread_id === $thread->id && empty($comentario->coment_id))
                        <a class="text-escopos-home" href="#{{ $comentario->id }}"><u>>>{{ $comentario->id }}</u></a>
                    @endif
                @endforeach
                <!--form-->
            <div class="dropdown justify-content-end">
                <a class="text-escopos-home" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    [responder]
                </a>

                <div class="dropdown-menu bg-card-headers border-escopos-home" aria-labelledby="dropdownMenu2">
                    <form action="{{ action('ComentarioController@store') }}" method="POST" class="px-4 py-3">
                        @csrf
                        <input type="hidden" name="id">
                        <input type="hidden" name="thread_id" value="{{ $thread->id }}">
                        <input type="hidden" name="coment_id" value="">
                        <input type="hidden" name="user_id" value=" {{ Auth::id() }} ">
                        <div class="form-group">
                            <label for="exampleDropdownFormEmail2" class="text-escopos-home"><b>Imagem:
                                    <small>(opcional)</small></b></label>
                            <input name="image" type="url" class="form-control border border-escopos-home bg-bg-boards"
                                id="exampleDropdownFormEmail2" placeholder="http://[...] max | 255" maxlength="255">
                        </div>
                        <div class="form-group">
                            <label for="exampleDropdownFormPassword2" class="text-escopos-home"><b>Comentário:</b></label>
                            <input name="comentario" type="text"
                                class="form-control border border-escopos-home bg-bg-boards"
                                id="exampleDropdownFormPassword2" placeholder="coment[...]max | 255" maxlength="255">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-escopos-home border border-escopos-home">Confirmar</button>
                        </div>
                    </form>
                </div>
            </div>
            <!--form-->
            </p>
        </div>
        <!--  -->
        <div class="col-md-4 media mt-0">
            <a href="https://yandex.com/images/search?rpt=imageview&url={{ $thread->image }}" target="_blank"
                data-toggle="tooltip" data-placement="bottom" title="Clique para pesquisar por esta imagem!">
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
    <hr class="mb-2 mt-3">

    <!--card-->

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
    <style>
        section:target {
            background-color: #f79859;
        }

    </style>
    <main role="main" class="container ml-4 ">
        <div class="col-sm">


            <!--card-->
            @foreach ($comentarios as $comentario)
                <hr class="mb-1 mt-1">
                <section id="{{ $comentario->id }}">-</section>

                <div class=" bg-bg-boards border border-escopos-home teste" id="{{ $comentario->id }}">
                    <div class="col md-4 mb-0">

                        <p class="mb-0 text-gray-dark">
                            @if (Auth::id() === $comentario->user_id)
                                <a href="{{ action('ComentarioController@edit', $comentario->id) }}"><i
                                        class="fas fa-edit text-success"></i></a>
                            @endif
                            @if (Auth::id() === 1 || Auth::id() === $comentario->user_id)
                                <a href="{{ action('ComentarioController@destroy', $comentario->id) }}"
                                    onclick="return confirm('Tem certeza que deseja remover este comentário?');"><i
                                        class="fas fa-trash-alt text-escopos-home"></i></a>
                            @endif
                            <a class="text-info" href="#"><b></b></a> <a class="text-logo-color"
                                href="{{ route('user.profile', $comentario->user_id) }}"><b>{{ $comentario->users->name }}</b></a>
                            [{{ $comentario->created_at }}]
                            <b class="text-danger">No.{{ $comentario->id }}</b>

                            @foreach ($comentarios as $item)
                                @if ($item->coment_id === $comentario->id)
                                    <a class="text-escopos-home" href="#{{ $item->id }}"><u>>>{{ $item->id }}</u></a>
                                @endif
                            @endforeach
                            <!--form-->

                        <div class="dropdown justify-content-end">
                            <a class="text-escopos-home" type="button" id="dropdownMenu2" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                [responder]
                            </a>

                            <div class="dropdown-menu bg-card-headers border-escopos-home" aria-labelledby="dropdownMenu2">
                                <form action="{{ action('ComentarioController@store') }}" method="POST" class="px-4 py-3">
                                    @csrf
                                    <input type="hidden" name="id">
                                    <input type="hidden" name="thread_id" value="{{ $comentario->thread_id }}">
                                    <input type="hidden" name="coment_id" value="{{ $comentario->id }}">
                                    <input type="hidden" name="user_id" value=" {{ Auth::id() }} ">
                                    <div class="form-group">
                                        <label for="exampleDropdownFormEmail2" class="text-escopos-home"><b>Imagem:
                                                <small>(opcional)</small></b></label>
                                        <input name="image" type="text"
                                            class="form-control border border-escopos-home bg-bg-boards"
                                            id="exampleDropdownFormEmail2" placeholder="http://[...] max | 255"
                                            maxlength="255">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleDropdownFormPassword2"
                                            class="text-escopos-home"><b>Comentário:</b></label>
                                        <input name="comentario" type="text"
                                            class="form-control border border-escopos-home bg-bg-boards"
                                            id="exampleDropdownFormPassword2" placeholder="coment[...]max | 255"
                                            maxlength="255">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit"
                                            class="btn btn-escopos-home border border-escopos-home">Confirmar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--form-->

                        </p>
                    </div>
                    @if (!@empty($comentario->image))
                        <div class="col-md-4 media mt-0">
                            <a href="https://yandex.com/images/search?rpt=imageview&url={{ $comentario->image }}"
                                target="_blank" data-toggle="tooltip" data-placement="bottom"
                                title="Clique para pesquisar por esta imagem!">
                                <img src="{{ $comentario->image }}" alt="" class="mr-2 " width='200rem'
                                    onMouseOver="aumenta(this)" onMouseOut="diminui(this)">
                            </a>
                        </div>
                    @endif
                    <div class="col md-4">
                        <p class="pb-3 mb-0 lh-125">
                            @if (!empty($comentario->coment_id))
                                <p><a class="text-danger" href="#{{ $comentario->coment_id }}"><b>
                                            >>No.{{ $comentario->coment_id }}</b></a>
                                </p>
                            @else
                                <p><a class="text-danger" href="#thread-{{ $comentario->thread_id }}"> <b>>>No. (OP)
                                            {{ $comentario->thread_id }}</b></a></p>
                            @endif


                            {{ $comentario->comentario }}

                        </p>
                    </div>
                </div>
                <hr class="mb-1 mt-1">
            @endforeach
            <!--card-->

        </div>
    </main>
@endsection



<!--https://wallpaperaccess.com/full/2413558.jpg








-->
