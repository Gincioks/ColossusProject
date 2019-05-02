<!--==========================
    Header
  ============================-->
<header id="header">
    <div class="container">
        <div id="logo" class="pull-left">
            <h1><a href="#main">C<span>o</span>lossus</a></h1>
        </div>
        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a href="#intro">Pagrindinis</a></li>
                <li><a href="#about">Apie projektą</a></li>
                <li><a href="#speakers">Žaidimai</a></li>
                <li><a href="#gallery">Galerija</a></li>
                <li><a href="#supporters">Sponsors</a></li>
                <li class="buy-tickets"><a href="" data-toggle="modal" data-target="#modalLRForm" >Prisijungti</a></li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->



<!--==========================
      Login Modal
============================-->
<!--Modal: Login / Register Form-->
<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Modal cascading tabs-->
            <div class="modal-c-tabs">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
                            Prisijungti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i>
                            Registracija</a>
                    </li>
                </ul>

                <!-- Tab panels -->
                <div class="tab-content">
                    <!--Panel 7-->
                    <div class="tab-pane fade in show active" id="panel7" role="tabpanel">
                        <br>
                        <br>
                        <br>
                        <!--Body-->
                        <center>
                            <form class="form-signin text col-md-6">
                                <label for="inputUsername" class="sr-only">Slapyvardis</label>
                                <input type="text" id="inputUsername" class="form-control form-control-sm" placeholder="Slapyvardis" required autofocus>
                                <br>
                                <label for="inputPassword" class="sr-only">Slaptažodis</label>
                                <input type="password" id="inputPassword" class="form-control form-control-sm" placeholder="Slaptažodis" required>
                                <br>
                                <br>
                                <div class="checkbox mb-3">
                                    <label class="float-left">
                                        <input type="checkbox" value="remember-me"> Prisiminti
                                    </label>
                                </div>
                                <br>
                                <br>
                                <button class="login" type="submit">Prisijungti</button>
                            </form>
                            <br>
                            <br>
                            <!--Footer-->
                            <div class="modal-footer">
                                <div class="options text-center text-md-right mt-1">
                                    <p class="text-sm-left">Užmiršai <a href="#" class="blue-text">Slaptažodį?</a></p>
                                </div>
                                <button type="button" class="btn btn-secondary btn-lg btn-sm waves-effect ml-auto" data-dismiss="modal">Uždaryti</button>
                            </div>
                        </center>
                    </div>
                    <!--/.Panel 7-->

                    <!--Panel 8-->
                    <div class="tab-pane fade" id="panel8" role="tabpanel">
                        <br>
                        <br>
                        <br>
                        <!--Body-->
                        <center>
                            <form class="form-signin text col-md-6" action="user_control_reg.php" method="POST">
                                <label for="username" class="sr-only">username</label>
                                <input type="text" id="username" name="username" class="form-control form-control-sm" placeholder="Vartotojo Vardas" required autofocus>
                                <br>
                                <label for="email" class="sr-only">email</label>
                                <input type="email" id="email" name="email" class="form-control form-control-sm" placeholder="El. pašto adresas" required>
                                <br>
                                <label for="password" class="sr-only">password</label>
                                <input type="password" id="password" name="password" class="form-control form-control-sm" placeholder="Slaptažodis" required>
                                <br>
                                <label for="password" class="sr-only">password</label>
                                <input type="password" id="confirm_password" name="password" class="form-control form-control-sm" placeholder="Pakartokite slaptažodi" required>
                                <br>
                                <br>
                                <button class="login" type="submit">Registruotis</button>
                            </form>
                            <br>
                            <br>
                            <!--Footer-->
                            <div class="modal-footer">
                                <div class="options text-right">
                                </div>
                                <button type="button" class="btn btn-secondary btn-lg btn-sm waves-effect ml-auto" data-dismiss="modal">Uždaryti</button>
                            </div>
                        </center>
                    </div>
                    <!--/.Panel 8-->
                </div>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>