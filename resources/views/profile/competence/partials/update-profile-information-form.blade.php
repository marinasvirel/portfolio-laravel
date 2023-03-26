<section>
    <header>
        <h2 class="profile-title">
            {{ __('Ваши компетенции') }}
        </h2>

         <p class="mt-1 text-sm text-gray-600">
            Выберите соответствующие Вам компетенции.
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('competence.update') }}">
        @csrf
        @method('patch')
        <div  class="competencies-form">
        @foreach($competencies as $competence)
        <div class="competencies-form-block">
          <h3 class="competence-title">{{ $competence->name }}</h3>
          <div class="competence-choose">
            <label for="active">знаю</label>
            <input type="radio" id="active" name="{{ $competence->class }}" @if($competence->active) checked @endif value="1">
          </div>
          <div class="competence-choose">
            <label for="unknown">не знаю</label>
            <input type="radio" id="unknown" name="{{ $competence->class }}" @if(!$competence->active) checked @endif value="0">
          </div>


        </div>

        @endforeach
        </div>
        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Изменить') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
