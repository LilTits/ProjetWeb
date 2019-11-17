@extends('layout.app')

@section('content')
<!-- Start of review section -->
<section id="review">
    <div class="review_section container">
        <a href="/reviews" class="btn btn-default">Retour en arrière</a>
        <div class="col-12 item_review">
            <small class="card-body">
                <p class="card-text">{{$review->description}}</p>
            </small>
        </div>
        <hr>
        <small>Ajouté le {{$review->created_at}} by {{$review->author}} </small>
        <hr>
        <a href="/reviews/{{$review->id}}/edit" class="btn btn-primary">Edition</a>
        {!!Form::open(['action' => ['ReviewsController@destroy', $review->id], 'method' => 'POST'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Suppression', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
    </div>
</section>
<!-- End of review section -->
@endsection