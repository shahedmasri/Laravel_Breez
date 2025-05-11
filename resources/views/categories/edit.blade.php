<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Category Edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form  method="POST" action="{{ route('categories.update', $category) }}">
                        @csrf
                        @method('PUT')>
                        <div>
                            <div>
                                <label for="name">Name:</label>
                            </div>
                            <input type="text" name="name" id="name" value="{{ $category->name }}">
                        </div>
                        <div>
                            <button type="submit">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
