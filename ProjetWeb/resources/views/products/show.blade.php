@extends('layout.app')

@section('content')
<!-- Start of product section -->
<section id="product">
    <div class="product_section container">
        <a href="/products" class="btn btn-default">Retour en arrière</a>
        <div class="col-12 item_product">
            <img src="/storage/products/{{$product->product_image}}" class="card-img-top img-thumbnail image_product" alt="Product">
            <small class="card-body">
                <h5 class="card-title">{{$product->name}}</h5>
                <p class="card-text">{{$product->category->name}}</p>
                <p class="card-text">{{$product->description}}</p>
            </small>
        </div>
        <hr>
        <small>Ajouté le {{$product->created_at}}</small>
        <hr>
        @auth
        @if((Auth::user()->role_id == 3) || (Auth::user()->role_id == 4))   <!--Only admin or member BBD-->
        <a href="/products/{{$product->id}}/edit" class="btn">Edition</a>
        {!!Form::open(['action' => ['ProductTypesController@destroy', $product->id], 'method' => 'POST'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Suppression', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
        @endif
        @endauth
    </div>
</section>
<!-- End of product section -->
@endsection