@foreach($offreServices as $offreService)
<a href="{{ route('offres.show', $ad->id) }}" class="blockAd">
        <div class="card d-flex flex-row">
            <div class="card-header">
            </div>
            <div class="card-body">
                <h4 class="card-title">{{ $offreService->title }}</h4>
                <p class="card-text">{{ $offreService->service->nomService }}</p>
                <p class="card-text">
                    {{ $ad->commune_name . ' (' . $ad->commune_postal . ')'}}<br>
                    {{ $ad->created_at->calendar() }}
                </p>
            </div>
        </div>
    </a>
    <br>
@endforeach
<div class="d-flex">
    <div class="mx-auto">
        {{ $offreServices->links() }}
    </div>
