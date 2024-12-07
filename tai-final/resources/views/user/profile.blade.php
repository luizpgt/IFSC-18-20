@extends('layout.master')

@section('card-headers')

    <li class="breadcrumb-item"><a class="text-success" href="{{ route('index') }}">Home</a></li>
    @if ($user->id === Auth::id())
        <li class="breadcrumb-item"><a class="text-assuntos-home" href="{{ route('user.edit', Auth::id()) }}">Editar
                Conta</a>
        </li>

        <li class="breadcrumb-item"><a class="text-assuntos-home"
                href="{{ route('user.password.edit', Auth::id()) }}">Alterar
                Senha</a></li>

        <li class="breadcrumb-item" data-toggle="tooltip" data-placement="bottom" title="Sair de sua sessão atual"><a
                class="text-escopos-home" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                                                                      document.getElementById('logout-form').submit();">
                {{ __('SAIR') }}
            </a>
    @endif
    @if ($user->id !== Auth::id())
        <li class="breadcrumb-item"><a class="text-escopos-home"
                href="{{ route('user.profile', Auth::id()) }}">{{ Auth::user()->name }}</a></li>
    @endif
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>

@endsection

@section('header')

    <div class="row justify-content-center">
        <h2 class="mb-3 mr-4 ml-4 text-escopos-home">Perfil/ <b>{{ $user->name }}</b></h2>
    </div>
    @if ($user->id === Auth::id())
        <div class="row justify-content-center">
            <p class="mb-3 mr-4 ml-4 text-escopos-home" data-toggle="tooltip" data-placement="bottom"
                title="Seu e-mail não pode ser visto por outros usuários!"><u>{{ $user->email }}</u></p>
        </div>
        <div class="row justify-content-center">
            <a href="{{ action('UserController@telaSearch') }}" class="text-assuntos-home"><b>[</b>Busque por outros
                usuários <b>]</b></a>
        </div>
    @endif

    <hr>
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
                        <!-- List group -->
                        <div class="list-group list-group-horizontal" id="myList" role="tablist">
                            <a class="list-group-item list-group-item-action active border-card-headers bg-card-headers text-escopos-home"
                                data-toggle="list" href="#threads" role="tab">Threads iniciadas</a>
                            <a class="list-group-item list-group-item-action border-card-headers bg-card-headers text-escopos-home"
                                data-toggle="list" href="#coments" role="tab">Comentários</a>
                        </div>
                    </div>
                    <div class="card-body">

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active " id="threads" role="tabpanel">
                                <!--card-->

                                @foreach ($threads as $thread)
                                    <hr class="mb-1 mt-1">
                                    <div class=" bg-bg-boards border border-escopos-home">
                                        <div class="col md-4 mb-0">
                                            <p class="mb-0 text-gray-dark"><a class="text-info"
                                                    type="button"><b>{{ $thread->title }}!</b></a> <a
                                                    class="text-logo-color" type="button"><b>{{ $thread->user_id }}</b></a>
                                                [{{ $thread->created_at }}]
                                                No.{{ $thread->id }} <a
                                                    href="{{ route('discuss.show', $thread->id) }}">[Clique Aqui]</a> para
                                                ver mais</p>
                                        </div>
                                        <div class="col-md-4 media mt-0">
                                            <a href="{{ $thread->image }}">
                                                <img src="{{ $thread->image }}" alt="" class="mr-2 " width='200rem'
                                                    onMouseOver="aumenta(this)" onMouseOut="diminui(this)">
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
                            <div class="tab-pane" id="coments" role="tabpanel">
                                <!--card-->

                                @foreach ($comentarios as $comentario)
                                    <hr class="mb-1 mt-1">
                                    <div class=" bg-bg-boards border border-escopos-home" id="{{ $comentario->id }}">
                                        <div class="col md-4 mb-0">
                                            <p class="mb-0 text-gray-dark"><a class="text-info" href="#"><b></b></a> <a
                                                    class="text-logo-color"
                                                    href="{{ route('user.profile', $comentario->user_id) }}"><b>{{ $comentario->users->name }}</b></a>
                                                [{{ $comentario->created_at }}]
                                                No.{{ $comentario->id }} <a
                                                    href=" {{ route('discuss.show', $comentario->thread_id) }}">[Clique
                                                    Aqui]</a> para ver mais</p>
                                        </div>
                                        <div class="col-md-4 media mt-0">
                                            <a href="{{ $comentario->image }}">
                                                <img src="{{ $comentario->image }}" alt="" class="mr-2 " width='200rem'
                                                    onMouseOver="aumenta(this)" onMouseOut="diminui(this)">
                                            </a>
                                        </div>
                                        <div class="col md-4">
                                            <p class="pb-3 mb-0 lh-125">
                                                {{ $comentario->comentario }}
                                            </p>
                                        </div>
                                    </div>
                                    <hr class="mb-1 mt-1">
                                @endforeach
                                {{ $comentarios->links() }}
                                <!--card-->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col">
            </div>
        </div>
    </div>
    </div>

@endsection
