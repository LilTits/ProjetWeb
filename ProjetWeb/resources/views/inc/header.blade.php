<!-- Début header -->
<header>
  <nav id="navigation" class="navbar navbar-expand-md navbar-dark mb-4">
    <a class="navbar-brand" href="/basket">Panier</a>
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
          <a class="nav-link" href="/ideas">Boite à idées</a>
        </li>
      </ul>
      @guest
      <!--When no session-->
      <button class="btn btn-primary" data-toggle="modal" data-target="#popup"><a>Inscription/Connexion</a></button>
      @endguest

        @auth                                                                              <!--When session-->
          
        <a href="/deconnexion" button class="btn btn-primary">Déconnexion</a>
        
        @endauth
        @auth 
        @if(Auth::user()->user_id)                                                 <!--Only admin can make a product-->
      <ul class="navbar-nav navbar-right">
        <li><a class="nav-link" href="/products/create">Créer un produit</a></li>
        <li><a class="nav-link" href="/events/create">Créer un event</a></li>
        <li><a class="nav-link" href="/ideas/create">Créer une idée</a></li>
        <li><a class="nav-link" href="/comments/create">Créer un commentaire</a></li>
        <li><a class="nav-link" href="/reviews/create">Créer un avis</a></li>
      </ul>
      
      
      <ul class="navbar-nav navbar-right">
        <li><a class="nav-link" href="/perso">Espace personnel</a></li>
      </ul>
@endauth

    </div>
  </nav>

</header>

<script src="{{asset('js/app.js')}}"></script>
<!-- Fin header -->