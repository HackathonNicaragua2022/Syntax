<x-applogin>
    <div class="div-p">

    <x-auth-card-show class="div1">
        <head>
            <div class="titulo1" h2>Bienvenidos a MoaT</h2>
        </div>
        <div class="titulo2" h2>Unete a la Multiplataforma <br> de manera rapida y sencilla.</h2></div>
        <div class="div2">
            <img src="images/graphic3.png" alt="" width="450px" height="250px">
        </div>
        </head>
    </x-auth-card-show>

    <x-auth-card>

        <x-slot name="logo">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500 " />

            <a href="{{route('register')}}">
            <button  class="bttn-register btn btn-secondary">Registrarse</button>
        </a>
        </x-slot>


        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <a class="txt-cuenta">Ingresa su cuenta</a>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Correo Electrónico')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Contraseña')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Recordarme') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Olvide mi contraseña?') }}
                    </a>
                @endif

                    <button class="btn-global btn btn-success">
                        {{ __('Iniciar sesión') }}
                    </button>

            </div>

        </form>

    </x-auth-card>
    </div>

</x-applogin>

