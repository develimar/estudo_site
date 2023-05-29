@extends('site.layout')

@section('title', 'Contato')
@section('content')

    <div class="row container">
        <div class="col s12">
            <h1 class="flow-text blue-text">Entre em Contato</h1>
        </div>

        <div class="col s12">
            <p>
                Dias de Funcionamento:<br>
                Seg a Sex - 08:00 às 22:00
            </p>
            <p>
                Telefone: (11) 4 4444-4444<br>
                E-mail: elimar.pc@gmail.com
            </p>
            <p>
                Endereço: Rua Joaquim Rodrigues Almeida 36<br>
                Cidade: Sete Lagoas - MG
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col s12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.749327221333!2d-44.22929052511679!3d-19.423233881854177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa64513793cb861%3A0x423195a0cb1f9acb!2sR.%20Joaquim%20Rodrigues%20de%20Almeida%2C%2036%20-%20Conj.%20Hab.%20Bernardo%20Valadares%20Vasconcelos%2C%20Sete%20Lagoas%20-%20MG%2C%2035702-359!5e0!3m2!1spt-BR!2sbr!4v1685384807083!5m2!1spt-BR!2sbr" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <div class="row container col s12">
        <form action="{{route('novocontato')}}" method="post">
            @csrf
            <div class="row">
                <div class="col s12 m6 input-field">
                    <i class="fa-solid fa-user prefix"></i>
                    <input type="text" name="nome" id="nome" required>
                    <label for="nome">Seu Nome</label>
                </div>

                {{--campo cellphone--}}
                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">phone_iphone</i>
                    <input type="tel" class="validate" name="telefone" id="telefone_contato" value="{{old('telefone')}}" required>
                    <label for="telefone">Seu Telefone</label>
                </div>

                <div class="input-field col s12">
                    <textarea id="textarea1" name="mensagem" class="materialize-textarea"></textarea>
                    <label for="textarea1">Textarea</label>
                </div>

                <div class="col s12 input-field">
                    <button type="submit" class="btn btn-small blue"><i class="fa-regular fa-paper-plane left"></i>Enviar</button>
                    <button type="reset" class="btn btn-small indigo"><i class="fa-solid fa-eraser left"></i>Limpar</button>
                </div>
            </div>
        </form>
    </div>
@endsection
