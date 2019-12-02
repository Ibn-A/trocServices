@extends('layouts.app')

@section('content')

@foreach ($offreServices as $offre)
    <div>{{ $offre->titre }}</div>
@endforeach

@endsection