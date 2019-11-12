@extends('layout.app')

@section('content')
<!-- Start of product section -->
<section id="product">
    <div class="product_section container">
        <a href="/products" class="btn btn-default">Retour en arrière</a>
        <div class="col-12 item_product">
            <img src="iphonex.png" class="card-img-top img-thumbnail image_product" alt="Product">
            <small class="card-body">
                <h5 class="card-title">{{$product->title}}</h5>
                <h6 class="price">{{$product->price}}</h6>
                <p class="card-text">{{$product->description}}</p>
            </small>
        </div>
        <hr>
        <small>Ajouté le {{$product->created_at}}</small>
        <hr>
        <a href="/products/{{$product->product_id}}/edit" class="btn">Edition</a>
        {!!Form::open(['action' => ['ProductsController@destroy', $product->product_id], 'method' => 'POST'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Suppression', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
        <hr>
        <section id="comments">
            <ul class="list-group">
                <div class="card-block">
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
            </ul>
        </section>
    </div>
</section>
<!-- End of product section -->
@endsection