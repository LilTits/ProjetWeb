@extends('layout.app')

@section('content')

<section id="basket" class="container">
    <div class="row">
        {{-- @include('inc.messages') --}}
        <h2>Panier</h2>
        @if (Cart::count() > 0)
        <div class="col-sm-6 col-md-6">
            <h3>Vous avez {{Cart::count()}} produit(s) dans votre panier</h3>
            <div class="row">
                <ul class="list-group">
                    @foreach (Cart::content() as $product)
                    <li class="list-group-item">
                        <div class="card mb-3"">
                            <div class="row no-gutters">
                                {{-- <div class="col-md-4">
                                    <img src="storage/products/{{$product->product_image}}" class="card-img" alt="Image
                                Produit">
                                <img src=" {{ asset('storage/products/'.$product->product_image) }} " class="card-img"
                                    alt="Image Produit">
                            </div> --}}
                            <div class="col-md-12">
                                <div class="card-body">
                                    <h5 class="card-title">{{$product->name}}</h5>
                                    <p class="card-text"><small class="text-muted">{{$product->price}} €</small></p>
                                    <a href="/products/{{$product->id}}">Retournez sur la page du produit</a>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card-body">
                                    <select class="quantity">
                                        <option selected="">1</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                        <option value="">4</option>
                                        <option value="">5</option>
                                        <option value="">6</option>
                                        <option value="">7</option>
                                        <option value="">8</option>
                                        <option value="">9</option>
                                        <option value="">10</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                    {!!Form::open(['action' => ['CartsController@destroy', $product->rowId], 'method' => 'POST'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Suppression', ['class' => 'btn btn-danger'])}}
                                    {!!Form::close()!!}
                            </div>
                        </div>
                    </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="col-12">
            <hr>
            <p>Prix HT : {{ Cart::subtotal()}} €</p>
            <br>
            <p>Taxe : {{ Cart::tax() }} €</p>
            <br>
            <span>Prix TTC : {{ Cart::total()}} €</span>
        </div>
    @else
    <div class="col-sm-6 col-md-6">
        <h3>Pas de produit dans le panier</h3>
        <a href="/products">Retournez sur la Boutique</a>
    </div>
    @endif
    </div>

</section>

@endsection