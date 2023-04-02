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


  <h1>Обратная связь</h1>
  @if (session('success'))
    <div class="alert alert-success" role="alert">
      {{ session('success') }}
    </div>
  @endif
  @if ($errors->any())
    <div class="alert alert-danger" role="alert">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
  <form method="post" action="{{ route('feedback.send') }}">
    @csrf
    <div class="form-group">
      <input type="text" class="form-control" name="name" placeholder="Имя, фамилия"
             required maxlength="100" value="{{ old('name') ?? '' }}">
    </div>
    <div class="form-group">
      <input type="email" class="form-control" name="email" placeholder="Адрес почты"
             required maxlength="100" value="{{ old('email') ?? '' }}">
    </div>
    <div class="form-group">
        <textarea class="form-control" name="message" placeholder="Ваше сообщение"
                  required maxlength="500" rows="3">{{ old('message') ?? '' }}</textarea>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Отправить</button>
    </div>
  </form>


</body>

</html>
