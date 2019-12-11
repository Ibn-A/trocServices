@extends('layouts.app')

@section('content')
<div class="container py-4" style="background:orange">  
    <h1 class="card-header">Vos résultats de recherche :</h1>   
    @if(!empty($offreServices))
        @foreach($offreServices as $offre)
            <a href="{{ route('offres.show', $offre->id) }}" class="blockAd">
                <div class="card d-flex flex-col">
                    <div class="card-header">
                        <img class="img-responsive border-box"  src="{{ asset('/img/solidR.svg') }}" alt="logo_trocServices">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">{{ $offre->titre }}</h4>
                        <p class="card-text">{{ $offre->service->nomService }}</p>
                        <p class="card-text">
                            {{$offre->pseudo}}<br>
                            {{ $offre->commune_name . ' (' . $offre->commune_postal . ')'}}<br>
                            {{ $offre->created_at->calendar() }}
                        </p>
                    </div>
                </div>
            </a>
            <br>
        @endforeach
    @else
        Désolé, nous n'avons pas encore d'offres qui correspondent à votre demande.
    @endif
<div class="d-flex">
    <div class="mx-auto">
    </div>
</div>
</div>
@endsection