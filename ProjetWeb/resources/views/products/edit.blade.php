@extends('layout.app')

@section('content')
<!-- Start of product section -->
<section id="product">
    <div class="product_section container">
        <h3 class="title_section">Edition de Produits</h3>
        <div class="row">
            <div class="col-12">
                {!! Form::open(['action' => ['ProductsController@update', $product->product_id], 'method' => 'POST']) !!}
                    <div class="form-group">
                        {{Form::label('title', 'Titre')}}
                        {{Form::text('title', $product->title, [
                        'class' => 'form-control',
                        'placeholder' => 'Nom du produit'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('price', 'Prix')}}
                        {{Form::number('price', $product->price, [ 'class' => 'form-control' ])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('description', 'Description')}}
                        {{Form::textarea('description', $product->description, [
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
<!-- End of product section -->
@endsection