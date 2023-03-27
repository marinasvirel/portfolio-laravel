<x-app-layout>
    <x-slot name="header">
        <div class="container header-container">
            <a href="main">На главную</a>
            <a href="profile">Профиль</a>
            <a href="#">Сертификаты</a>
            <a href="#">Выполненные проекты</a>
            <a href="competence">Компетенции</a>
        </div>
    </x-slot>
    <div class="container">
        <div class="profile-update">
            @include('profile.partials.update-profile-information-form')
        </div>
        <div class="profile-update">
            @include('profile.partials.update-password-form')
        </div>
    </div>

</x-app-layout>
