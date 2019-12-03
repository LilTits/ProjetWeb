@extends('layout.app')

@section('content')
@auth
<section id="basket" class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="title_section">Panier</h2>
        </div>
        @if (count($cart) > 0)
        <div class="col-sm-6 col-md-6 alert_cart">
            <h4 class="title_cart">Vous avez {{count($cart)}} produit(s) dans votre panier</h4>
            <div class="row">
                <ul class="list-group list_cart_item">
                    @foreach ($cart as $product)
                    @if ($product->user_id == auth()->user()->id)
                    <li class="list-group-item item_cart">
                        <div class="card mb-3 text_cart">
                            <img src="/storage/image/products/{{$product->products->product_image}}"
                                class="card-img-top" alt="Product Imazge">
                            <div class="card-body">
                                <h5 class="card-title">{{$product->products->name}}</h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">{{$product->products->price}} €</li>
                            </ul>
                        </div>
                        <div class="col-md-12 btn-group">
                            <a href="/products/{{$product->product_id}}" class="btn btn-light">Retournez sur
                                la page du produit</a>
                            {!!Form::open(['action' => ['CartsController@destroy', $product->id], 'method'
                            =>'POST'])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Suppression', ['class' => 'btn btn-dark'])}}
                            {!!Form::close()!!}
                        </div>
                    </li>
                    @endif
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="col-12">
            <a button class="btn btn-primary btn-lg btn-warning" href="/emailsproduct">Commander</a>
        </div>
        @else
        <div class="col-6 alert_cart">
            <div class="alert alert-primary" role="alert">
                <h3 class="title_alert">Pas de produit dans le panier</h3>
                <p class="title_alert"><a href="/products">Retournez sur la Boutique</a></p>
            </div>
        </div>
        @endif
    </div>

</section>
@endauth

@guest

<div class="d-flex justify-content-center">@include('auth.login')</div>
@endguest
@endsection