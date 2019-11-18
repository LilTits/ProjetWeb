@extends('layout.app')

@section('content')
<!-- Start of review section -->
<section id="review">
    <div class="review_section container">
        <div class="row">
            @if(count($reviews) > 0)
            @foreach ($reviews as $review)
            <div class="col-12 card frame_review">
                <div class="card-body">
                    <p class="card-text">{{$review->description}}</p>
                    <br>
                    <small>Ajouté le {{$review->created_at}}</small>
                </div>

                <a href="/reviews/{{$review->id}}/edit" class="btn btn-primary">Edition</a>
                {!!Form::open(['action' => ['ReviewsController@destroy', $review->id], 'method' => 'POST'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Suppression', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}
            </div>
            @endforeach
            @else
            <p>Pas d'avis sur ce produit</p>
            @endif
        </div>
    </div>
</section>
<!-- End of review section -->
@endsection