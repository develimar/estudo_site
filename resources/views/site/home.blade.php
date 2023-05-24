@extends('site.layout')

@section('title', 'Página Home')
@section('content')

    <div class="row container">

        <div class="col s12">
            <p class="flow-text center-align">Lorem ipsum dolor sit amet.</p>
        </div>

        <div class="divider col s12"></div>

        <p>nbs</p>

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

@endsection
