@extends('layout.app')

@section('content')
<!-- Start of idea section -->
<section id="idea">
    <div class="idea_section container">
        <h3 class="title_section">Edition de Produits</h3>
        <div class="row">
            <div class="col-12">
                {!! Form::open(['action' => ['IdeasController@update', $idea->idea_id], 'method' => 'POST']) !!}
                    <div class="form-group">
                        {{Form::label('title', 'Titre')}}
                        {{Form::text('title', $idea->title, [
                        'class' => 'form-control',
                        'placeholder' => 'Nom du produit'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('description', 'Description')}}
                        {{Form::textarea('description', $idea->description, [
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
<!-- End of idea section -->
@endsection