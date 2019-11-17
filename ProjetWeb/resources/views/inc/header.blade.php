<!-- Début header -->
<header>
  <nav id="navigation" class="navbar navbar-expand-md navbar-dark mb-4">
    <a class="navbar-brand" href="{{route('carts.index')}}"><i class="fas fa-shopping-basket"></i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
      aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="/">Accueil<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a href="/products" class="btn nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">Products</a>
          <div id="product_dropdown" class="dropdown-menu dropdown-primary  dropdown-menu-header"
            aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item dropdown-item-header" href="/products">Tout Produit</a>
            <a class="dropdown-item dropdown-item-header"
              href="{{ route('products.category', ['id' => 2])}}">Vêtements</a>
            <a class="dropdown-item dropdown-item-header"
              href="{{ route('products.category', ['id' => 3])}}">Bibelots</a>
            <a class="dropdown-item dropdown-item-header"
              href="{{ route('products.category', ['id' => 4])}}">Services</a>
            <a class="dropdown-item dropdown-item-header" href="{{ route('products.category', ['id' => 5])}}">Tasses et
              Tapis</a>
            <a class="dropdown-item dropdown-item-header" href="{{ route('products.category', ['id' => 6])}}">Apple a la
              Titou</a>
            <a class="dropdown-item dropdown-item-header" href="{{ route('products.category', ['id' => 7])}}">Les Poules
              de Matheo</a>
            <a class="dropdown-item dropdown-item-header" href="{{ route('products.category', ['id' => 8])}}">Pantoufle
              et Chaussettes</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/events">Evènements</a>
        </li>
      </ul>

      <!-- Sorting Dropdown -->

      @if(\Request::is("products") OR Request::is('products/*') OR Request::is('search*'))
      <div class="nav-item dropdown" >
        <a href="/products" class="btn btn-primary-sort dropdown-toggle mr-4" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Trier Par</a>
        <div class="dropdown-menu dropdown-menu-header">
          <a class="dropdown-item dropdown-item-header" href="{{ route('products.sorted', ['type' => 1])}}">Alphabétique
            Asc</a>
          <a class="dropdown-item dropdown-item-header" href="{{ route('products.sorted', ['type' => 2])}}">Alphabétique
            Desc</a>
          <a class="dropdown-item dropdown-item-header" href="{{ route('products.sorted', ['type' => 3])}}">Prix Asc</a>
          <a class="dropdown-item dropdown-item-header" href="{{ route('products.sorted', ['type' => 4])}}">Prix
            Desc</a>
          <a class="dropdown-item dropdown-item-header" href="{{ route('products.sorted', ['type' => 5])}}">Date Asc</a>
          <a class="dropdown-item dropdown-item-header" href="{{ route('products.sorted', ['type' => 6])}}">Date
            Desc</a>
          <a class="dropdown-item dropdown-item-header" href="#">Plus Populaire</a>
        </div>
      </div>


      <!-- Searchbar -->
      <form action="{{ route('search') }}" method="GET" class="search-form">
        <input class="form-control" type="text" name="query" value="{{ request()->input('query') }}" id="query"
          placeholder="Recherché - Tout Produit">
      </form>
      <!-- Searchbar -->
      @endif

      @guest
      <!--When no session-->
      <button class="btn btn-primary" data-toggle="modal" data-target="#popup"><a>Inscription/Connexion</a></button>
      @endguest


      @auth
      <!--When session-->
      <!--Only admin can make a product-->
      <ul class="navbar-nav navbar-right">
        <li><a class="nav-link" href="/ideas/create">Une idée d'évènement?</a></li>
        <li><a class="nav-link">Bonjour {{Auth::user()->first_name}} !!!</a></li>
        <li><a class="nav-link" href="/perso">Espace personnel</a></li>
        <li><a href="/deconnexion" button class="btn btn-primary">Déconnexion</a></li>
      </ul>
      @endauth
    </div>
  </nav>
</header>

<script src="{{asset('js/app.js')}}"></script>
<!-- Fin header -->