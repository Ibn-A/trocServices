@extends('layouts.app')

@section('content')

<section class="section">
    <div class="container has-text-centered">
        <h2 class="title">Les services</h2>

        @foreach ($offreServices as $offre)
            <div>{{ $offre->titre }}</div>
        @endforeach
             
    </div>
</section>

@endsection