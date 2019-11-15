@extends('layout.app')

@section('content')
<!-- Start of event section -->
<section id="event">
    <div class="event_section container">
        <a href="/events" class="btn btn-default">Retour en arrière</a>
        <div class="col-12 item_event">
            <img src="/storage/image/events/{{$event->event_image}}" class="card-img-top img-thumbnail image_event" alt="event">
            <small class="card-body">
                <h5 class="card-title">{{$event->title}}</h5>
                <h6 class="price">{{$event->price}}</h6>
                <p class="card-text">{{$event->description}}</p>
            </small>
        </div>
        <hr>
        <small>Ajouté le {{$event->created_at}}</small>
        <hr>

        @auth
        @if((Auth::user()->role_id == 3) || (Auth::user()->role_id == 4))   <!--Only admin or member BBD-->
        <a href="/events/{{$event->id}}/edit" class="btn">Edition</a>
        {!!Form::open(['action' => ['EventsController@destroy', $event->id], 'method' => 'POST'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Suppression', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
        @endif
        @endauth
        <hr>
    </div>
</section>
<!-- End of event section -->
@endsection