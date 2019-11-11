@extends('layout.app')

@section('content')
<!-- Start of idea section -->
<section id="idea">
    <div class="idea_section container">
        <a href="/ideas" class="btn btn-default">Retour en arrière</a>
        <div class="col-12 item_idea">
            <img src="iphonex.png" class="card-img-top img-thumbnail image_idea" alt="idea">
            <small class="card-body">
                <h5 class="card-title">{{$idea->title}}</h5>
                <h6 class="price">{{$idea->price}}</h6>
                <p class="card-text">{{$idea->description}}</p>
            </small>
        </div>
        <hr>
        <small>Ajouté le {{$idea->created_at}}</small>
        <hr>
        <a href="/ideas/{{$idea->idea_id}}/edit" class="btn">Edition</a>
        {!!Form::open(['action' => ['IdeasController@destroy', $idea->idea_id], 'method' => 'POST'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Suppression', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
    </div>
</section>
<!-- End of idea section -->
@endsection