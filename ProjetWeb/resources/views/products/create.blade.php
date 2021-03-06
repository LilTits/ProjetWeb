@extends('layout.app')

@section('content')
<!-- Start of product section -->
@auth
<!--If auth-->
<section id="product">
    <div class="product_section container">
        <h3 class="title_section">Création de Produits</h3>
        <div class="row">
            <div class="col-12">
                {!! Form::open(['action' => 'ProductTypesController@store', 'method' => 'POST', 'enctype' =>
                'multipart/form-data']) !!}
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
                <div class="form-group">
                    {{Form::label('categorie', 'Categorie')}}
                    {{Form::select('pcategory_id',["1"=>"Pas de catégorie", "2"=>"Vêtements","3"=>"Bibelots","4"=>"Services","5"=>"Tasses et tapis","6"=>"Apple de Titou","7"=>"Les poules de Mathéo","8"=>"Pantoufle et chaussettes"],"", [
                    'class' => 'form-control',
                ])}}
                </div>
                <div class="form-group">
                    {{Form::label('price', 'Prix')}}
                    {{Form::number('price', '', [ 'class' => 'form-control' ])}}
                </div>
                <div class="form-group">
                    {{Form::label('stock', 'Quantité restante')}}
                    {{Form::number('stock', '', [ 'class' => 'form-control' ])}}
                </div>
                <div class="form-group">
                    {{Form::file('product_image')}}
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
<!-- End of product section -->
@endsection