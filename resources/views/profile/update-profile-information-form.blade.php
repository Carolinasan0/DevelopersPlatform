<x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Información del perfil') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Aquí puedes actualizar la información de tu perfil.') }}
    </x-slot>

    <x-slot name="form">
        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
        <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
            <!-- Profile Photo File Input -->
            <input type="file" class="hidden" wire:model="photo" x-ref="photo" x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

            <x-jet-label for="photo" value="{{ __('Foto') }}" />

            <!-- Current Profile Photo -->
            <div class="mt-2" x-show="! photoPreview">
                <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}" class="rounded-full h-20 w-20 object-cover">
            </div>

            <!-- New Profile Photo Preview -->
            <div class="mt-2" x-show="photoPreview">
                <span class="block rounded-full w-20 h-20" x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'">
                </span>
            </div>

            <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                {{ __('Selecciona una nueva foto') }}
            </x-jet-secondary-button>

            @if ($this->user->profile_photo_path)
            <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                {{ __('Eliminar foto') }}
            </x-jet-secondary-button>
            @endif

            <x-jet-input-error for="photo" class="mt-2" />
        </div>
        @endif

        <!-- NOMBRE -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('Nombre completo') }}" />
            <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autocomplete="name" />
            <x-jet-input-error for="name" class="mt-2" />
        </div>

        <!-- CORREO ELECTRÓNICO -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="email" value="{{ __('Correo electrónico') }}" />
            <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
            <x-jet-input-error for="email" class="mt-2" />
        </div>

        <!-- SOBRE MÍ -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="description" value="{{ __('Sobre mí') }}" />
            <x-jet-input id="description" type="text" class="mt-1 block w-full" wire:model.defer="state.description" />
            <x-jet-input-error for="description" class="mt-2" />
        </div>

        <!-- AÑOS DE EXPERIENCIA -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="experince" value="{{ __('Experiencia') }}" />
            <x-jet-input id="experiencie" type="text" class="mt-1 block w-full" wire:model.defer="state.experiencie" />
            <x-jet-input-error for="experiencie" class="mt-2" />
        </div>

        <!-- ESTUDIOS -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="experince" value="{{ __('Estudios') }}" />
            <x-jet-input id="experiencie" type="text" class="mt-1 block w-full" wire:model.defer="state.experiencie" />
            <x-jet-input-error for="experiencie" class="mt-2" />
        </div>

        <!-- HABILIDADES -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="experince" value="{{ __('Habilidades') }}" />
            <x-jet-input id="experiencie" type="text" class="mt-1 block w-full" wire:model.defer="state.experiencie" />
            <x-jet-input-error for="experiencie" class="mt-2" />
        </div>

        <!-- TECNOLOGÍAS -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="experince" value="{{ __('Tecnologias') }}" />
            <x-jet-input id="experiencie" type="text" class="mt-1 block w-full" wire:model.defer="state.experiencie" />
            <x-jet-input-error for="experiencie" class="mt-2" />
        </div>

        <!-- PORTFOLIO -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="experince" value="{{ __('Link web portafolio') }}" />
            <x-jet-input id="experiencie" type="text" class="mt-1 block w-full" wire:model.defer="state.experiencie" />
            <x-jet-input-error for="experiencie" class="mt-2" />
        </div>

        <!-- PROYECTOS DESTACADOS -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="experince" value="{{ __('Proyectos destacados') }}" />
            <x-jet-input id="experiencie" type="text" class="mt-1 block w-full" wire:model.defer="state.experiencie" />
            <x-jet-input-error for="experiencie" class="mt-2" />
        </div>

        <!-- CERTIFICACIONES -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="experince" value="{{ __('Certificaciones') }}" />
            <x-jet-input id="experiencie" type="text" class="mt-1 block w-full" wire:model.defer="state.experiencie" />
            <x-jet-input-error for="experiencie" class="mt-2" />
        </div>

        <!-- IDIOMAS -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="experince" value="{{ __('Idiomas') }}" />
            <x-jet-input id="experiencie" type="text" class="mt-1 block w-full" wire:model.defer="state.experiencie" />
            <x-jet-input-error for="experiencie" class="mt-2" />
        </div>

        <!-- CURRICULUM -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="experince" value="{{ __('Currículum') }}" />
            <x-jet-input id="experiencie" type="text" class="mt-1 block w-full" wire:model.defer="state.experiencie" />
            <x-jet-input-error for="experiencie" class="mt-2" />


        </div>

        <!-- <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">
                Sobre mí
            </dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                Fugiat ipsum ipsum deserunt culpa aute sint do nostrud anim incididunt cillum culpa consequat. Excepteur qui ipsum aliquip consequat sint. Sit id mollit nulla mollit nostrud in ea officia proident. Irure nostrud pariatur mollit ad adipisicing reprehenderit deserunt qui eu.
            </dd>
        </div>

        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">
                Hoja de
            </dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                <ul class="border border-gray-200 rounded-md divide-y divide-gray-200">
                    <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                        <div class="w-0 flex-1 flex items-center"> -->
        <!-- Heroicon name: solid/paper-clip -->
        <!-- <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                            </svg>
                            <span class="ml-2 flex-1 w-0 truncate">
                                resume_back_end_developer.pdf
                            </span>
                        </div>
                        <div class="ml-4 flex-shrink-0">
                            <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                                Download
                            </a>
                        </div>
                    </li>
                </ul>
            </dd>
        </div> -->
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Guardado.') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Guardar') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>