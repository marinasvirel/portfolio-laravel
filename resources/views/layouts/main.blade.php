<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Портфолио</title>
  <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
</head>

<body>


<x-header></x-header>

@yield('content')

<x-footer></x-footer>

<script src="{{ asset('asset/js/index.js') }}"></script>

</body>

</html>
