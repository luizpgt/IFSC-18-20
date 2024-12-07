@extends('layout.master')

@section('card-headers')
    <li class="breadcrumb-item"><a class="text-success" href="{{ route('index') }}">Home</a></li>
@endsection

@section('header')
    <!--titulo da pagina-->
    <div class="row justify-content-center">

        <h2>
            <i class="fas fa-user-ninja text-logo-color"></i>
        </h2>
        <h2 class="mb-3 mr-4 ml-4 text-escopos-home"><b>CONTATO</b></h2>
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
    <style>
        @media (max-width: 575.98px) {

            #contatti {
                padding-bottom: 800px;
            }

            #contatti .maps iframe {
                width: 100%;
                height: 450px;
            }
        }


        @media (min-width: 576px) {

            #contatti {
                padding-bottom: 800px;
            }

            #contatti .maps iframe {
                width: 100%;
                height: 450px;
            }
        }

        @media (min-width: 768px) {

            #contatti {
                padding-bottom: 350px;
            }

            #contatti .maps iframe {
                width: 100%;
                height: 850px;
            }
        }

        @media (min-width: 992px) {
            #contatti {
                padding-bottom: 200px;
            }

            #contatti .maps iframe {
                width: 100%;
                height: 700px;
            }
        }

    </style>

    <div class="row" id="contatti">
        <div class="container mt-5">

            <div class="row" style="height:550px;">
                <div class="col-md-6 maps">
                    <iframe class="border border-escopos-home"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1496.309391841436!2d-52.41909367864857!3d-26.876711295173163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e4c3b9615ad887%3A0xf16edbe6afb32dd5!2zSUZTQyBDw6JtcHVzIFhhbnhlcsOq!5e0!3m2!1spt-BR!2sbr!4v1606584770182!5m2!1spt-BR!2sbr"
                        frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                </div>
                <div class="col-md-6">

                    <div class="text-escopos-home">
                        <h2 class="text-uppercase mt-4 font-weight-bold text-escopos-home">Câmpus Xanxerê</h2>
                        <hr>
                        <div class="border border-escopos-home bg-bg-boards mb-0" style="width: 18rem;">
                            <p class="text-escopos-home mb-1 mt-1 mr-1 ml-2">Nosso câmpus está situado no Bairro
                                Veneza na rua Euclides Hack, 1603. Venha nos fazer uma visita!</p>
                        </div>
                        <iframe class="mt-2 maps border border-escopos-home" src="https://www.youtube.com/embed/tdy-K6rgY88"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                        <hr>
                        <i class="fas fa-phone mt-3"></i> <a type="button">(+33) 3333-3333</a><br>
                        <i class="fa fa-envelope mt-3"></i> <a
                            href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=DmwnWsTHqCbBzQxclnWXwZmfxTltFCfwVGcftSMFzrjXzVwgXcCbxvBtLKbqhpMQhwclLFjHBbgQ"
                            class="text-assuntos-home" target="_blank">contato.forum@forum.com.br</a><br>
                        <div class="my-4">
                            <a href="https://www.ifsc.edu.br/web/campus-xanxere/inicio" target="_blank">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/Instituto_Federal_de_Santa_Catarina_-_Marca_Vertical_2015.svg/70px-Instituto_Federal_de_Santa_Catarina_-_Marca_Vertical_2015.svg.png"
                                    alt=""></a>
                        </div>
                        <hr>
                        <i class="fab fa-dev mt-3"></i> <a type="button">Luiz Paulo Grafetti Terres</a><br>
                        <i class="fab fa-dev mt-3"></i> <a type="button">Morgana Rodrigues</a><br>


                    </div>
                </div>


            </div>

        </div>
    </div>

@endsection
