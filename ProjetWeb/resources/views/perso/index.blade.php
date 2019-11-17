@auth
@extends('layout.app')

@section('content')
<div class="d-flex justify-content-center">
  <div class="card" style="width: 18rem;">
    <img src="storage/image/{{Auth::user()->profile->image_path}}" class="card-img-top" alt="">
    <div class="card-body">
      <h5 class="card-title">{{Auth::user()->first_name}}</br>{{Auth::user()->last_name}}</h5>
      <p class="card-text"></p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">{{Auth::user()->email}}</li>
      <li class="list-group-item">Votre solde : {{Auth::user()->wallet_amount}} €</li>
      <li class="list-group-item">Votre campus : {{Auth::user()->centers->name}}</li>
      <li class="list-group-item">Votre role : {{Auth::user()->roles->name}}</li>
    </ul>
  </div>
</div>
<!--If admin-->

@if(Auth::user()->role_id == 2)
@include('perso.user')
@endif

@if(Auth::user()->role_id == 3)
@include('perso.admin')
@endif

@if(Auth::user()->role_id == 4)
@include('perso.bde')
@endif

@if(Auth::user()->role_id == 5)
@include('perso.cesi')
@endif


@endsection

@endauth

