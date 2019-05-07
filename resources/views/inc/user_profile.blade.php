<div class="container main-secction">
    <div class="row">
        <div class="row user-left-part">
            <div class="col-md-3 col-sm-3 col-xs-12 user-profil-part pull-left">
                <div class="row ">
                    <div class="col-md-12 col-md-12-sm-12 col-xs-12 user-image text-center">
                        <img src="https://www.jamf.com/jamf-nation/img/default-avatars/generic-user-purple.png"
                             class="rounded-circle">
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 user-detail-section1 text-center">
                        <button id="btn-contact" (click)="clearModal()" data-toggle="modal" data-target="#contact"
                                class="btn btn-secondary btn-block follow"> <i class="fas fa-camera"></i> Atnaujinti</button>
                        <button class="btn btn-warning btn-block"><i class="fas fa-user-edit"></i> Redaguoti paskyrą</button>
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
                                                <p>{{ Auth::user()->name }}</p>
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
                                                <label>Telefono numeris</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ Auth::user()->name }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label>Lytis</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Vyras</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label>Gimimo data</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ Auth::user()->id }}</p>
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
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Counter Strike: Global Offensive</label>
                                            </div>
                                            <div class="col-md-4">
                                                <p>Pražaista valandų:</p>
                                            </div>
                                            <div class="col-md-4">
                                                <p>Privilegijos:</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Counter Strike 1.6</label>
                                            </div>
                                            <div class="col-md-4">
                                                <p>Pražaista valandų:</p>
                                            </div>
                                            <div class="col-md-4">
                                                <p>Privilegijos:</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Minecraft: Coloss edition</label>
                                            </div>
                                            <div class="col-md-4">
                                                <p>Pražaista valandų:</p>
                                            </div>
                                            <div class="col-md-4">
                                                <p>Privilegijos:</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>GTA San Andreas: Multiplayer</label>
                                            </div>
                                            <div class="col-md-4">
                                                <p>Pražaista valandų:</p>
                                            </div>
                                            <div class="col-md-4">
                                                <p>Privilegijos:</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Rust</label>
                                            </div>
                                            <div class="col-md-4">
                                                <p>Pražaista valandų:</p>
                                            </div>
                                            <div class="col-md-4">
                                                <p>Privilegijos:</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Garry's Mod</label>
                                            </div>
                                            <div class="col-md-4">
                                                <p>Pražaista valandų:</p>
                                            </div>
                                            <div class="col-md-4">
                                                <p>Privilegijos:</p>
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
                                                <h6>gggg</h6>
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

<div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="contact">Contactarme</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <p for="msj">Se enviará este mensaje a la persona que desea contactar, indicando que te quieres
                        comunicar con el. Para esto debes de ingresar tu información personal.</p>
                </div>
                <div class="form-group">
                    <label for="txtFullname">Nombre completo</label>
                    <input type="text" id="txtFullname" class="form-control">
                </div>
                <div class="form-group">
                    <label for="txtEmail">Email</label>
                    <input type="text" id="txtEmail" class="form-control">
                </div>
                <div class="form-group">
                    <label for="txtPhone">Teléfono</label>
                    <input type="text" id="txtPhone" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" (click)="openModal()" data-dismiss="modal">Guardar
                </button>
            </div>
        </div>
    </div>
</div>