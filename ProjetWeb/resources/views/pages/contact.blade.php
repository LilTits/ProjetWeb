@extends('layout.app')

@section('content')

<!-- Start of contact section -->
<section id="contact" class="contact u-full-width">
    <div class="content_section container">
        <h3 class="title_section">Contact</h3>
        <form id="form_contact">
            <div class="form-group">
                {{-- <label for="exampleFormControlInput1">Email address</label> --}}
                <label for="emailInput">Votre Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1"
                    placeholder="prenom.nom@viacesi.fr">
            </div>
            <div class="form-group">
                {{-- <label for="exampleFormControlSelect1">Example select</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select> --}}
                <label for="emailReason">Motif de contact</label>
                <select id="emailReason" class="form-control">
                    <option value="option1">Produits</option>
                    <option value="option2">Evènement</option>
                    <option value="option3">Support</option>
                    <option value="option4">Questions</option>
                </select>
            </div>
            {{-- <div class="form-group">
                <label for="exampleFormControlSelect2">Example multiple select</label>
                <select multiple class="form-control" id="exampleFormControlSelect2">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div> --}}
            <div class="form-group">
                {{-- <label for="exampleFormControlTextarea1">Example textarea</label> --}}
                <label for="emailMessage">Votre Message</label>
                {{-- <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea> --}}
                <textarea id="emailMessage" class="form-control" placeholder="C'est quand la prochaine soirée, j'ai très soif !!!" rows="10"></textarea>
            </div>
        </form>
    </div>
</section>
<!-- End of contact section -->

@endsection