@extends('layout.app')


@section('content')
<!-- Start of index section -->
<section id="welcome">
    <div class="jumbotron">
        <div class="container welcome_index">
            <h1 class="display-3 title_index">BDE Cesi La Rochelle</h1>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="storage/image/img/rochelle.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="storage/image/img/Cesi.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="storage/image/img/bde.jpg" alt="Third slide">
                    </div>
                </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            <p class="description_index">Bienvenue sur le site du BDE du Cesi de La Rochelle!!!</br></p>
        </div>
    </div>
    <section id="image_header" class="container">
        <div class="row">
            <div class="twelve columns">
                <div id="logo_header"></div>
            </div>
        </div>
    </section>
</section>

<!-- End of index section -->
@endsection
