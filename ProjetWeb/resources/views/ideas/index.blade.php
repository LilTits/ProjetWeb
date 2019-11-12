@extends('layout.app')

@section('content')
<!-- Start of idea section -->
<section id="idea">
    <div class="idea_section container">
        <h3 class="title_section">Idée</h3>
        <div class="row">
            @if(count($ideas) > 0)
            @foreach ($ideas as $idea)
            <div class="col-xs-12 col-sm-6 col-lg-4 item_idea">
                <div class="col-12 card frame_idea">
                    <img src="iphonex.png" class="card-img-top img-thumbnail image_idea" alt="Idea">
                    <div class="card-body">
                        <h5 class="card-title">{{$idea->title}}</h5>
                        <p class="card-text">{{$idea->description}}</p>
                        <a href="/ideas/{{$idea->idea_id}}" class="btn btn-primary buy_button_idea">En savoir plus</a>
                        <br>
                        <small>Ajouté le {{$idea->created_at}}</small>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <p>Pas de produits</p>
            @endif
        </div>
    </div>
</section>
<!-- End of idea section -->
@endsection