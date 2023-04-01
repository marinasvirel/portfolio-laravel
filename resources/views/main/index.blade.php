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
                                <img src="{{ asset('asset/img/context/certificate-1.svg') }}" alt="img">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('asset/img/context/certificate-2.svg') }}" alt="img">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('asset/img/context/certificate-3.svg') }}" alt="img">
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
                            <img src="{{ asset('asset/img/context/project-1.jpg') }}" alt="img">
                        </div>
                        <div class="swiper-slide projects-slide">
                            <img src="{{ asset('asset/img/context/project-2.jpg') }}" alt="img">
                        </div>
                        <div class="swiper-slide projects-slide">
                            <img src="{{ asset('asset/img/context/project-1.jpg') }}" alt="img">
                        </div>
                        <div class="swiper-slide projects-slide">
                            <img src="{{ asset('asset/img/context/project-2.jpg') }}" alt="img">
                        </div>
                    </div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                </div>
            </div>
        </section>
        <section class="calculator">
            <h2 class="calculator-title">Калькулятор</h2>
        </section>
        </div>
        <section class="feedback">
            {{-- <x-main.feedback></x-main.feedback> --}}
            <div class="container">
                <h2 class="feedback-title">Обратная связь</h2>
                <form class="feedback-form" action="" method="post">
                    @csrf
                    <input name="name" type="text" placeholder="Ваше имя" required>
                    <input name="email" type="emai" placeholder="Ваш e-mail" required>
                    <textarea name="message" placeholder="Ваше сообщение" required></textarea>
                    <button type="submit">Отправить</button>
                </form>
            </div>
        </section>
    </main>
@endsection
