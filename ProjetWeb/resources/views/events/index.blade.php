@extends('layout.app')

@section('content')
<!-- Start of event section -->
<section id="event">
    <div class="event_section container">
        <h3 class="title_section">Evènements</h3>
        <div class="row">
            @if(count($events) > 0)
            @foreach ($events as $event)
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="/storage/image/events/{{$event->event_image}}" class="card-img image_event"
                            alt="Event image">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body text_event">
                            <h5 class="card-title">{{$event->name}}</h5>
                            <p class="card-text">{{$event->description}}</p>
                            <ul class="list-group">
                                <li class="list-group-item">{{$event->price}} €</li>
                                <li class="list-group-item">Nombre de place : {{$event->max_participants}}</li>
                                <li class="list-group-item">Débute le : {{$event->start_date}}</li>
                                <li class="list-group-item">Et termine le : {{$event->end_date}}</li>
                                <li class="list-group-item">
                                    {!! Form::open(['action' => 'EventParticipantsController@participants', 'method' =>
                                    'POST']) !!}
                                    <div class="form-group">
                                        {{Form::hidden('id', $event->id)}}
                                    </div>
                                    {{Form::submit('S\'inscrire', ['class' => 'btn btn-primary'])}}
                                    {!! Form::close() !!}
                                    <a href="/events/{{$event->id}}" class="btn btn-primary">En savoir plus</a>
                                </li>
                                <li class="list-group-item">
                                    <small>Ajouté le {{$event->created_at}} par {{$event->eventCreator->first_name}}
                                        {{$event->eventCreator->last_name}}</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <div class="col-6 alert_cart">
                <div class="alert alert-primary" role="alert">
                    <h3 class="title_alert">Pas d'evènement</h3>
                </div>
            </div>
            @endif
        </div>
    </div>
</section>
<!-- End of event section -->
@endsection