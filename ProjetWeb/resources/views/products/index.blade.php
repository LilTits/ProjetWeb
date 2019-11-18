@extends('layout.app')

@section('content')
<!-- Start of product section -->
<!-- Popular Product -->
<section id="productup">
    <div class="product_section container">
        <h3 class="title_section">Produits populaire</h3>
        <div class="row">
            
            @foreach ($products as $product)
            @if($product->id <= 4)
            <div class="col-xs-12 col-sm-6 col-lg-4 item_product">
                <div class="col-12 card frame_product">
                    <img src="/storage/image/products/{{$product->product_image}}"
                        class="card-img-top img-thumbnail image_product" alt="Product">
                    <div class="card-body">
                        <h5 class="card-title">{{$product->name}}</h5>
                        <p class="card-text">Catégorie : {{$product->category->name}}</p>
                        <p class="card-text">{{$product->price}} €</p>
                        <a href="/products/{{$product->id}}" class="btn btn-primary buy_button_product">En savoir plus</a>
                        <br>
                        <small>Ajouté le {{$product->created_at}}</small>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</section>

<!-- Product -->
<section id="product">
    <div class="container">
        <h3 class="title_section">Produits</h3>
        <div class="row">
            @if(count($products) > 0)
            @foreach ($products as $product)
            <div class="col-xs-12 col-sm-6 col-lg-4 item_product">
                <div class="col-12 card frame_product">
                    <img src="/storage/image/products/{{$product->product_image}}"
                        class="card-img-top img-thumbnail image_product" alt="Product">
                    <div class="card-body">
                        <h5 class="card-title">{{$product->name}}</h5>
                        <p class="card-text">Catégorie : {{$product->category->name}}</p>
                        <p class="card-text">{{$product->price}} €</p>
                        <a href="/products/{{$product->id}}" class="btn btn-primary buy_button_product">En savoir plus</a>
                        <br>
                        <small>Ajouté le {{$product->created_at}}</small>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <div class="col-6 alert_cart">
                <div class="alert alert-primary" role="alert">
                    <h3 class="title_alert">Pas de produit disponible</h3>
                </div>
            </div>
            @endif
        </div>
    </div>
</section>
<!-- End of product section -->
@endsection