@extends('layout.app')

@section('content')

<!-- Début section contact -->
<section id="contact" class="contact u-full-width">
    <div class="content_section container">
        <h3 class="title_section">Contact</h3>
        <form class="form_contact">
            <div class="row">
                <div class="six columns">
                    <label for="emailInput">Votre Email</label>
                    <input id="emailInput" class="u-full-width" type="email" placeholder="prenom.nom@viacesi.fr">
                </div>
                <div class="six columns">
                    <label for="emailReason">Motif de contact</label>
                    <select id="emailReason" class="u-full-width">
                        <option value="option1">Produits</option>
                        <option value="option2">Evènement</option>
                        <option value="option3">Support</option>
                        <option value="option4">Questions</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="twelve columns">
                    <label for="emailMessage">Votre Message</label>
                    <textarea id="emailMessage" class="u-full-width"
                        placeholder="C'est quand la prochaine soirée, j'ai très soif !!!"></textarea>
                    <label class="emailCopyMessage" for="emailCopyMessage">
                        <input type="checkbox">
                        <span class="label-body">Envoyer une copie de votre message</span>
                    </label>
                    <input class="button-primary" type="submit" value="Envoyer">
                </div>
            </div>
        </form>
    </div>
</section>
<!-- Fin section contact -->

@endsection
