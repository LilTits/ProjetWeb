
@extends('layout.app')

@section('content')

<section id="participants">
    <div class="container">
        <div class="row">
            @foreach ($event_participants as $participant)
            <div class="col">
                <p>User id : {{$participant->user->first_name}} </p>
                <br>
            </div>
            <div class="col">
                <p>Event_id : {{$participant->event->name}} </p>
                <br>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection



