<x-guest-layout>
    <div class="div-p">
    <x-auth-card-show class="div1.">
        <head>

            <div class="tituloM" h2>Bienvenidos a MoaT</h2>
        </div>
        <div class="div01">
            <img src="images/graphic1.png" alt="" width="450px" height="250px">
        </div>
        </head>
    </x-auth-card-show>
    <x-auth-card >
        <x-slot name="logo">
            <div class="margin-10px">
                <x-application-logo href="/" class="w-20 h-20 fill-current text-gray-500" />MoaT
            </div>
                <a href="{{route('login')}}">
                    <button  class="bttn-register btn btn-secondary">Iniciar sesión</button>
                </a>
        </x-slot>

        <!--bValidation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Nombre')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Correo Electrónico')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Contraseña')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirmar Contraseña')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Ya tienes cuenta?') }}
                </a>

                <button class="btn-global btn btn-success">
                    {{ __('Registrarse') }}
                </button>
            </div>

        </form>

    </x-auth-card>
    <div class="profe1">
        <ul>
            <img src="images\programador.png" width="100" >
       </ul>
   </div>
    </div>

</x-guest-layout>
