@include('header')

<x-guest-layout>
    <x-jet-authentication-card>

        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Nombre completo') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Correo electrónico') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div>
                <x-jet-label for="role" value="{{ __('Registrarme como:') }}" />
                {{-- <x-jet-label for="name" value="{{ __('Name') }}" /> --}}
                {{-- <x-jet-input id="name" class="block mt-1 w-full text-sm text-green-600" type="text" name="role" :value="old('role')" placeholder="Selecione el rol" required autofocus autocomplete="name" /> --}}
                <select class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full text-sm text-gray-600" name="role" id="role">
                    <option value="" disabled selected hidden>Selecciona la acción</option>
                    <option value="reclutador">Reclutador</option>
                    <option value="persona">Desarrollador</option>
                </select>
            </div>

            <!-- <div class="mt-4">
                <x-jet-label for="role" value="{{ __('Registrarme como') }}" />
                <x-jet-input id="role" class="block mt-1 w-full" type="select" name="role" :value="old('role')" required />
            </div> -->

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirmar contraseña') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
            <div class="mt-4">
                <x-jet-label for="terms">
                    <div class="flex items-center">
                        <x-jet-checkbox name="terms" id="terms" />

                        <div class="ml-2">
                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Términos del servicio').'</a>',
                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Política de privacidad').'</a>',
                            ]) !!}
                        </div>
                    </div>
                </x-jet-label>
            </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('¿Ya estás registrado? Inicia sesión') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Registrarme') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>

@include('footer')