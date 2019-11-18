@extends('layout.app')

@section('content')
<!-- Start of comment section -->
@auth
<section id="comment">
    <div class="comment_section container">
        <h3 class="title_section">Edition de votre commentaire</h3>
        <div class="row">
            <div class="col-12">
                {!! Form::open(['action' => ['CommentsController@update', $comment->id], 'method' => 'POST']) !!}
                <div class="form-group">
                    {{Form::label('description', 'Description')}}
                    {{Form::textarea('description', $comment->description, [
                        'class' => 'form-control',
                        'placeholder' => 'Votre commentaire'
                    ])}}
                </div>
                {{Form::hidden('_method', 'PUT')}}
                {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>

@endauth
@guest

<div class="d-flex justify-content-center">@include('auth.login')</div>
@endguest
<!-- End of comment section -->
@endsection