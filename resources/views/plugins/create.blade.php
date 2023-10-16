<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight flex justify-between items-center">
            {{ __('Add New Plugin Details') }}
            <span>
                <x-bladewind.button color="black" icon="arrow-uturn-left" icon_right="true" size="tiny" onclick="window.location='{{ route('dashboard') }}'"> {{ __('View All') }} </x-bladewind.button>
            </span>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-fit">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Plugin Information') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                {{ __("Fill the plugin details below.") }}
                            </p>
                        </header>

                        <form method="post" action="{{ route('plugins.store') }}" class="mt-6 space-y-6">
                            @csrf

                            <div class="flex space-x-4">
                            <div class="w-full">
                            <div class="mb-6" >
                                <x-input-label for="plugin_name" :value="__('Plugin Name')" />
                                <x-text-input id="plugin_name" name="plugin_name" type="text" class="mt-1 block w-full" :value="old('plugin_name')" required autofocus autocomplete="plugin_name" />
                                <x-input-error class="mt-2" :messages="$errors->get('plugin_name')" />
                            </div>

                            <div class="mb-6" >
                                <x-input-label for="folder" :value="__('Folder Plugin Name')" />
                                <x-text-input id="folder" name="folder" type="text" class="mt-1 block w-full" :value="old('folder')" required autofocus autocomplete="folder" />
                                <x-input-error class="mt-2" :messages="$errors->get('folder')" />
                            </div>

                            <div class="mb-6" >
                                <x-input-label for="type" :value="__('Plugin Type')" />
                                <x-text-input id="type" name="type" type="text" class="mt-1 block w-full" :value="old('type')" required autofocus autocomplete="type" />
                                <x-input-error class="mt-2" :messages="$errors->get('type')" />
                            </div>
                            </div>

                            <div class="w-full">
                            <div class="mb-6" >
                                <x-input-label for="status" :value="__('Plugin Status')" />
                                <x-text-input id="status" name="status" type="text" class="mt-1 block w-full" :value="old('status')" required autofocus autocomplete="status" />
                                <x-input-error class="mt-2" :messages="$errors->get('status')" />
                            </div>

                            <div class="mb-6" >
                                <x-input-label for="url" :value="__('Plugin URL')" />
                                <x-text-input id="url" name="url" type="text" class="mt-1 block w-full" :value="old('url')" required autofocus autocomplete="url" />
                                <x-input-error class="mt-2" :messages="$errors->get('url')" />
                            </div>

                            <div class="mb-6" >
                                <x-input-label for="version" :value="__('Plugin URL')" />
                                <x-text-input id="version" name="version" type="text" class="mt-1 block w-full" :value="old('version')" required autofocus autocomplete="version" />
                                <x-input-error class="mt-2" :messages="$errors->get('version')" />
                            </div>
                            </div></div>


                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Save') }}</x-primary-button>

                                @if (session('status') === 'profile-updated')
                                    <p
                                        x-data="{ show: true }"
                                        x-show="show"
                                        x-transition
                                        x-init="setTimeout(() => show = false, 2000)"
                                        class="text-sm text-gray-600"
                                    >{{ __('Saved.') }}</p>
                                @endif
                            </div>
                        </form>
                    </section>

                </div>

            </div>
        </div>
    </div>


</x-app-layout>

