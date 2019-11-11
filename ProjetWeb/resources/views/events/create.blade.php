@extends('layout.app')

@section('content')
<!-- Start of event section -->
<section id="event">
    <div class="event_section container">
        <h3 class="title_section">Création d'evènement</h3>
        <div class="row">
            <div class="col-12">
                {!! Form::open(['action' => 'EventsController@store', 'method' => 'POST']) !!}
                    <div class="form-group">
                        {{Form::label('title', 'Titre')}}
                        {{Form::text('title', '', [
                        'class' => 'form-control',
                        'placeholder' => 'Nom de l\'evènement'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('price', 'Prix')}}
                        {{Form::number('price', '', [ 'class' => 'form-control' ])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('description', 'Description')}}
                        {{Form::textarea('description', '', [
                        'class' => 'form-control',
                        'placeholder' => 'Description de l\'evènement'
                    ])}}
                    </div>
                    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>
<!-- End of event section -->
@endsection