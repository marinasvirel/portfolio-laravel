@extends('layouts.main')
@section('content')
<main>
{{--  @dd($data['data']['user']['0'])--}}
  <section class="prime">
    <div class="container prime-container">
      <div class="prime-img">
        {{-- <img class="cat" src="{{ asset('asset/img/context/cat-test.jpg') }}" alt="cat">  --}}
      </div>
      <div class="prime-text-box">
        <div class="text">
          <h1 class="prime-heading">
            <span class="name">{{ $data['data']['user']['0']->name }}</span>
            <span class="surname">{{ $data['data']['user']['0']->surname }}</span>
          </h1>
          <h2 class="prime-title">{{ $data['data']['user']['0']->profession }}</h2>
          <p class="prime-text"> {{ $data['data']['user']['0']->greeting }}</p>
        </div>
      </div>
    </div>
  </section>
  <div class="main-box container">
    <section class="certificates">
      <h2 class="certificates-title">Сертификаты</h2>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut explicabo dolor, incidunt officia error
      sequi repellat beatae modi architecto dolorum, aliquid, nobis recusandae cum odio. Laborum reiciendis
      vero doloremque! Laudantium!
      <!-- вставить адаптивный слайдер !!!-->
      <div class="certificates-slider">
        {{-- <img src="img/decor/certificate.svg" alt="certificate"> --}}
      </div>
    </section>
    <section class="projects">
      <h2 class="project-title">Выполненные проекты</h2>
      <!-- Вставить адаптивный слайдер !!!-->
      <div class="project-slider">
        <ul class="project-list">
          <li class="project-item">
            {{-- <img src="img/decor/project.png" alt="pro"> --}}
          </li>
          <li class="project-item">
            {{-- <img src="img/decor/project.png" alt="pro"> --}}
          </li>
        </ul>
      </div>
    </section>
    <section class="competencies">
      <h2 class="competencies-title">Компетенции</h2>
      <div class="competencies-img">
        <ul class="competencies-list">
          @foreach($data['data']['competencies'] as $competence)
            <li class="competencies-list-li {{ $competence->class }}">{{ $competence->name }}</li>
          @endforeach
        </ul>
      </div>
    </section>
    <section class="calculator">
      <h2 class="calculator-title">Калькулятор</h2>
    </section>
  </div>
  <section class="feedback">
    <x-main.feedback></x-main.feedback>
  </section>
</main>
@endsection
