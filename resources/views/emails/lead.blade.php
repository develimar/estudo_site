<x-mail::message>
# Parabéns, você recebeu um novo lead

<p>
    Nome: {{$data['nome']}}<br>
    Telefone: {{$data['telefone']}}<br>
    Email: {{$data['email']}}<br>
</p>

<x-mail::button :url="'https://google.com.br'">
Acesse o Site clicando aqui.
</x-mail::button>

{{date('d/m/Y')}}<br>
{{ config('app.name') }}
</x-mail::message>
