@extends('layouts.app')
@section('content')
<div class="container" style="background:orange">

    <div id="massageOk" class="alert alert-success" role="alert" style="display: none">
        Votre message a été pris en compte et sera envoyé rapidement
    </div>

    @include('partials.message', ['url' => route('message')])

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
            <button id="openModal" type="button" class="btn btn-primary">
                Envoyer un message
            </button>
        </div>
    </div>
</div>
@endsection
@section('script')
    <script>
        $(() => {
            const toggleButtons = () => {
                $('#icon').toggle();
                $('#buttons').toggle();
            }
            $('#openModal').click(() => {
                $('#messageModal').modal();
            });
            $('#messageForm').submit((e) => {
                let that = e.currentTarget;
                e.preventDefault();
                $('#message').removeClass('is-invalid');
                $('.invalid-feedback').html('');
                toggleButtons();
                $.ajax({
                    method: $(that).attr('method'),
                    url: $(that).attr('action'),
                    data: $(that).serialize()
                })
                .done((data) => {
                    toggleButtons();
                    $('#messageModal').modal('hide');
                    $('#massageOk').text(data.info).show();
                })
                .fail((data) => {
                    toggleButtons();
                    $.each(data.responseJSON.errors, function (i, error) {
                        $(document)
                            .find('[name="' + i + '"]')
                            .addClass('is-invalid')
                            .next()
                            .append(error[0]);
                    });
                });
            });
        })
    </script>
@endsection