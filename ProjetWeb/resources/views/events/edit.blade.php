@extends('layout.app')

@section('content')
<!-- Start of event section -->
<section id="event">
    <div class="event_section container">
        <h3 class="title_section">Edition de Produits</h3>
        <div class="row">
            <div class="col-12">
                {!! Form::open(['action' => ['EventsController@update', $event->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                    <div class="form-group">
                        {{Form::label('name', 'Nom')}}
                        {{Form::text('name', $event->name, [
                        'class' => 'form-control',
                        'placeholder' => 'Nom du produit'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('price', 'Prix')}}
                        {{Form::number('price', $event->price, [ 'class' => 'form-control' ])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('description', 'Description')}}
                        {{Form::textarea('description', $event->description, [
                        'class' => 'form-control',
                        'placeholder' => 'Description du produit'
                    ])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('nb_people', 'Nombre de places disponible')}}
                        {{Form::number('nb_people', $event->nb_people, [ 'class' => 'form-control' ])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('start_date', 'Date de début')}}
                        {{Form::date('start_date', \Carbon\Carbon::now())}}
                    </div>
                    <div class="form-group">
                        {{Form::label('end_date', 'Date de fin')}}
                        {{Form::date('end_date', \Carbon\Carbon::now())}}
                    </div>
                    <div class="form-group">
                        {{Form::file('event_image')}}
                    </div>
                    {{Form::hidden('_method', 'PUT')}}
                    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>
<!-- End of event section -->
@endsection