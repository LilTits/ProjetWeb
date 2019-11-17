@extends('layout.app')

@section('content')
@auth
<!-- Start of idea section -->
<section id="idea">
    <div class="idea_section container">
        <h3 class="title_section">Boite à idées</h3>
        <div class="row">
            <div class="col-12">
                {!! Form::open(['action' => 'IdeasController@store', 'method' => 'POST']) !!}
                <div class="form-group">
                    {{Form::label('title', 'Titre')}}
                    {{Form::text('title', '', [
                        'class' => 'form-control',
                        'placeholder' => 'Nom de la proposition'])}}
                </div>
                <div class="form-group">
                    {{Form::label('description', 'Description')}}
                    {{Form::textarea('description', '', [
                        'class' => 'form-control',
                        'placeholder' => 'Description de la proposition'
                    ])}}
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
<!-- End of idea section -->
@endsection