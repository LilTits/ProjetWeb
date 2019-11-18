@extends('layout.app')

@section('content')
<!-- Start of review section -->
<section id="review">
    <div class="review_section container">
        <h3>Avis</h3>
        <div class="row">
            <div class="col-12">
                {!! Form::open(['action' => 'ReviewsController@store', 'method' => 'POST']) !!}
                <div class="form-group">
                    {{Form::label('description', 'Description')}}
                    {{Form::textarea('description', '', [
                        'class' => 'form-control',
                        'placeholder' => 'Votre Avis'
                    ])}}
                </div>
                {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>
<!-- End of comment section -->
@endsection