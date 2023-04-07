@extends('layouts.main')
@section('content')
    <main>
        {{-- @dd($data['data']['user']['0']) --}}
        <section class="prime">
            <div class="container prime-container">
                <div class="prime-img">
                    <img class="cat" src="{{ asset($data['data']['user']['0']->avatar) }}" alt="cat">
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
        <div class="container">
            <div class="sliders-container">
                <section class="competencies">
                    <h2 class="competencies-title">Компетенции</h2>
                    <ul class="competencies-list">
                        @foreach ($data['data']['competencies'] as $competence)
                            <li class="competencies-item {{ $competence->class }}">
                                <strong>{{ $competence->name }}</strong>
                            </li>
                        @endforeach
                    </ul>
                </section>
                <section class="certificates">
                    <h2 class="certificates-title">Сертификаты</h2>
                    <div class="swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <a href="{{ asset('asset/pdf/certificate-1.pdf') }}" target="_blank" rel="noopener noreferrer">
                                    <img src="{{ asset('asset/img/context/certificate-1.svg') }}" alt="img">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('asset/pdf/certificate-2.pdf') }}" target="_blank" rel="noopener noreferrer">
                                    <img src="{{ asset('asset/img/context/certificate-2.svg') }}" alt="img">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="{{ asset('asset/pdf/certificate-3.pdf') }}" target="_blank" rel="noopener noreferrer">
                                    <img src="{{ asset('asset/img/context/certificate-3.svg') }}" alt="img">
                                </a>
                            </div>
                        </div>

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>

                    </div>
                </section>
            </div>
        </div>
        <section class="projects">
            <div class="container">
                <h2 class="project-title">Выполненные проекты</h2>
                <div class="swiper swiper-2">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide projects-slide">
                            <a href="https://github.com/marinasvirel/portfolio-laravel" target="_blank" rel="noopener noreferrer">
                                <img src="{{ asset('asset/img/context/project-1.jpg') }}" alt="img">
                            </a>
                        </div>
                        <div class="swiper-slide projects-slide">
                            <a href="https://github.com/marinasvirel/portfolio-laravel" target="_blank" rel="noopener noreferrer">
                                <img src="{{ asset('asset/img/context/project-2.jpg') }}" alt="img">
                            </a>
                        </div>
                        <div class="swiper-slide projects-slide">
                            <a href="https://github.com/marinasvirel/portfolio-laravel" target="_blank" rel="noopener noreferrer">
                                <img src="{{ asset('asset/img/context/project-1.jpg') }}" alt="img">
                            </a>
                        </div>
                        <div class="swiper-slide projects-slide">
                            <a href="https://github.com/marinasvirel/portfolio-laravel" target="_blank" rel="noopener noreferrer">
                                <img src="{{ asset('asset/img/context/project-2.jpg') }}" alt="img">
                            </a>
                        </div>
                    </div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                </div>
            </div>
        </section>
        <section class="calc">
            <div class="container">
                <h2 class="calc-title">Калькулятор</h2>
                <div class="calc-frame">
                    <div class="calc-sreen">
                      <span id="total-price">0</span>
                    </div>
                    <div class="calc-btns">
                      <button id="calc-replay">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48">
                          <path
                            d="M780 856V682q0-54-38-92t-92-38H234l154 154-42 42-226-226 226-226 42 42-154 154h416q78 0 134 55.5T840 682v174h-60Z" />
                        </svg>
                      </button>
                      <button id="calc-restart">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48">
                          <path
                            d="M451 934q-123-10-207-101t-84-216q0-77 35.5-145T295 361l43 43q-56 33-87 90.5T220 617q0 100 66 173t165 84v60Zm60 0v-60q100-12 165-84.5T741 617q0-109-75.5-184.5T481 357h-20l60 60-43 43-133-133 133-133 43 43-60 60h20q134 0 227 93.5T801 617q0 125-83.5 216T511 934Z" />
                        </svg>
                      </button>
                    </div>
                    <div class="calc-box">
                      <form class="calc">
                        <h3 class="calc-title">Какой функционал должен быть у вашего сайта?</h3>
                        <div class="calc-item">
                          <input id="landing" type="radio" name="functional" value="20000">
                          <label for="landing">Лендинг</label>
                        </div>
                        <div class="calc-item">
                          <input id="cocial" type="radio" name="functional" value="70000">
                          <label for="cocial">Социальная сеть</label>
                        </div>
                        <div class="calc-item">
                          <input id="blog" type="radio" name="functional" value="50000">
                          <label for="blog">Блог</label>
                        </div>
                        <div class="calc-item">
                          <input id="shop" type="radio" name="functional" value="60000">
                          <label for="shop">Интернет-магазин</label>
                        </div>
                      </form>
                      <form class="calc">
                        <h3 class="calc-title">На какой стадии разработки находится ваш сайт?</h3>
                        <div class="calc-item">
                          <input id="starting" type="radio" name="stage" value="1.8">
                          <label for="starting">Сайта нет, все нужно делать с нуля</label>
                        </div>
                        <div class="calc-item">
                          <input id="maquette" type="radio" name="stage" value="1.6">
                          <label for="maquette">Свертать и запрограммировать</label>
                        </div>
                        <div class="calc-item">
                          <input id="makeup" type="radio" name="stage" value="1.3">
                          <label for="makeup">Нужно только сверстать</label>
                        </div>
                        <div class="calc-item">
                          <input id="programming" type="radio" name="stage" value="1.5">
                          <label for="programming">Нужно только запрограммировать</label>
                        </div>
                      </form>
                      <form class="calc">
                        <h3 class="calc-title">Под какие устройства вы планируете адаптировать ваш сайт?</h3>
                        <div class="calc-item">
                          <input id="mobile" type="radio" name="adaptive" value="1.1">
                          <label for="mobile">Только для мобильных</label>
                        </div>
                        <div class="calc-item">
                          <input id="desktop" type="radio" name="adaptive" value="1.2">
                          <label for="desktop">Только для десктопа</label>
                        </div>
                        <div class="calc-item">
                          <input id="all" type="radio" name="adaptive" value="1.3">
                          <label for="all">Для всех</label>
                        </div>
                      </form>
                      <form class="calc">
                        <h3 class="calc-title">Какие дополнительные элементы будут на вашем сайте?</h3>
                        <div class="calc-item">
                          <input id="slider" type="checkbox" name="option" value="5000">
                          <label for="slider">Слайдер</label>
                        </div>
                        <div class="calc-item">
                          <input id="video" type="checkbox" name="option" value="2000">
                          <label for="video">Видео</label>
                        </div>
                        <div class="calc-item">
                          <input id="audio" type="checkbox" name="option" value="1000">
                          <label for="audio">Аудио</label>
                        </div>
                        <div class="calc-item">
                          <input id="feedback" type="checkbox" name="option" value="4000">
                          <label for="feedback">Обратная связь</label>
                        </div>
                        <div class="calc-item">
                          <input id="card" type="checkbox" name="option" value="3000">
                          <label for="card">Карта геолокации</label>
                        </div>
                      </form>
                    </div>
                  </div>
            </div>
        </section>
        </div>
        <section class="feedback">
            {{-- <x-main.feedback></x-main.feedback> --}}
                <form class="feedback-form" action="" method="post">
                    <h2 class="feedback-title">Обратная связь</h2>
                    @csrf
                    <input name="name" type="text" placeholder="Ваше имя" required>
                    <input name="email" type="emai" placeholder="Ваш e-mail" required>
                    <textarea name="message" placeholder="Ваше сообщение" required></textarea>
                    <button type="submit" name="send">Отправить</button>
                </form>
        </section>
    </main>
@endsection
