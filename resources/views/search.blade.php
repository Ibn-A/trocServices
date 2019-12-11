@extends('layouts.app')

@section('content')
<div class="container py-4" style="background:orange">
    @if (strlen($offreServices)!=0)
        <h1 class="card-header">Vos résultats de recherche :</h1>
        @foreach($offreServices as $offre)
            <a href="" class="blockAd">
                <div class="card d-flex flex-row">
                    <div class="card-header">
                        <img src="{{ asset('/img/solidR.svg') }}" alt="">
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
        <h1 class="card-header">Vos résultats de recherche : 0 résultats</h1>
    @endif
<div class="d-flex">
    <div class="mx-auto">
    </div>
</div>
</div>
@endsection