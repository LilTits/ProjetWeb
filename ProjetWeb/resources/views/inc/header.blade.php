<!-- Début header -->
<header>
            @guest                                                                                <!--When not session-->
            <button class="popup-button" data-modal="popup"><a>Connexion/Inscription</a></button>
            </div>
            @endguest
            <div id="login" class="three columns item">
  <nav id="navigation" class="navbar navbar-expand-md navbar-dark mb-4">
    <a class="navbar-brand" href="/basket">Panier</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="/">Accueil<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/product">Produits</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/event">Evènements</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contact">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/bonus">Boite à idées</a>
        </li>
      </ul>
      <a class="navbar-brand" href="/login">Inscription/Connexion</a>
    </div>
  </nav>
    
</header>

<script src="{{asset('js/popup.js')}}"></script>
<!-- Fin header -->