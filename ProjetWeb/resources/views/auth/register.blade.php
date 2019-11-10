
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"></div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nom</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('prenom') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Prénom</label>

                            <div class="col-md-6">
                                <input id="prenom" type="text" class="form-control" name="prenom" value="{{ old('prenom') }}" required autofocus>

                                @if ($errors->has('prenom'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('prenom') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Adresse Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Mot de passe</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmation du mot de passe</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="campus" class="col-md-4 control-label">Campus</label>

                            <div class="col-md-6">
                            <select id="campus" type="text" class="form-control" size= 2 name="campus" required>
                                <option value="Arras">Arras</option>
                                <option value="Caen">Caen</option>
                                <option value="Lille">Lille</option>
                                <option value="Rouen">Rouen</option>
                                <option value="Angouleme">Angoulême</option>
                                <option value="Brest">Brest</option>
                                <option value="La Rochelle">La Rochelle</option>
                                <option value="Le Mans">Le Mans</option>
                                <option value="Saint-Nazaire">Saint-Nazaire</option>
                                <option value="Nanterre">Nanterre</option>
                                <option value="Dijon">Dijon</option>
                                <option value="Nancy">Nancy</option>
                                <option value="Reims">Reims</option>
                                <option value="Brest">Brest</option>
                                <option value="Strasbourg">Strasbourg</option>
                                <option value="Bordeaux">Bordeaux</option>
                                <option value="Montpellier">Montpellier</option>
                                <option value="Pau">Pau</option>
                                <option value="Toulouse">Toulouse</option>
                                <option value="Aix-En-Provence">Aix-En-Provence</option>
                                <option value="Grenoble">Grenoble</option>
                                <option value="Lyon">Lyon</option>
                                <option value="Nice">Nice</option>
                            </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Inscription
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

