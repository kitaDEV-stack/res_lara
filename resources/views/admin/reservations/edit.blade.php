<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin') }}
        </h2>
    </x-slot>

    @if ($errors->any())
        <div class="" role="alert">
            <ul>
                @foreach ($errors as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form method="POST" action="{{ route('admin.reservations.update', $reservation->id) }}"
                class="w-[500px] m-auto my-10">
                @csrf
                @method('PATCH')
                <div class="mb-3">
                    <x-input-label for="first_name" :value="__('First Name')" />
                    <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name"
                        autofocus autocomplete="first_name" value="{{$reservation->first_name}}" />
                    <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                </div>

                <div class="mb-3">
                    <x-input-label for="last_name" :value="__('Last Name')" />
                    <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name"
                         autofocus autocomplete="last_name" value="{{$reservation->last_name}}" />
                    <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                </div>

                <div class="mb-3">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                         autofocus autocomplete="email" value="{{$reservation->email}}" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="mb-3">
                    <x-input-label for="tel_number" :value="__('Telephone Number')" />
                    <x-text-input id="tel_number" class="block mt-1 w-full" type="number" name="tel_number"
                         autofocus autocomplete="tel_number" value="{{$reservation->tel_number}}" />
                    <x-input-error :messages="$errors->get('tel_number')" class="mt-2" />
                </div>
                <div class="mb-3">
                    <x-input-label for="guest_number" :value="__('Guest_number')" />
                    <x-text-input id="guest_number" rows="4" max="5"
                        class="block p-2.5 w-full text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                        type="number" name="guest_number"  autofocus autocomplete="guest_number" value="{{$reservation->guest_number}}" />
                    <x-input-error :messages="$errors->get('guest_number')" class="mt-2" />
                </div>

                <div class="relative max-w-sm">
                    <x-input-label for="reservation" :value="__('Reservation Date')" />
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                        </svg>
                    </div>
                    <input type="datetime-local" name="res_date" min="2023-08-31"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Select date" value="{{$reservation->res_date->format('Y-m-d\TH:i:s')}}">
                        <x-input-error :messages="$errors->get('res_date')" class="mt-2" />
                </div>

                <div class="mb-3">
                    <x-input-label for="table_id" :value="__('Table')" />
                    <select name="table_id" id="table_id"
                        class="border border-dark-300 text-slate-500 text-sm rounded-lg  block w-full p-2.5">
                        <option selected disabled>Choose Table</option>
                        @foreach ($tables as $table)
                            <option value="{{ $table->id }}" @selected($table->id == $reservation->table_id)>{{ $table->name }}({{$table->guest_number}} Guests)</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit"
                    class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">Update</button>
            </form>
        </div>
    </div>
</x-admin-layout>
