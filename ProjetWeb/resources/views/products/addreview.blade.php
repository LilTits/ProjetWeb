
@extends('layout.app')

@section('content')
<!-- Start of review section -->
@auth <!--If auth-->
<section id="review">
    <div class="comment_section container">
        <h3>Commentaire</h3>
        <div class="row">
            <div class="col-12">
                {!! Form::open(['action' => 'CommentsController@store', 'method' => 'POST']) !!}
                    <div class="form-group">
                        {{Form::label('rating', 'Avis')}}
                        {{Form::selectRange('rating', 1, 5)}}
                        {{Form::label('description', 'Description')}}
                        {{Form::textarea('description', '', [
                            'class' => 'form-control',
                            'placeholder' => 'Votre commentaire'
                        ])}}
                        {{Form::hidden('id', $product->id)}}
                    </div>
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
