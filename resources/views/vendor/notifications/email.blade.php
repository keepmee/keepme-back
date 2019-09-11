@extends('layouts.emails')

@section('content')
    {{-- Greeting --}}
    @if (! empty($greeting))
        # {{ $greeting }}
    @else
        @if ($level === 'error')
            # @lang('Whoops!')
        @else
            # @lang('Hello!')
        @endif
    @endif

    {{-- Intro Lines --}}
    @foreach ($introLines as $line)
        {{ $line }}

    @endforeach

    {{-- Action Button --}}
    @isset($actionText)
        @component('mail::button', ['url' => $actionUrl, 'color' => $color ?? ''])
            {{ $actionText }}
        @endcomponent
    @endisset

    {{-- Outro Lines --}}
    @foreach ($outroLines as $line)
        {{ $line }}

    @endforeach

    {{-- Salutation --}}
    @if (! empty($salutation))
        {{ $salutation }}
    @else
        @lang('Cordialement'),<br>L'équipe KeepMe
    @endif

    {{-- Subcopy --}}
    @isset($actionText)
        @component('mail::subcopy')
            @lang(
                "Si le bouton ne fonctionne pas, copiez/collez le lien ci-dessous dans votre navigateur.\n".
                '[:actionURL](:actionURL)',
                [
                    'actionText' => $actionText,
                    'actionURL' => $actionUrl,
                ]
            )
        @endcomponent
    @endisset
@endsection
