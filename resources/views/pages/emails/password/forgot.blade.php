@extends('layouts.emails')

@section('content')

    <div class="text-center">
        <h3 class="text-uppercase">Bonjour {{ $user->lastname }} {{ $user->firstname }} !</h3>
    </div>

    <div class="my-5">
        <p>Vous avez récemment demandé a changer votre mot de passe.</p>
        <p>Cliquez sur le bouton ci-dessous pour réinitialiser votre mot de passe.</p>
    </div>

    <p class="font-weight-bold">Le lien est valable pendant <span class="text-danger">24 heures</span>.</p>

    <div class="my-5 text-center">
        <a class="btn bg-color-1 text-white" href="{{ $link }}" target="_blank">Modifier mon mot de passe</a>
    </div>

    <div class="my-5">
        <p>Si le bouton ne fonctionne pas, copiez/collez le lien ci-dessous dans votre navigateur.</p>
        <p>{{ $link }}</p>
        <p>Si vous n'avez pas demandé ce changement merci d'ignorer ce mail ou de nous contacter.</p>
    </div>

@endsection
