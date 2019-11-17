@extends('layout.app')

@section('content')
<!-- Start of product section -->
<section id="product">
    <div  class="container">
        <div class="card item_product">
            <img src="/storage/image/products/{{$product->product_image}}" class="card-img-top image_product" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$product->name}}</h5>
                <p class="card-text">{{$product->description}}</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">{{$product->category->name}}</li>
                <li class="list-group-item">{{$product->price}} €</li>
                <li class="list-group-item"><small>Ajouté le {{$product->created_at}}</small></li>
            </ul>
            <div class="col-md-12 btn-group">
                <a href="/products" class="btn btn-light">Retour en arrière</a>
                {{-- Add to cart Cookies/database --}}
                {!! Form::open(['action' => 'CartsController@saveCart', 'method' => 'POST']) !!}
                <div class="form-group">
                    {{Form::hidden('id', $product->id)}}
                </div>
                {{Form::submit('Ajoutez au panier', ['class' => 'btn btn-primary'])}}
                {!! Form::close() !!}
                @auth
                @if((Auth::user()->role_id == 3) || (Auth::user()->role_id == 4))
                <!--Only admin or member BBD-->
                <a href="/products/{{$product->id}}/edit" class="btn">Edition</a>
                {!!Form::open(['action' => ['ProductTypesController@destroy', $product->id], 'method' => 'POST'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Suppression', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}
                @endif
                @endauth
            </div>
        </div>
    </div>
</section>
<!-- End of product section -->
@endsection