@extends('layouts.form')

@section('content')

    <div class="form-holder">
        <div class="menu-holder">
            <ul class="main-links">
                <li><a class="normal-link" href="login">¿Ya tienes una cuenta?</a></li>
                <li><a class="sign-button" href="login">Iniciar Sesion</a></li>
            </ul>
        </div>
        <div class="signin-signup-form">
            <div class="form-items">
                <div class="form-title">Llenar los Datos</div>
                <form role="form" method="POST" action="{{ route('register') }}">
                    @csrf
                    <form id="signupform">
                        <div class="row">
                            <div class="col-md-6 form-text">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Usuario" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>

                        </div>
                        <div class="form-text">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Correo" name="email" value="{{ old('email') }}" required autocomplete="email">
                        </div>

                        <div class="form-text">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Contraseña" name="password" required autocomplete="new-password">
                        </div>

                        <div class="form-text">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar Contraseña" required autocomplete="new-password">
                        </div>

                        <div class="form-button">
                            <button id="submit" type="submit" class="ybtn ybtn-accent-color">Crear Cuenta</button>
                        </div>
                    </form>
                </form>
            </div>
        </div>
    </div>
@endsection
