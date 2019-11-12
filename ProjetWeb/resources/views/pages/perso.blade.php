@if(Auth::user()->role == 'user')                                                 <!--Only admin can make a product-->
  
@endif

@if(Auth::user()->role == 'BDE')                                                 <!--Only admin can make a product-->
<ul class="navbar-nav navbar-right">
        <li><a class="nav-link" href="/products/create">Créer un produit</a></li>
      </ul>
@endif

@if(Auth::user()->role == 'CESI')                                                 <!--Only admin can make a product-->
  
@endif

@if(Auth::user()->role == 'admin')                                                 <!--Only admin can make a product-->
<ul class="navbar-nav navbar-right">
        <li><a class="nav-link" href="/products/create">Créer un produit</a></li>
      </ul>
@endif

