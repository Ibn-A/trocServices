@extends('layouts.template')
@section('content')
<section class="section">
    <div class="container has-text-centered">
        <h2 class="title">Les offres de services</h2>

        @foreach($offreServices as $offreService)
        {{ $offreService->objet_offre}}

        @endforeach
             
    </div>
</section>
@endsection

