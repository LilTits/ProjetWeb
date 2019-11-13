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
            <a href="/comments/{{$comment->comment_id}}/edit" class="btn">Edition</a>
            {!!Form::open(['action' => ['CommentsController@destroy', $comment->comment_id], 'method' => 'POST'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Suppression', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        </div>
        <hr>
        <section id="comments">
            <ul class="list-group">
                <div class="card-block">
                    {!! Form::open(['action' => 'CommentsController@store', 'method' => 'POST']) !!}
                    <div class="form-group">
                        {{Form::label('description', 'Description')}}
                        {{Form::textarea('description', '', [
                            'class' => 'form-control',
                            'placeholder' => 'Votre commentaire'
                        ])}}
                    </div>
                    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                    {!! Form::close() !!}
                </div>
            </ul>
        </section>
    </div>
</section>
<!-- End of idea section -->
@endsection