@extends('layout.app')

@section('content')
<!-- Start of event section -->
<section id="event">
    <div class="event_section container">
        <a href="/events" class="btn btn-default">Retour en arrière</a>
        <div class="col-12 item_event">
            <img src="/storage/image/events/{{$data['event']->event_image}}" class="card-img-top img-thumbnail image_event" alt="event">
            <small class="card-body">
                <h5 class="card-title">{{$data['event']->title}}</h5>
                <h6 class="price">{{$data['event']->price}}</h6>
                <p class="card-text">{{$data['event']->description}}</p>
            </small>
        </div>
        <hr>
        <small>Ajouté le {{$data['event']->created_at}}</small>
        <hr>
        @auth
        @if((Auth::user()->role_id == 3) || (Auth::user()->role_id == 4))   <!--Only admin or member BBD-->
        <a  href="/participants/{{$data['event']->id}}"class="btn btn-primary">Liste des participants</a>
        <a href="/events/{{$data['event']->id}}/edit" class="btn">Edition</a>
        {!!Form::open(['action' => ['EventsController@destroy', $data['event']->id], 'method' => 'POST'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Suppression', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
        @endif
        @endauth
        <hr>
    </div>
</section>

{{-- <section id="participant">
    @if (count($data['event']_participants) > 0)
        <div class="col-sm-6 col-md-6">
            <div class="row">
                <ul class="list-group">
                    @foreach ($data['event']_participants as $participant)
                    <li class="list-group-item">
                        <div class="card mb-3">
                            <div class=" row no-gutters">
                                <div class="col-6">
                                    <p class="card-text">{{$participant->id}} €</p>
                                    <p class="card-text">{{$participant->id}} €</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif    
</section> --}}

<section id="comments">

@auth
<a href="/events/{{$data['event']->id}}/addcomment" class="btn">Ajoute Commentaire</a>
@endauth


@if(count($data['comments']) > 0)
            @foreach ($data['comments'] as $comment)
            
            <div class="col-12 card frame_comment">
                <div class="card-body">
                    <p class="card-text">{{$comment->description}}</p>
                    <br>
                    <small>Ajouté le {{$comment->created_at}} by {{$comment->commentAuthor->first_name}} {{$comment->commentAuthor->last_name}} </small>
                </div>
                @auth
                @if((Auth::user()->id == $comment->author))
                <a href="/comments/{{$comment->id}}edit" class="btn btn-primary">Edition</a>
                @endif
                @if((Auth::user()->role_id == 3) || (Auth::user()->role_id == 4) || (Auth::user()->id == $comment->author))
                {!!Form::open(['action' => ['CommentsController@destroy', $comment->id], 'method' => 'POST'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Suppression', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}
                @endif
                @endauth
            </div>
            @endforeach
            @else
            <p>Pas de commentaire</p>
            @endif
</section>

<!-- End of event section -->
@endsection