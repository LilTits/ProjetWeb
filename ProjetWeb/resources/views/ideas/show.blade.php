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
        <a href="/ideas/{{$idea->idea_id}}/edit" class="btn btn-primary">Edition</a>
        {!!Form::open(['action' => ['IdeasController@destroy', $idea->idea_id], 'method' => 'POST'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Suppression', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
        <hr>
        <div class="comment_section container">
            <a href="/comments" class="btn btn-default">Retour en arrière</a>
            <div class="col-12 item_comment">
                <small class="card-body">
                    <p class="card-text">{{$comment->description}}</p>
                </small>
            </div>
            <hr>
            <small>Ajouté le {{$comment->created_at}}</small>
            <hr>
            <a href="/comments/{{$comment->comment_id}}/edit" class="btn btn-primary">Edition</a>
            {!!Form::open(['action' => ['CommentsController@destroy', $comment->id], 'method' => 'POST'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Suppression', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        </div>
    </div>
</section>
<!-- End of idea section -->
@endsection