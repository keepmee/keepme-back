@extends('layouts.emails')

@section('content')

    <div class="text-center">
        <h3 class="text-uppercase text-center">Bonjour {{ $nanny->firstname }} </h3>
        <p>{{ ucfirst($parent->lastname) }} {{ ucfirst($parent->firstname) }} a accepté votre demande</p>
        <p>Voici un récapitulatif de l'annonce</p>
    </div>

    <div class="koop-content">

        <div class="row mb">
            <div class="col-12 text-center"><h4>{{ $koop->title }}</h4></div>
        </div>

        <div class="row mb">
            <div class="col-12 color-1 font-weight-bold text-center mt-2">Dates</div>
            <div class="col-12 text-center">
                <span>Du {{  \Carbon\Carbon::parse($koop->start)->format('d/m/Y à H:i:s') }} au {{  \Carbon\Carbon::parse($koop->end)->format('d/m/Y à H:i:s') }}</span><br/>
                <span class="grey-text small font-italic">( {{ $koop->duration }})</span>
            </div>
        </div>

        <div class="row mb">
            <div class="col-12 color-1 font-weight-bold text-center mt-2">Description</div>
            <div class="col-12 text-center">{{ $koop->description }}</div>
        </div>

        @if(!empty($koop->notes))
            <div class="row mb">
                <div class="col-12 color-1 font-weight-bold text-center mt-2">Informations</div>
                <div class="col-12 text-center">{{ $koop->notes }}</div>
            </div>
        @endif

        <div class="row">
            <div class="col-12 color-1 font-weight-bold text-center mt-2">Enfant(s)</div>
            <div class="col-12">
                <ul>
                    @foreach($children as $child)
                        <li v-for="(child, idx) in $koop->enfants">
                            {{ $child->firstname }}<br><span v-if="$child->note">{{ $child->notes }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="row mb">
            <div class="col-12 color-1 font-weight-bold text-center mt-2">Adresse</div>
            <div class="col-12 text-center">
                <span class="col-12">
                  <a href="https://www.google.com/maps/place/{{ str_replace(' ', '+', $koop->address->address_line_1) }}+{{ str_replace(' ', '+', $koop->address->address_line_2) }}+{{ $koop->address->city }}" target="_blank">
                    {{  $koop->address ? $koop->address->city . " (". $koop->address->postcode . ")" : '' }}
                  </a>
                </span>
            </div>
        </div>

        <div class="row">
            <div class="col-12 color-1 font-weight-bold text-center mt-2">Total</div>
            <div class="col-12 text-center fa-2x">{{ $total }}€</div>
        </div>

    </div>

@endsection
