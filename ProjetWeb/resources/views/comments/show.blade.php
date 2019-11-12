@extends('layout.app')

@section('content')
<!-- Start of comment section -->
<section id="comment">
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
</section>
<!-- End of comment section -->
@endsection