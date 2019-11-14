@extends('layout.app')

@section('content')

<section id="basket" class="container">
    @if (Session::has('cart'))
    <div class="row">
        <div class="col-sm-6 col-md-6">
            <ul class="list-group">
                @foreach ($products as $product)
                <li class="list-group-item">
                    <span class="badge">{{$product['qty']}}</span>
                    <h5>{{$product['item']['title']}}</h5>
                    <span class="label label-sucess">{{ $product['price'] }}</span>
                    <div class="btn-group">
                        <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Action <span
                                class="caret"></span>
                            <ul class="dropdown-menu">
                                <li><a href="#">Supprimez 1 produit</a></li>
                                <li><a href="#">Supprimez tous les produits</a></li>
                            </ul>
                        </button>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="col-sm-6 col-md-6">
            <p>Total : {{$totalPrice}} </p>
        </div>
        <div class="btn-group">
            <a href="" button class="btn btn-success">Commander</a>
            {!!Form::open(['action' => ['ProductTypesController@deleteCart', $products->cart->item], 'method' => 'POST'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Suppression', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
            <a href="" button class="btn btn-success">Sauvegarder le panier</a>
        </div>
    </div>
    @else
    <div class="col-sm-6 col-md-6">
        <p>No Items</p>
    </div>
    @endif
</section>

@endsection