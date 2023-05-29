<x-mail::message>
# Você acaba de receber uma mensagem do site.

<p>
    Nome: {{$data['nome']}}<br>
    Telefone: {{$data['telefone']}}<br>
    Mensagem: {{$data['mensagem']}}
</p>

<x-mail::button :url="'http://google.com.br'">
Visite nosso Site
</x-mail::button>

{{ config('app.name') }}
</x-mail::message>
