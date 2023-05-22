<nav class="indigo">
    <div class="nav-wrapper container">

        {{--Menu hamburguer--}}
        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>

        <a class="brand-logo light" href="{{route('home')}}">Estudo</a>

        {{--Menu para Desktop--}}
        <ul class="right hide-on-med-and-down">
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('servicos')}}">Serviços</a></li>
            <li><a href="{{route('galeria')}}">Galeria</a></li>
            <li><a href="{{route('contato')}}">Contato</a></li>
        </ul>

        {{--Menu para Celulares--}}
        <ul id="slide-out" class="sidenav">
            <li>
                <div class="user-view">
                    <div class="background">
                        <img src="{{asset('images/sidenav-image.jpg')}}" alt="[imagem]" title="Estudo">
                    </div>
{{--                    <a href="#user"><img class="circle" src="images/yuna.jpg"></a>--}}
                    <a href="#name"><span class="white-text name">Estudo</span></a>
                    <a href="#email"><span class="white-text email">elimar.pc@gmail.com</span></a>
                </div>
            </li>
            <li><a href="#">Menu</a></li>
            <li><div class="divider"></div></li>
            <li><a href="{{route('home')}}"><i class="material-icons indigo-text">home</i>Home</a></li>
            <li><a href="{{route('servicos')}}"><i class="material-icons indigo-text">miscellaneous_services</i>Serviços</a></li>
            <li><a href="{{route('galeria')}}"><i class="material-icons indigo-text">photo_library</i>Galeria</a></li>
            <li><a href="{{route('contato')}}"><i class="material-icons indigo-text">alternate_email</i>Contato</a></li>
        </ul>


    </div>
</nav>
