<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}, <a
                            href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<div class="container main-secction">
    <div class="row">
        <div class="row user-left-part">
            <div class="col-md-3 col-sm-3 col-xs-12 user-profil-part pull-left">
                <div class="row ">
                    <div class="col-md-12 col-md-12-sm-12 col-xs-12 user-image text-center">
                        <img class="rounded-circle" style="width:256px;height:256px;"
                             src="/storage/avatars/{{ $user->avatar }}"/>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 user-detail-section1 text-center">
                        <button id="btn-contact" (click)="clearModal()" data-toggle="modal" data-target="#avatar"
                                class="btn btn-success btn-block follow"><i class="fas fa-camera"></i> Atnaujinti
                        </button>
                        <button class="btn btn-warning btn-block" id="btn-contact" (click)="clearModal()"
                                data-toggle="modal" data-target="#edit"><i class="fas fa-user-edit"></i>
                            Redaguoti paskyrą
                        </button>
                    </div>
                    <div class="row user-detail-row">
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-12 pull-right profile-right-section">
                <div class="row profile-right-section-row">
                    <div class="col-md-12 profile-header">
                        <div class="row">
                            <div class="col-md-8 col-sm-6 col-xs-6 profile-header-section1 pull-left">
                                <h1>{{ Auth::user()->name }}</h1>
                                <h5>Narys</h5>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6 profile-header-section1 text-right pull-rigth">
                                <a href="/deposit" class="deposit">Pildyti balansa</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-8">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#profile" role="tab" data-toggle="tab"><i
                                                    class="fas fa-user-circle"></i> Pagrindinė informacija</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#games" role="tab" data-toggle="tab"><i
                                                    class="fas fa-gamepad"></i> Žaidimai</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#balance" role="tab" data-toggle="tab"><i
                                                    class="fas fa-wallet"></i> Balansas</a>
                                    </li>
                                </ul>
                                <br>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade show active" id="profile">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label>ID</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ Auth::user()->id }} </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label>Vardas</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ Auth::user()->full_name }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ Auth::user()->email }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label>Lytis</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ Auth::user()->sex }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label>Gimimo data</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ Auth::user()->birthday }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="games">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Žaidimas:</label>
                                            </div>
                                            <div class="col-md-4">
                                                <p>Pražaista valandų:</p>
                                            </div>
                                            <div class="col-md-4">
                                                <p>Privilegijos:</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Counter Strike: Global Offensive</label>
                                            </div>
                                            <div class="col-md-4">
                                                <p>{{$games['csgo']->game_play}} hrs </p>
                                            </div>
                                            <div class="col-md-4">
                                                <p>{{$games['csgo']->privileges}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Counter Strike 1.6</label>
                                            </div>
                                            <div class="col-md-4">
                                                <p>{{$games['cs16']->game_play}} hrs </p>
                                            </div>
                                            <div class="col-md-4">
                                                <p>{{$games['cs16']->privileges}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Minecraft: Coloss edition</label>
                                            </div>
                                            <div class="col-md-4">
                                                <p>{{$games['mc']->game_play}} hrs </p>
                                            </div>
                                            <div class="col-md-4">
                                                <p>{{$games['mc']->privileges}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>GTA San Andreas: Multiplayer</label>
                                            </div>
                                            <div class="col-md-4">
                                                <p>{{$games['samp']->game_play}} hrs </p>
                                            </div>
                                            <div class="col-md-4">
                                                <p>{{$games['samp']->privileges}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Rust</label>
                                            </div>
                                            <div class="col-md-4">
                                                <p>{{$games['rust']->game_play}} hrs </p>
                                            </div>
                                            <div class="col-md-4">
                                                <p>{{$games['samp']->privileges}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Garry's Mod</label>
                                            </div>
                                            <div class="col-md-4">
                                                <p>{{$games['gm']->game_play}} hrs </p>
                                            </div>
                                            <div class="col-md-4">
                                                <p>{{$games['gm']->privileges}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 img-main-rightPart">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row image-right-part">
                                            <div class="col-md-6 pull-left image-right-detail">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 image-right-detail-section2">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="avatar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row justify-content-center">
                    <div class="profile-header-container">
                        <center>
                            <div class="profile-header-img">
                                <!-- badge -->
                            </div>
                        </center>
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        @if ($message = Session::get('success'))

                            <div class="alert alert-success alert-block">

                                <button type="button" class="close" data-dismiss="alert">×</button>

                                <strong>{{ $message }}</strong>

                            </div>

                        @endif

                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <div class="row justify-content-center">

                        <div class="profile-header-container">
                            <div class="profile-header-img">
                                <img class="rounded-circle" style="width:256px;height:256px;"
                                     src="/storage/avatars/{{ $user->avatar }}"/>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <form action="/profile" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="file" class="form-control-file" name="avatar" id="avatarFile"
                                       aria-describedby="fileHelp">
                                <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size
                                    of image should not be more than 2MB.
                                </small>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row justify-content-center">
                    <div class="profile-header-container">
                        <center>
                            <div class="profile-header-img">
                                <!-- badge -->
                            </div>
                        </center>
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form method="POST" action="/profile/update">
                        <div class="form-group hidden">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="_method" value="PATCH">
                        </div>
                        <div class="form-group {{ $errors->has('full_name') ? ' has-error' : '' }}">
                            <label for="full_name" class="control-label"><b>Tikras vardas:</b></label>
                            <input type="text" name="full_name" placeholder="Vardas"
                                   class="form-control" value="{{ $user->full_name }}"/>
                            <?php if ($errors->has('full_name')) :?>
                            <span class="help-block">
            <strong>{{$errors->first('full_name')}}</strong>
        </span>
                            <?php endif;?>
                        </div>
                        <div class="form-group {{ $errors->has('sex') ? ' has-error' : '' }}">
                            <label for="sex" class="control-label"><b>Lytis:</b></label>
                            <br>
                            <input type="radio" class="radio-inline" name="sex" value="Vyras" checked> Vyras <br>
                            <input type="radio" class=" radio-inline" name="sex" value="Moteris"> Moteris
                            <?php if ($errors->has('sex')) :?>
                            <span class="help-block">
            <strong>{{$errors->first('sex')}}</strong>
        </span>
                            <?php endif;?>
                        </div>
                        <div class="form-group {{ $errors->has('sex') ? ' has-error' : '' }}">
                            <label for="birthday" class="control-label"><b>Gimimo data:</b></label>
                            <br>
                            <input type="date" class="form-control" name="birthday" value="{{ $user->birthday }}">
                            <?php if ($errors->has('birthday')) :?>
                            <span class="help-block">
            <strong>{{$errors->first('birthday')}}</strong>
        </span>
                            <?php endif;?>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success"> Patvirtinti</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


