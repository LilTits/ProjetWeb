<!-- Début header -->
<header>
  <nav id="navigation" class="navbar navbar-expand-md navbar-dark mb-4">
  <a class="navbar-brand" href="{{route('carts.index')}}">
    <span class="badge">
        @if (Cart::instance('default')->count() >0)
        
        @endif
        <span>{{Cart::instance('default')->count()}}</span>
    </span>
    {{-- Panier <span class="badge">{{Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span> --}}
    panier
  </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
      aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="/">Accueil<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/products">Produits</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/events">Evènements</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contact">Contact</a>
        </li>
        <li class="nav-item">
          <!--<a class="nav-link" href="/ideas">Boite à idées</a>
          <button type="button" class="btn btn-primary" id="test1" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>-->
        </li>
        
        
        
      </ul>
      @guest
      <!--When no session-->
      <button class="btn btn-primary" data-toggle="modal" data-target="#popup"><a>Inscription/Connexion</a></button>
      @endguest

        
        @auth                                                                   <!--When session-->
        <!--Only admin can make a product-->
      <ul class="navbar-nav navbar-right">
        <!-- <li><a class="nav-link" href="/products/create">Créer un produit</a></li> -->
        <!-- <li><a class="nav-link" href="/events/create">Créer un event</a></li> -->
        <li><a class="nav-link" href="/ideas/create">Une idée d'évènement?</a></li>
        <li><a class="nav-link">Bonjour {{Auth::user()->first_name}} !!!</a></li>
        <!-- <li><a class="nav-link" href="/comments/create">Créer un commentaire</a></li> -->
        <!-- <li><a class="nav-link" href="/reviews/create">Créer un avis</a></li> -->
        <li><a class="nav-link" href="/perso">Espace personnel</a></li>
        <li><a href="/deconnexion" button class="btn btn-primary">Déconnexion</a></li>
      </ul>
        
        
          
        
        @endauth
    </div>
  </nav>

</header>

<script src="{{asset('js/app.js')}}"></script>
<!-- Fin header -->