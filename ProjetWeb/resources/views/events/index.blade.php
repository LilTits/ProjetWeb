@extends('layout.app')

@section('content')
<!-- Start of event section -->
<section id="event">
    <div class="event_section container">
        <h3 class="title_section">Evènements</h3>
        <div class="row">
            @if(count($events) > 0)
            @foreach ($events as $event)
            <div class="col-12 card frame_event">
                <img src="/storage/image/events/{{$event->event_image}}" class="card-img-top img-thumbnail image_event"
                    alt="event">
                <div class="card-body">
                    <h5 class="card-title">{{$event->name}}</h5>
                    <h6 class="price">{{$event->price}}</h6>
                    <p class="card-text">{{$event->description}}</p>
                    <p class="card-text">Nombre de place : {{$event->max_participants}}</p>
                    <p class="card-text">Débute le : {{$event->start_date}}</p>
                    {{-- <p class="card-text">Et termine le : {{$event->end_date}}</p> --}}
                    <a href="/events/{{$event->id}}" class="btn btn-primary buy_button_event">En savoir plus</a>
                    {!! Form::open(['action' => 'EventParticipantsController@participants', 'method' => 'POST']) !!}
                    <div class="form-group">
                        {{Form::hidden('id', $event->id)}}
                    </div>
                    {{-- @if(Auth::user()->id == $event->user_id) --}}
                    {{Form::submit('S\'inscrire', ['class' => 'btn btn-primary'])}}
                    {!! Form::close() !!}
                    {{-- @endif --}}
                    <hr>
                    <small>Ajouté le {{$event->created_at}} by {{$event->eventCreator->first_name}}
                        {{$event->eventCreator->last_name}}</small>
                </div>
            </div>
            @endforeach
            @else
            <p>Pas d'evènement</p>
            @endif
        </div>
    </div>
</section>
<!-- End of event section -->
@endsection