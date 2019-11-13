@extends('layout.app')

@section('content')
<!-- Start of comment section -->
<section id="comment">
    <div class="comment_section container">
        <div class="row">
            @if(count($comments) > 0)
            @foreach ($comments as $comment)
            <div class="col-12 card frame_comment">
                <div class="card-body">
                    <p class="card-text">{{$comment->description}}</p>
                    <br>
                    <small>Ajouté le {{$comment->created_at}}</small>
                </div>
                <a href="/comments/{{$comment->id}}/edit" class="btn btn-primary">Edition</a>
                {!!Form::open(['action' => ['CommentsController@destroy', $comment->id], 'method' => 'POST'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Suppression', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}
            </div>
            @endforeach
            @else
            <p>Pas de commentaire</p>
            @endif
        </div>
    </div>
</section>
<!-- End of comment section -->
@endsection