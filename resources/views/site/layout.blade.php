<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{--Icones--}}
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    {{--css e javascript--}}
    @vite(['resources/css/app.css','resources/js/app.js'])

    {{--css materialise--}}
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">


    {{--Font Wesome--}}
    <script src="https://kit.fontawesome.com/b0c754ca4f.js" crossorigin="anonymous"></script>

</head>
<body>

{{--navbar--}}
@include('partials.navbar')

{{--slide--}}
@include('partials.banner-slide')


{{--conteudo principal--}}
@yield('content')

{{--Rodapé--}}
@include('partials.footer')

{{--jquery--}}
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>


{{--javascript materalise--}}
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>





</body>
</html>
