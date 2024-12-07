<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--bootstrap-->
    <link rel="stylesheet" href="{{ asset('site/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="sortcut icon" href="{{ url('img/main/ban-131994968036235681.png') }}" type="image/x-icon" />

    <title>Fórum</title>
</head>

<body class="bg-bg-home">

    <style>
        body {
            overflow-x: hidden;
        }

    </style>
    <!--top-->
    <section id="top"></section>
    <!--/top-->

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-card-headers">


            @yield('card-headers')
        </ol>
    </nav>
    <div class="d-flex justify-content-end mr-2">
        <a class="nav-item text-info" href="#bottom">[Bottom]</a>
    </div>

    <hr>


    @yield('header')
    @yield('content')

    <hr>
    <div class="nav justify-content-end mr-2">
        <a class="nav-item text-info" href="#top">[Top]</a>
    </div>
    <!--bottom-->
    <section id="bottom"></section>


    <ol class="breadcrumb bg-card-headers mb-0 mt-2 justify-content-center">
        <li class="breadcrumb-item mb-0 mt-0"><small><a class="text-success" href="{{ route('contato') }}">All Rights
                    Reserved </a><i class="text-success far fa-copyright"></i></small></li>
        @yield('footer')

    </ol>


    <!--/bottom-->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="{{ asset('site/jquery.js') }}"></script>
    <script src="{{ asset('site/bootstrap.js') }}"></script>
</body>

</html>
