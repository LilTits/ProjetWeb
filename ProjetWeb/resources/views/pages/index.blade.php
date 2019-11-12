@extends('layout.app')

@section('content')
<!-- Start of index section -->
<section id="welcome">
    <div class="jumbotron">
        <div class="container welcome_index">
            <h1 class="display-3 title_index"></h1>
            <img class="img-fluid image_index" src="img/biere.png" alt="Logo BDE">
            <p class="description_index"></p>
        </div>
    </div>
    <section id="image_header" class="u-full-width container">
        <div class="row">
            <div class="twelve columns">
                <div id="logo_header"></div>
            </div>
        </div>
    </section>
</section>
<!-- End of index section -->
@endsection