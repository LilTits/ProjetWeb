@extends('layout.app')

@section('content')
<!-- Start of product section --> 
<section id="product">
    <div  class="container">
        <div class="card item_product">
            <img src="/storage/image/products/{{$data['product']->product_image}}" class="card-img-top image_product" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$data['product']->name}}</h5>
                <p class="card-text">{{$data['product']->description}}</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">{{$data['product']->category->name}}</li>
                <li class="list-group-item">{{$data['product']->price}} €</li>
                @if(count($data['reviews']) > 0)
                <li class="list-group-item">Avis Moyen: {{$data['reviews']->avg('rating')}}</li>
                @endif
                <li class="list-group-item"><small>Ajouté le {{$data['product']->created_at}}</small></li>
            </ul>
            <div class="col-md-12 btn-group">
                <a href="/products" class="btn btn-light">Retour en arrière</a>
                {{-- Add to cart Cookies/database --}}
                {!! Form::open(['action' => 'CartsController@saveCart', 'method' => 'POST']) !!}
                <div class="form-group">
                    {{Form::hidden('id', $data['product']->id)}}
                </div>
                {{Form::submit('Ajoutez au panier', ['class' => 'btn btn-primary'])}}
                {!! Form::close() !!}
                @auth
                @if((Auth::user()->role_id == 3) || (Auth::user()->role_id == 4))
                <!--Only admin or member BBD-->
                <a href="/products/{{$data['product']->id}}/edit" class="btn">Edition</a>
                {!!Form::open(['action' => ['ProductTypesController@destroy', $data['product']->id], 'method' => 'POST'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Suppression', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}
                @endif
                @endauth
            </div>
        </div>
    </div>
</section>

<section id="reviews">

@auth
<a href="/products/{{$data['product']->id}}/addreview" class="btn">Ajoute Avis</a>
@endauth


@if(count($data['reviews']) > 0)
            @foreach ($data['reviews'] as $review)
            
            <div class="col-12 card frame_comment">
                <div class="card-body">
                    <p class="card-text">Etoile Donnes: {{$review->rating}}</p>
                    <br>
                    <p class="card-text">{{$review->description}}</p>
                    <br>
                    <small>Ajouté le {{$review->created_at}} by {{$review->reviewAuthor->first_name}} {{$review->reviewAuthor->last_name}} </small>
                </div>
                @auth
                @if((Auth::user()->id == $review->author))
                <a href="/reviews/{{$review->id}}edit" class="btn btn-primary">Edition</a>
                @endif
                @if((Auth::user()->role_id == 3) || (Auth::user()->role_id == 4) || (Auth::user()->id == $review->author))
                {!!Form::open(['action' => ['ReviewsController@destroy', $review->id], 'method' => 'POST'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Suppression', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}
                @endif
                @endauth
            </div>
            @endforeach
            @else
            <p>Pas de Avis</p>
            @endif
</section>
<!-- End of product section -->
@endsection