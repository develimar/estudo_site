@extends('site.layout')

@section('title', 'Página Home')
@section('content')

    <div class="row container">

        <div class="col s12">
            <p class="flow-text center-align">Lorem ipsum dolor sit amet.</p>
        </div>

        <div class="divider col s12"></div>

        <p>&nbsp;</p>

        {{--card 1--}}
        <div class="col s12 m6 l4">
            <div class="card">
                <div class="card-image">
                    <img src="{{asset('images/cards/01.jpg')}}" alt="[primeira]" title="Primero curso"
                         class="responsive-img materialboxed">
                </div>
                <div class="card-content">
                    <span class="card-title">Primeiro Curso</span>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, maiores.
                    </p>
                </div>
                <div class="card-action">
                    <a href="#" class="btn btn-small indigo">Saiba Mais</a>
                </div>
            </div>
        </div>

        {{--card 2--}}
        <div class="col s12 m6 l4">
            <div class="card">
                <div class="card-image">
                    <img src="{{asset('images/cards/02.jpg')}}" alt="[primeira]" title="Primero curso"
                         class="responsive-img materialboxed">
                </div>
                <div class="card-content">
                    <span class="card-title">Primeiro Curso</span>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, maiores.
                    </p>
                </div>
                <div class="card-action">
                    <a href="#" class="btn btn-small indigo">Saiba Mais</a>
                </div>
            </div>
        </div>

        {{--card 3--}}
        <div class="col s12 m12 l4">
            <div class="card">
                <div class="card-image">
                    <img src="{{asset('images/cards/03.jpg')}}" alt="[primeira]" title="Primero curso"
                         class="responsive-img materialboxed">
                </div>
                <div class="card-content">
                    <span class="card-title">Primeiro Curso</span>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, maiores.
                    </p>
                </div>
                <div class="card-action">
                    <a href="#" class="btn btn-small indigo">Saiba Mais</a>
                </div>
            </div>
        </div>

    </div>

    <p>&nbsp;</p>

    <div class="row container">
        <div class="col s12">
            <div class="divider"></div>
        </div>
    </div>

    <p>&nbsp;</p>

    <div class="row container">
        <section class="col s12">
            <h1 class="flow-text ligh justifyt">Lorem ipsum dolor sit amet.</h1>
            <p class="flow-text light justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda at distinctio ea non numquam odio quaerat quas sed tempora unde? Ad atque ipsam officia possimus quis suscipit tempora. Explicabo, reiciendis.</p>
            <p class="flow-text justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci cum dignissimos, dolorem earum exercitationem incidunt itaque perspiciatis possimus provident reprehenderit.</p>

            <p>
                <a href="#" class="waves-effect waves-light btn btn-small indigo ">Saiba Mais</a>
                <a href="#" class="waves-effect waves-light btn btn-small purple ">Cadastre-se</a> </p>
        </section>

    </div>


    <div class="parallax-container">
        <div class="parallax">
            <img src="{{asset('images/fundo/bakcground.jpg')}}" alt="[image]" title="'Cursos" class="responsive-img">
        </div>
    </div>

    <p>&nbsp;</p>

    <div class="row container">
        <div class="col s12 m6 l4 center-align">
            <img src="{{asset('images/faces/01.jpg')}}" alt="[imagem]" title="Curso" class="responsive-img circle">
            <p class="flow-text">
                Bia
            </p>
            <p>
                <i class="fa-brands fa-facebook small"></i>
                <i class="fa-brands fa-square-instagram small"></i>
                <i class="fa-brands fa-tiktok small"></i>
            </p>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="col s12 m6 l4 center-align">
            <img src="{{asset('images/faces/02.jpg')}}" alt="[imagem]" title="Curso" class="responsive-img circle">
            <p class="flow-text">
                Julia
            </p>
            <p>
                <i class="fa-brands fa-facebook small"></i>
                <i class="fa-brands fa-square-instagram small"></i>
                <i class="fa-brands fa-tiktok small"></i>
            </p>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="col s12 m6 l4 center-align">
            <img src="{{asset('images/faces/03.jpg')}}" alt="[imagem]" title="Curso" class="responsive-img circle">
            <p class="flow-text">
                Carla
            </p>
            <p>
                <i class="fa-brands fa-facebook small"></i>
                <i class="fa-brands fa-square-instagram small"></i>
                <i class="fa-brands fa-tiktok small"></i>
            </p>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
    </div>


@endsection
