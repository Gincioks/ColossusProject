<!--==========================
    Header
  ============================-->
<header id="header">
    <div class="container">
        <div id="logo" class="pull-left">
            <h1><a href="#intro">C<span>o</span>lossus</a></h1>
        </div>
        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a href="#intro">Pagrindinis</a></li>
                <li><a href="#about">Apie projektą</a></li>
                <li><a href="#speakers">Žaidimai</a></li>
                <li><a href="#gallery">Galerija</a></li>
                <li><a href="#supporters">Sponsors</a></li>
            @guest
                <!-- Authentication Links -->
                    <li class="buy-tickets"><a href="" data-toggle="modal" data-target="#modalLRForm">Prisijungti</a>
                    </li>
                    @if (Route::has('register'))
                        <script>
                            function myFunction() {
                                alert("Jūs registruotas vartotojas");
                            }
                        </script>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('profile') }}"> Paskyra</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>


                @endguest
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
                        <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i
                                    class="fas fa-user mr-1"></i>
                            Prisijungti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i
                                    class="fas fa-user-plus mr-1"></i>
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
                            <form class="form-signin text col-md-6" method="POST" action="{{ route('login') }}">
                                @csrf
                                <label for="email" class="sr-only">Slapyvardis</label>
                                <input type="email" id="inemail" name="email" class="form-control form-control-sm"
                                       placeholder="El. pašto adresas" value="{{ old('email') }}" required
                                       autocomplete="email"
                                       autofocus>
                                <br>
                                <label for="password" class="sr-only">Slaptažodis</label>
                                <input type="password" id="inpassword" class="form-control form-control-sm"
                                       placeholder="Slaptažodis" name="password" required
                                       autocomplete="current-password">
                                <br>
                                <br>
                                <div class="checkbox mb-3">
                                    <label for="remember" class="float-left"> <input type="checkbox" name="remember"
                                                                                     id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        Prisiminti </label>
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
                                    <p class="text-sm-left"> Užmiršai
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}" class="blue-text">
                                                Slaptažodį? </a>
                                        @endif
                                    </p>
                                </div>
                                <button type="button" class="btn btn-secondary btn-lg btn-sm waves-effect ml-auto"
                                        data-dismiss="modal">Uždaryti
                                </button>
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
                            <form class="form-signin text col-md-6" action="{{ route('register') }}" method="POST">
                                @csrf
                                <label for="name" class="sr-only">username</label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}"
                                       class="form-control form-control-sm"
                                       placeholder="Vartotojo Vardas" required autocomplete="name" autofocus>
                                <br>
                                <label for="email" class="sr-only">email</label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}"
                                       class="form-control form-control-sm"
                                       placeholder="El. pašto adresas" required autocomplete="email">
                                <br>
                                <label for="password" class="sr-only">password</label>
                                <input type="password" id="password" name="password"
                                       class="form-control form-control-sm" placeholder="Slaptažodis" required
                                       autocomplete="new-password">
                                <br>
                                <label for="password-confirm" class="sr-only">password</label>
                                <input type="password" id="password-confirm" name="password_confirmation"
                                       class="form-control form-control-sm" placeholder="Pakartokite slaptažodi"
                                       required autocomplete="new-password">
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
                                <button type="button" class="btn btn-secondary btn-lg btn-sm waves-effect ml-auto"
                                        data-dismiss="modal">Uždaryti
                                </button>
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
