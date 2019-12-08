@foreach($offreServices as $offreService)
<a href="{{ route('offres.show', $offreService->id) }}" class="offreUrl">
        <div class="card d-flex flex-row">
            <div class="card-header">
            </div>
            <div class="card-body">
                <h4 class="card-title">{{ $offreService->title }}</h4>
                <p class="card-text">{{ $offreService->service->nomService }}</p>
                <p class="card-text">
                    {{ $offreService->commune_name . ' (' . $offreService->commune_postal . ')'}}<br>
                    {{ $offreService->created_at->calendar() }}
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
</div>
