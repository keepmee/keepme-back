@extends('layouts.emails')

@section('content')

    <div class="text-center">
        <h3 class="text-uppercase">Bienvenue {{ $user->lastname }} {{ $user->firstname }} !</h3>
    </div>

    <div class="my-5">
        <p>Nous sommes ravis de vous compter parmis nos utilisateurs. Tout d'abord, veuillez confirmer votre adresse
            mail</p>
    </div>

    <div class="my-5 text-center">
        <a class="btn bg-color-1 text-white" href="{{ $link }}" target="_blank">Confirmer mon adresse e-mail</a>
    </div>

    <div class="my-5">
        <p>Si le bouton ne fonctionne pas, copiez/collez le lien ci-dessous dans votre navigateur.</p>
        <p>{{ $link }}</p>
        <p>Si vous n'avez pas demandé à vous inscrire merci d'ignorer ce mail ou de nous contacter.</p>
    </div>

@endsection
