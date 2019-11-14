@extends('layout.app')

@section('content')
<!-- Start of event section -->
<section id="event">
    <div class="event_section container">
        <a href="/events" class="btn btn-default">Retour en arrière</a>
        <div class="col-12 item_event">
            <img src="/storage/events/{{$event->event_image}}" class="card-img-top img-thumbnail image_event" alt="event">
            <small class="card-body">
                <h5 class="card-title">{{$event->title}}</h5>
                <h6 class="price">{{$event->price}}</h6>
                <p class="card-text">{{$event->description}}</p>
            </small>
        </div>
        <hr>
        <small>Ajouté le {{$event->created_at}}</small>
        <hr>
        {!! Form::open(['action' => 'EventParticipantsController@participants', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::hidden('id', $event->id)}}
        </div>
        {{Form::submit('S\'inscrire', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}

        <a href="/events/{{$event->id}}/edit" class="btn">Edition</a>
        {!!Form::open(['action' => ['EventsController@destroy', $event->id], 'method' => 'POST'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Suppression', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
        <hr>
    </div>
</section>

{{-- <section id="participant">
    @if (count($event_participants) > 0)
        <div class="col-sm-6 col-md-6">
            <div class="row">
                <ul class="list-group">
                    @foreach ($event_participants as $participant)
                    <li class="list-group-item">
                        <div class="card mb-3"">
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
<!-- End of event section -->
@endsection