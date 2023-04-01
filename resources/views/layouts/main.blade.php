<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Портфолио</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
  <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
  {{-- <link rel="stylesheet" href="{{ asset('asset/css/competence.css') }}"> --}}
</head>

<body>


<x-main.header></x-main.header>

@yield('content')

<x-main.footer></x-main.footer>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="{{ asset('asset/js/index.js') }}"></script>

</body>

</html>
