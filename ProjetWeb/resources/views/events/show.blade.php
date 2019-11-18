@extends('layout.app')

@section('content')
<!-- Start of event section -->
<section id="event">
    <div class="event_section container">
        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="/storage/image/events/{{$data['event']->event_image}}" class="card-img image_event"
                        alt="Event image">
                </div>
                <div class="col-md-8">
                    <div class="card-body text_event">
                        <h5 class="card-title">{{$data['event']->name}}</h5>
                        <p class="card-text">{{$data['event']->description}}</p>
                        <ul class="list-group">
                            <li class="list-group-item">{{$data['event']->price}} €</li>
                            <li class="list-group-item">Nombre de place : {{$data['event']->max_participants}}</li>
                            <li class="list-group-item">Débute le : {{$data['event']->start_date}}</li>
                            <li class="list-group-item">Et termine le : {{$data['event']->end_date}}</li>
                            <li class="list-group-item">
                                {!! Form::open(['action' => 'EventParticipantsController@participants', 'method' =>
                                'POST']) !!}
                                <div class="form-group">
                                    {{Form::hidden('id', $data['event']->id)}}
                                </div>
                                {{Form::submit('S\'inscrire', ['class' => 'btn btn-primary'])}}
                                {!! Form::close() !!}
                                <a href="/events/{{$data['event']->id}}" class="btn btn-primary">En savoir plus</a>
                            </li>
                            <li class="list-group-item">
                                <small>Ajouté le {{$data['event']->created_at}} par
                                    {{$data['event']->eventCreator->first_name}}
                                    {{$data['event']->eventCreator->last_name}}</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <a href="/events" class="btn btn-default">Retour en arrière</a>
    </div>
</section>

<section id="comments">

    @auth
    <a href="/events/{{$data['event']->id}}/addcomment" class="btn">Ajouter un Commentaire</a>
    @endauth


    <h3 class="title_section">Commentaire</h3>
    @if(count($data['comments']) > 0)
    @foreach ($data['comments'] as $comment)

    <div class="col-12 card frame_comment">
        <div class="card-body">
            <p class="card-text">{{$comment->description}}</p>
            <br>
            <small>Ajouté le {{$comment->created_at}} by {{$comment->commentAuthor->first_name}}
                {{$comment->commentAuthor->last_name}} </small>
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
    <div class="col-6 alert_cart">
        <div class="alert alert-primary" role="alert">
            <h3 class="title_alert">Pas de commentaire</h3>
        </div>
    </div>
    @endif
</section>

<!-- End of event section -->
@endsection