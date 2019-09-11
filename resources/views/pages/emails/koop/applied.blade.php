@extends('layouts.emails')

@section('content')

    <div class="text-center">
        <h3 class="text-uppercase">Bonjour {{ $parent->lastname }} </h3>
    </div>

    <div class="my-5">
        <p><span class="font-weight-bold">{{ ucfirst($nanny->lastname) }} {{ ucfirst($nanny->firstname) }}</span>&nbsp;a
            postulé à votre annonce : <span class="font-italic grey-text">{{ $koop->title }}</span></p>
        <p>Vous pouvez accepter ou refuser en cliquant sur le bouton ci-dessous</p>
    </div>

    <div class="my-5 text-center">
        <a class="btn bg-color-1 text-white" href="{{ $link }}" target="_blank">Voir les candidatures</a>
    </div>

    <div class="my-5">
        <p>Si le bouton ne fonctionne pas, copiez/collez le lien ci-dessous dans votre navigateur.</p>
        <p>{{ $link }}</p>
    </div>

@endsection
