@extends('layouts.app')
@section('content')
<div class="container">
    <div class="jumbotron">
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('img/speaker.png') }}" alt="">
            </div>
            <div class="col-md-8">
                <h1 class="display-4">Confirmation d'annonce</h1>
                <p class="lead">Votre offre a bien été prise en compte, elle sera publiée prochainement</p>
            </div>
        </div>
    </div>
</div>
@endsection