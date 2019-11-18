@extends('layout.app')

@section('content')

<section id="participants">
    <div class="container">
        <div class="col">
                <p>Voici la liste des participants pour cette évènement :</p>
            @foreach ($event_participants as $participant)
            
                <p>{{$participant->user->first_name}} {{$participant->user->last_name}} </p>
            
            @endforeach
        </div>
    </div>
</section>

@endsection