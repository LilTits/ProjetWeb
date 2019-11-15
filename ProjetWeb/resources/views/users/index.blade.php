
<!-- Start of event section -->
<section id="user">
    <div class="user_section container">
        <h3 class="title_section">Evènements</h3>
        <div class="row">
        <div class="table-responsive">
            <table class="table table-dark text-white">
                <thead>
                    <tr>
                        <th scope="col">@lang('Nom')</th>
                        <th scope="col">@lang('Email')</th>
                        <th scope="col">@lang('Inscription')</th>
                        <th scope="col">@lang('Vérifié')</th>
                        <th scope="col">@lang('Adulte')</th>
                        <th scope="col">@lang('Photos')</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

            @if(count($users) > 0)
            @foreach ($users as $user)
            <!-- <div class="col-12 card frame_event"> -->
                <!-- <div class="card-body"> -->
                    <!-- <h5 class="card-title">{{$user->first_name}}</h5> -->
                    <!-- <h6 class="price">{{$user->last_name}}</h6> -->
                    <!-- <p class="card-text">{{$user->role_id}}</p> -->
                    <!-- <p class="card-text">Nombre de participants : {{$user->center_id}}</p> -->
                    <!-- <p class="card-text">Débute le : {{$user->first_name}}</p> -->
                    {{-- <p class="card-text">Et termine le : {{$user->first_name}}</p> --}}      
                <!-- </div> -->
            <!-- </div> -->

            <tr @if($user->admin) style="color: red" @endif>
                        <td>{{ $user->first_name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>@if($user->role_id)<i class="fas fa-check fa-lg"></i>@endif</td>
                        <td>{{ $user->images_count }}</td>
                        <td>
                            <a type="button" 
                               class="btn btn-warning btn-sm pull-right mr-2 invisible" data-toggle="tooltip"
                               title="@lang("Modifier l'utilisateur") {{ $user->name }}"><i
                                        class="fas fa-edit fa-lg"></i></a>
                        </td>
                        <td>
                            @unless($user->admin)
                            <a type="button"
                               class="btn btn-danger btn-sm pull-right invisible" data-toggle="tooltip"
                               title="@lang("Supprimer l'utilisateur") {{ $user->name }}"><i
                                        class="fas fa-trash fa-lg"></i></a>
                            @endunless
                        </td>
                    </tr>

            @endforeach
            </tbody>
            </table>
        </div>
            @else
            <p>Pas d'evènement</p>
            @endif
        </div>
    </div>
</section>


<!-- End of event section -->
