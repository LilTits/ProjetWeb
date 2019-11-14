
<!--Popup-->
<div class="modal fade" id="popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <!--Popup content-->
        <div class="modal-content">
          <div class="modal-c-tabs">
    	<!--Navbar-->
        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#inscription" role="tab"><i class="fas fa-user mr-1"></i>
              Inscription</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#connexion" role="tab"><i class="fas fa-user-plus mr-1"></i>
              Connexion</a>
          </li>
        </ul>
        <!--Navbar-->
             <div class="tab-content">
                <!--Register-->
                <div class="tab-pane fade in show active" id="inscription" role="tabpanel">
                   <div class="modal-body mb-1">
                   @include('auth.register')
                    </div>
                    
                </div>
                <!--Register-->
                <!--Login-->
                <div class="tab-pane fade" id="connexion" role="tabpanel">
                    <div class="modal-body">
                        @include('auth.login')
                    </div>
                </div>
                <!--Login-->
            
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>
			</div>	
        </div>
        <!--Popup content-->
    </div>
</div>
<!--Popup-->



    