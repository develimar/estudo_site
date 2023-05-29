@extends('site.layout')

@section('title', 'Galeria de Fotos')
@section('content')

    <div class="row container">
        <div class="col s12">
            <h1 class="flow-text blue-text center-align">Galeria de Fotos</h1>
        </div>
    </div>

    <div class="row container">
        @php
            $fotos = [
                '01.jpg',
                '02.jpg',
                '03.jpg',
                '04.jpg',
                '05.jpg',
                '06.jpg',
                '07.jpg',
                '08.jpg',

                ];
            $titulo = [
                'Foto do Evento 01',
                'Foto do Evento 02',
                'Foto do Evento 03',
                'Foto do Evento 04',
                'Foto do Evento 05',
                'Foto do Evento 06',
                'Foto do Evento 07',
                'Foto do Evento 08',

];
        @endphp

        @for($galeria = 0; $galeria < count($fotos); $galeria++)
            <div class="col s12 m6 l3">
                <div class="card">
                    <div class="card-image">
                        <img src="{{asset('images/galeria/'.$fotos[$galeria])}}" alt="[image]" class="responsive-img materialboxed">
                        <span class="card-title">{{$titulo[$galeria]}}</span>
                    </div>
                </div>
            </div>
        @endfor
    </div>

    <div class="row container">
        <div class="col s12 m6">
            <h1 class="flow-text">Lorem ipsum dolor sit.</h1>
            <p class="paragrafo">
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquid, architecto consequatur debitis distinctio eaque eos esse exercitationem expedita facilis fugit itaque nam nisi odit officia provident recusandae rem reprehenderit rerum similique suscipit ullam velit vero voluptates voluptatibus. Aspernatur consequatur corporis cumque ducimus itaque, minima minus modi nulla porro ullam.
            </p>
            <p class="right-align"><a href="#" class="btn btn-small">saiba mais</a></p>
        </div>
        <div class="col s12 m6">
            <img src="{{asset('images/galeria/01.jpg')}}" alt="[image]" class="responsive-img">
        </div>
    </div>

    <div class="row container">
        <div class="col s12 m6">
            <img src="{{asset('images/galeria/02.jpg')}}" alt="[image]" class="responsive-img">
        </div>
        <div class="col s12 m6">
            <h1 class="flow-text">Lorem ipsum dolor sit.</h1>
            <p class="paragrafo">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquid, architecto consequatur debitis distinctio eaque eos esse exercitationem expedita facilis fugit itaque nam nisi odit officia provident recusandae rem reprehenderit rerum similique suscipit ullam velit vero voluptates voluptatibus. Aspernatur consequatur corporis cumque ducimus itaque, minima minus modi nulla porro ullam.
            </p>
            <p class="paragrafo"><a href="#" class="btn btn-small">saiba mais</a></p>
        </div>
    </div>
@endsection
