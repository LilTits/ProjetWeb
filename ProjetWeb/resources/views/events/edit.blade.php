@extends('layout.app')

@section('content')
<!-- Start of event section -->
<section id="event">
    <div class="event_section container">
        <h3 class="title_section">Edition de Produits</h3>
        <div class="row">
            <div class="col-12">
                {!! Form::open(['action' => ['EventsController@update', $event->event_id], 'method' => 'POST']) !!}
                    <div class="form-group">
                        {{Form::label('title', 'Titre')}}
                        {{Form::text('title', $event->title, [
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
                    {{Form::hidden('_method', 'PUT')}}
                    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>
<!-- End of event section -->
@endsection