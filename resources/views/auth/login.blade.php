<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form class="auth-form" method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            {{-- <x-input-label for="email" :value="__('Email')" /> --}}
            <x-text-input id="email" class="auth-input" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="E-mail" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            {{-- <x-input-label for="password" :value="__('Password')" /> --}}

            <x-text-input id="password" class="auth-input"
                            type="password"
                            name="password"
                            required autocomplete="current-password"
                            placeholder="Пароль" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        {{-- <div class="auth-remember">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span>{{ __('Запомнить меня') }}</span>
            </label>
        </div> --}}

        <div>
            {{-- @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="auth-remind">
                    {{ __('Забыли пароль?') }}
                </a>
            @endif --}}

            <x-primary-button>
                {{ __('Отправить') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
