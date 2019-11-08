
<div class="modal" id="popup">
			<div class="popup-content">
				
            <button class="popup-button-connexion" data-modal="inpopup"><a>Connexion</a></button>
            <button class="popup-button-inscription" data-modal="inpopup2"><a>Incription</a></button>

            @include('auth.login');
                <div class="modal-body" id='inpopup'>
                @include('auth.login');
                </div>
                <div class="modal-body" id='inpopup2'>
                @include('auth.register');
                </div>

                <div class="close">X</div>
				</div>
			</div>
        </div>

<script src="{{asset('js/app.js')}}"></script>
    