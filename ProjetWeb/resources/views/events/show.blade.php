@extends('layout.app')

@section('content')
<!-- Start of event section -->
<section id="event">
    <div class="event_section container">
        <a href="/events" class="btn btn-default">Retour en arrière</a>
        <div class="col-12 item_event">
            <img src="img/iphonex.png" class="card-img-top img-thumbnail image_event" alt="event">
            <small class="card-body">
                <h5 class="card-title">{{$event->title}}</h5>
                <h6 class="price">{{$event->price}}</h6>
                <p class="card-text">{{$event->description}}</p>
            </small>
        </div>
        <hr>
        <small>Ajouté le {{$event->created_at}}</small>
        <hr>
        <a href="/events/{{$event->id}}/edit" class="btn btn-primary">Edition</a>
        {!!Form::open(['action' => ['EventsController@destroy', $event->id], 'method' => 'POST'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Suppression', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
        <hr>
    </div>
</section>
<!-- End of event section -->
@endsection