@extends('layout.app')

@section('content')
@auth
<section id="basket" class="container">
    <div class="row">
        <div class="col-12">
            <h2>Panier</h2>
        </div>
        @if (count($cart) > 0)
        <div class="col-sm-6 col-md-6">
            <h4>Vous avez {{count($cart)}} produit(s) dans votre panier</h4>
            <div class="row">
                <ul class="list-group">
                    @foreach ($cart as $product)
                    @if ($product->user_id == auth()->user()->id)
                    <li class="list-group-item">
                        <div class="card mb-3">
                            <div class=" row no-gutters">
                                <div class="col-6">
                                    <h5 class="card-title">{{$product->products->name}}</h5>
                                </div>
                                <div class="col-6">
                                    <p class="card-text"><small>{{$product->products->price}} €</small></p>
                                    <img src="/storage/image/products/{{$product->products->product_image}}"
                                        class="card-img-top img-thumbnail image_product" alt="Product">
                                </div>
                                <div class="col-md-12 btn-group">
                                    <a href="/products/{{$product->product_id}}" class="btn btn-primary">Retournez sur
                                        la page du produit</a>
                                    {!!Form::open(['action' => ['CartsController@destroy', $product->id], 'method'
                                    =>'POST'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Suppression', ['class' => 'btn btn-danger'])}}
                                    {!!Form::close()!!}
                                </div>
                            </div>
                        </div>
                    </li>
                    @endif
                    @endforeach
                </ul>
            </div>
        </div>
        @else
        <div class="col-sm-6 col-md-6">
            <h3>Pas de produit dans le panier</h3>
            <a href="/products">Retournez sur la Boutique</a>
        </div>
        @endif
    </div>

</section>
@endauth

@guest

<div class="d-flex justify-content-center">@include('auth.login')</div>
@endguest
@endsection