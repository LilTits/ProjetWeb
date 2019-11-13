
@extends('layout.app')

@section('content')

<div class="card" style="width: 18rem;">
  <img src="{{Auth::user()->profile->image_path}}" class="card-img-top" alt="">
  <div class="card-body">
    <h5 class="card-title">{{Auth::user()->first_name}}</br>{{Auth::user()->last_name}}</h5>
    <p class="card-text"></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">{{Auth::user()->email}}</li>
    <li class="list-group-item">Votre solde : {{Auth::user()->wallet_amount}} €</li>
    <li class="list-group-item">Votre campus : {{Auth::user()->centers->name}}</li>
    <li class="list-group-item">Votre role : {{Auth::user()->roles->first()->name}}</li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>

<!--If admin-->
@include('perso.bde')



@endsection



