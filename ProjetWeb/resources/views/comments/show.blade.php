@extends('layout.app')

@section('content')
@auth
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
        <small>Ajouté le {{$comment->created_at}} by {{$comment->author}} </small>
        <hr>
        <a href="/comments/{{$comment->id}}/edit" class="btn btn-primary">Edition</a>
        {!!Form::open(['action' => ['CommentsController@destroy', $comment->id], 'method' => 'POST'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Suppression', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
    </div>
</section>


@endauth
@guest

<div class="d-flex justify-content-center">@include('auth.login')</div>
@endguest
<!-- End of comment section -->
@endsection