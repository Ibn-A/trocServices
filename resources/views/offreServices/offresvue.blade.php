@extends('layouts.app')
@section('content')
<div id="app">
    @if($localisation)
            <div id="start"
                data-id={{ $localisation->id }}
                data-code="{{ $localisation->code }}"
                data-slug="{{ $localisation->slug }}"
            @if($departementCode)
                data-departement="{{ $departementCode }}"
                @if($communeCode)
                    data-commune="{{ $communeCode }}"
                @endif
            @endif
    @else
        <div id="start" data-id="0"
    @endif
    @if($page != 0)
        data-page="{{ $page }}"
    @endif
></div>


    <offre-component
        url="{{ route('offres.search') }}"
            :services="{{ $services }}"
            :localisations="{{ $localisations }}"
            ref="offreComp"
    ></offre-component>
</div>
@endsection

@section('script')
    <script src="{{ asset('js/app.js') }}"></script>
@endsection