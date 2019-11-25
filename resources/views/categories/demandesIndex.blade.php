@extends('layouts.template')
@section('content')
<section class="section">
    <div class="container has-text-centered">
        <h2 class="title">Categories de Services</h2>

        <div class="tile is-ancestor divider my-3">
            @foreach($categories as $categorie) 
            <div class="tile is-vertical is-parent ">
                <article class="tile is-child box">
                    <figure class="image">
                        <img src="">
                    </figure>
                    <p class="title">{{ $categorie->nomCategorie }}</p>
                        <tr>
                                <td><a class="button is-primary" href="{{ route('categories.show', $categorie->id) }}">Voir</a></td>
                            
                        </tr>
                        
                    </article>
            </div>
            @endforeach  
        </div>
    </div>
</section>
@endsection