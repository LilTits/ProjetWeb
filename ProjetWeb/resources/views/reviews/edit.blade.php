@extends('layout.app')

@section('content')
<!-- Start of review section -->
<section id="review">
    <div class="review_section container">
        <h3 class="title_section">Edition de votre Avis</h3>
        <div class="row">
            <div class="col-12">
                {!! Form::open(['action' => ['ReviewsController@update', $review->id], 'method' => 'POST']) !!}
                <div class="form-group">
                    {{Form::label('rating', 'Avis')}}
                    {{Form::selectRange('rating', 1, 5)}}
                    {{Form::label('description', 'Description')}}
                    {{Form::textarea('description', $review->description, [
                        'class' => 'form-control',
                        'placeholder' => 'Votre Avis'
                    ])}}
                </div>
                {{Form::hidden('_method', 'PUT')}}
                {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>
<!-- End of review section -->
@endsection