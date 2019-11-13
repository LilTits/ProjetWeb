@extends('layout.app')

@section('content')
<!-- Start of product section -->
<section id="product">
    <div class="product_section container">
        <h3 class="title_section">Création de Produits</h3>
        <div class="row">
            <div class="col-12">
                {!! Form::open(['action' => ['ProductTypesController@update', $product->id], 'method' => 'POST']) !!}
                <div class="form-group">
                    {{Form::label('name', 'Nom')}}
                    {{Form::text('name', '', [
                    'class' => 'form-control',
                    'placeholder' => 'Nom du produit'])}}
                </div>
                <div class="form-group">
                    {{Form::label('description', 'Description')}}
                    {{Form::textarea('description', '', [
                    'class' => 'form-control',
                    'placeholder' => 'Description du produit'
                ])}}
                </div>
                {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
            {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>
<!-- End of product section -->
@endsection