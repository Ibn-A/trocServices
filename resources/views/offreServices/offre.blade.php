@extends('layouts.app')
@section('content')
<div class="container" style="background:orange">
    <div class="card bg-light">
        <h5 class="card-header">{{ $offreService->titre }}</h5>
        <img class="card-img-top" width="100" height="300" src="{{ asset('/img/solidR.svg') }}">
        <div class="card-body">
            <hr>
            <p><u>Description :</u></p>
            <p class="card-text">{{ $offreService->texte }}</p>
            <hr>
            <p class="card-text"><u>Service</u> : {{ $offreService->service->nomService }}</p>
            <p class="card-text">
                <u>Ville</u> : {{ $offreService->commune_name . ' (' . $offreService->commune_postal . ')'}}<br>
                <u>Publication</u> : {{ $offreService->created_at->calendar() }}
            </p>
            <hr>
            <p class="card-text"><u>Pseudo</u> : {{ $offreService->pseudo }}</p>
            <p class="card-text"><u>email</u> : {{ $offreService->email }}</p>
        </div>
    </div>
</div>
@endsection