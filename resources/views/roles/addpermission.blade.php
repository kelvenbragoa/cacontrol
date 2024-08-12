<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Niveis') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- <div class="bg-green mb-4 px-5 py-4 w-full border-l-4 border-green">
                    <div class="flex justify-between">
                        <div class="flex space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                class="flex-none fill-current text-green-500 h-4 w-4">
                                <path
                                    d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.25 16.518l-4.5-4.319 1.396-1.435 3.078 2.937 6.105-6.218 1.421 1.409-7.5 7.626z"/>
                            </svg>
                            <div
                                class="flex-1 leading-tight text-sm text-green-700 font-medium">Hello</div>
                        </div>
                    </div>
                </div> --}}

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-hidden overflow-x-auto p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('roles.index') }}"
                        class="mb-4 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-xs font-semibold uppercase tracking-widest text-gray-700 shadow-sm transition duration-150 ease-in-out hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25">
                        <i class="fas fa-arrow-left"></i>Voltar
                    </a>
                    <p><strong>Nivel:</strong> {{ $role->name }}</p>

                    <form action="{{ url('/roles/' . $role->id . '/rolepermission') }}" method="POST">
                        @csrf
                        @method('POST')

                        <div class="grid grid-cols-4 gap-4">
                            @foreach ($permissions as $permission)
                                <div class="col">
                                    <x-input-label for="name" value="{{ $permission->name }}" />
                                    <input type="checkbox" name="permission[]" value="{{ $permission->name }}"
                                        {{ in_array($permission->id, $rolepermissions) ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    {{-- <x-text-input id="name" name="permission[]" value="{{$permission->name}}" type="checkbox" :checked="in_array($permission->id, $rolepermissions) ? 'true' : 'false'" /> --}}
                                </div>
                            @endforeach
                        </div>


                        <div class="mt-4">
                            <x-primary-button>
                                Salvar
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
