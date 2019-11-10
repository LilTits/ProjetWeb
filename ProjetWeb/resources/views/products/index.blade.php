@extends('layout.app')

@section('content')
<!-- Start of product section -->
<section id="product">
    <div class="product_section container">
        <h3 class="title_section">Produits</h3>
        <div class="row">
            @if(count($products) > 0)
            @foreach ($products as $product)
            <div class="col-xs-12 col-sm-6 col-lg-4 item_product">
                <div class="col-12 card frame_product">
                    <img src="iphonex.png" class="card-img-top img-thumbnail image_product" alt="Product">
                    <div class="card-body">
                        <h5 class="card-title">{{$product->title}}</h5>
                        <h6 class="price">{{$product->price}}</h6>
                        <p class="card-text">{{$product->description}}</p>
                        <a href="/products/{{$product->product_id}}" class="btn btn-primary buy_button_product">En savoir plus</a>
                        <br>
                        <small>Ajouté le {{$product->created_at}}</small>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <p>Pas de produits</p>
            @endif
        </div>
    </div>
</section>
<!-- End of product section -->
@endsection