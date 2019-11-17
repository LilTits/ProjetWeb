<p>{{Auth::user()->first_name}} {{Auth::user()->last_name}} vient de passer une commande. </p>


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
        </div>
    </div>
</li>
@endif
@endforeach