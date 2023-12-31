<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin') }}
        </h2>
    </x-slot>

    @if ($errors->any())
        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
            <ul>
                @foreach ($errors as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form method="POST" action="{{ route('admin.tables.store') }}" class="w-[500px] m-auto my-10">
                @csrf
                <div class="mb-3">
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                        :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <div class="mb-3">
                    <x-input-label for="guest_number" :value="__('Guest_number')" />
                    <x-text-input id="guest_number" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                        type="number" name="guest_number" :value="old('guest_number')" required autofocus
                        autocomplete="guest_number" />
                    <x-input-error :messages="$errors->get('guest_number')" class="mt-2" />
                </div>

                <div class="mb-3">
                    <x-input-label for="status" :value="__('Status')" />
                    <select name="status" id="status"
                        class="border border-dark-300 text-slate-500 text-sm rounded-lg  block w-full p-2.5">
                        <option selected disabled>Choose Status</option>
                        @foreach (App\Enums\TableStatus::cases() as $status)
                            <option value="{{ $status->value }}">{{ $status->name }}</option>
                        @endforeach

                    </select>
                </div>

                <div class="mb-3">
                    <x-input-label for="location" :value="__('Location')" />
                    <select name="location" id="location"
                        class="border border-dark-300 text-slate-500 text-sm rounded-lg  block w-full p-2.5">
                        <option selected disabled>Choose Location</option>
                        @foreach (App\Enums\TableLocation::cases() as $location)
                            <option value="{{ $location->value }}">{{ $location->name }}</option>
                        @endforeach

                    </select>
                </div>

                <button type="submit"
                    class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">Create</button>
            </form>
        </div>
    </div>
</x-admin-layout>
