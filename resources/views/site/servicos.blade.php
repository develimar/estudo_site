@extends('site.layout')

@section('title', 'Serviços')
@section('content')

    <div class="row container">
        <div class="col s12 l6 push-l3 center-align">
            <h1 class="flow-text blue-text">Nossos Serviços</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda consequuntur deleniti hic in omnis quis quisquam sequi voluptatum! Ipsum, quam!</p>
        </div>
    </div>

    <p>&nbsp;</p>
    <div class="row container">
        <div class="col s12 l6">
            <div class="row">
                <div class="col s12 l6 center-align grey lighten-4">
                    <i class="fa-solid fa-truck-fast blue-text text-light-2 medium"></i>
                        <p class="flow-text">Lorem ipsum dolor sit amet.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, provident!</p>

                </div>
                <div class="col s12 l6 center-align">
                    <i class="fa-solid fa-car blue-text text-light-2 medium"></i>
                        <p class="flow-text">Lorem ipsum dolor sit amet.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, provident!</p>

                </div>
                <div class="col s12 l6 center-align">
                    <i class="fa-solid fa-lock blue-text text-light-2 medium"></i>
                        <p class="flow-text">Lorem ipsum dolor sit amet.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, provident!</p>

                </div>
                <div class="col s12 l6 center-align grey lighten-4">
                    <i class="fa-solid fa-folder-open blue-text text-light-2 medium"></i>
                        <p class="flow-text">Lorem ipsum dolor sit amet.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, provident!</p>

                </div>
            </div>


        </div>

        <div class="col s12 l6">
            <img src="{{asset('images/themes/01.jpg')}}" alt="[imagem]" title="Trabalho" class="responsive-img materialboxed">
        </div>
    </div>
    <p>&nbsp;</p>

    <div class="row container">
        <div class="col s12 center-align">
            <h1 class="flow-text blue-text">Planos</h1>
            <p>&nbsp;</p>


            <div class="col s12 l4 hoverable">
                <div class="card center-align">
                    <div class="card center-align">
                        <i class="fa-solid fa-sack-dollar medium grey-text"></i>
                        <div class="card-content">
                            <span class="card-title">Basic R$89,90</span>
                            <p>Lorem ipsum dolor sit amet,  elit. Repellat, temporibus!</p>
                        </div>
                        <div class="card-action">
                            <a href="#" class="btn orange">saiba mais</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col s12 l4 hoverable">
                <div class="card center-align">
                    <div class="card center-align">
                        <i class="fa-solid fa-hand-holding-dollar medium grey-text"></i>
                        <div class="card-content">
                            <span class="card-title">Basic R$89,90</span>
                            <p>Lorem ipsum dolor sit amet,  elit. Repellat, temporibus!</p>
                        </div>
                        <div class="card-action">
                            <a href="#" class="btn orange">saiba mais</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col s12 l4 hoverable">
                <div class="card center-align">
                    <div class="card center-align">
                        <i class="fa-brands fa-bitcoin medium grey-text"></i>
                        <div class="card-content">
                            <span class="card-title">Basic R$89,90</span>
                            <p>Lorem ipsum dolor sit amet,  elit. Repellat, temporibus!</p>
                        </div>
                        <div class="card-action">
                            <a href="#" class="btn orange">saiba mais</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
