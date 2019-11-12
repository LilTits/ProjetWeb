@extends('layout.app')

@section('content')
<!-- Start of comment section -->
<section id="comment">
    <div class="comment_section container">
        <h3>Commentaire</h3>
        <div class="row">
            <div class="col-12">
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
        </div>
    </div>
</section>
<!-- End of comment section -->
@endsection