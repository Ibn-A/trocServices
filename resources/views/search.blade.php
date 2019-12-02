@extends('layouts.app')

@section('content')

@foreach($offreServices as $offre)
<a href="" class="blockAd">
        <div class="card d-flex flex-row">
            <div class="card-header">
                    <img class="rounded" src="" alt="">
            </div>
            <div class="card-body">
                <h4 class="card-title">{{ $offre->titre }}</h4>
                <p class="card-text">{{ $offre->service->nomService }}</p>
                <p class="card-text">
                    {{$offre->pseudo}}<br>
                    {{$offre->email}}<br>
                    {{ $offre->commune_name . ' (' . $offre->commune_postal . ')'}}<br>
                    {{ $offre->created_at->calendar() }}
                </p>
            </div>
        </div>
    </a>
    <br>
@endforeach
<div class="d-flex">
    <div class="mx-auto">
    </div>
</div>

@endsection