@extends('layouts.main')
@section('content')
    <main>
        {{-- @dd($data['data']['user']['0']) --}}
        <section class="prime">
            <div class="container prime-container">
                <div class="prime-img">
                    <img class="cat" src="{{ asset('asset/img/context/cat-test.jpg') }}" alt="cat">
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
                <div class="certificate-slider">
                    <ul class="certificate-list">
                        <li class="certificate-item">
                            <a href="{{ asset('asset/pdf/certificate.pdf') }}" target="_blank" rel="noopener noreferrer">
                                <img class="cat" src="{{ asset('asset/img/context/certificate.jpg') }}"
                                    alt="certificate">
                            </a>
                        </li>
												<li class="certificate-item">
													<a href="{{ asset('asset/pdf/certificate.pdf') }}" target="_blank" rel="noopener noreferrer">
															<img class="cat" src="{{ asset('asset/img/context/certificate.jpg') }}"
																	alt="certificate">
													</a>
											</li>
                    </ul>
                </div>
            </section>
            <section class="projects">
                <h2 class="project-title">Выполненные проекты</h2>
            </section>
            <section class="competencies">
                <h2 class="competencies-title">Компетенции</h2>
                <div class="competencies-img">
                    <ul class="competencies-list">
                        @foreach ($data['data']['competencies'] as $competence)
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
