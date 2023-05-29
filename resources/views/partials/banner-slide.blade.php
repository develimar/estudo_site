<div class="slider">
    <ul class="slides">
        <li>
            <img src="{{asset('images/slide01.jpg')}}" alt="Tecno" title="Aprendendo Tecnologia">
            <div class="caption left-align">
                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                <h5>Aliquid atque beatae dolor laborum
                    molestiae nam natus quaerat voluptas. Asperiores commodi deleniti, ducimus ipsam laudantium nemo
                    odio placeat tempora voluptas voluptatum.</h5>
                <a href="#modal-lead" class="btn btn-small indigo modal-trigger">quero me cadastrar</a>
            </div>
        </li>
        <li>
            <img src="{{asset('images/slide02.jpg')}}" alt="Tecno" title="Tecnologia ao seu Alcance">
            <div class="caption right-align">
                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                <h5>Aliquid atque beatae dolor laborum
                    molestiae nam natus quaerat voluptas. Asperiores commodi deleniti, ducimus ipsam laudantium nemo
                    odio placeat tempora voluptas voluptatum.</h5>
                <a href="#modal-lead" class="btn btn-small indigo modal-trigger">quero me cadastrar</a>
            </div>
        </li>
        <li>
            <img src="{{asset('images/slide03.jpg')}}" alt="Tecno" title="Tudo em Tecnologia">
            <div class="caption left-align">
                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
                <h5>Aliquid atque beatae dolor laborum
                    molestiae nam natus quaerat voluptas. Asperiores commodi deleniti, ducimus ipsam laudantium nemo
                    odio placeat tempora voluptas voluptatum.</h5>
                <a href="#modal-lead" class="btn btn-small indigo modal-trigger">quero me cadastrar</a>
            </div>
        </li>
    </ul>
</div>

<div class="modal" id="modal-lead">
    <div class="modal-content">
        <h3 class="flow-text center-align">Preencha todos os campos</h3>

        <form action="{{route('lead')}}" method="post">
            @csrf
            <div class="row">

                {{--campo nome--}}
                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">person</i>
                    <input type="text" class="validate" name="nome" id="nome" value="{{old('nome')}}" required>
                    <label for="nome">Nome</label>
                </div>

                {{--campo cellphone--}}
                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">phone_iphone</i>
                    <input type="tel" class="validate" name="telefone" id="telefone" value="{{old('telefone')}}" required>
                    <label for="telefone">Telefone</label>
                </div>

                {{--campo email--}}
                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input type="email" class="validate" name="email" id="email" value="{{old('email')}}" required>
                    <label for="email">E-mail</label>
                </div>

                {{--botoes--}}
                <div class="input-field col s12 m6">
                    <input type="submit" value="enviar" class="btn btn-small blue">
                    <input type="reset" value="limpar" class="btn btn-small red">
                </div>
            </div>

        </form>
    </div>
</div>
