<!-- Début section navigation -->
<header>
    <nav id="navigation" class="u-full-width">
        <div class="container item_nav">
            <span id="panier" class="two columns item">
                <a href="/">Panier</a>
            </span>
            <div class="seven columns list_nav item">
                <ul>
                    <li><a href="/">Accueil</a></li>
                    <li><a href="/product">Produits</a></li>
                    <li><a href="/event">Evènements</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </div>
            <div id="login" class="three columns item">
            @guest                                                                                <!--When not session-->
            <button class="popup-button" data-modal="popup"><a>Connexion/Inscription</a></button>
            </div>
            @endguest
            {{-- <div class="burger_nav item">
                <div class="ligne1"></div>
                <div class="ligne2"></div>
                <div class="ligne3"></div>
            </div> --}}
        </div>
    </nav>
    <section id="image_header" class="u-full-width container">
        <div class="row">
            <div class="twelve columns">
                <div id="logo_header"></div>
            </div>
        </div>
    </section>
</header>

<script src="{{asset('js/popup.js')}}"></script>
<!-- Fin header -->