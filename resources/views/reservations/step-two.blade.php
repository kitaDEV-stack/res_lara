<x-guest-layout>
    <div class="container w-full px-5 py-6 mx-auto">
        <div class="flex items-center min-h-screen">
            <div class="flex-1 h-full max-w-4xl-mx-auto bg-white rounded-lg shadow-xl">
                <div class="flex flex-col md:flex-row">
                    <div class="h-32 md:h-auto md:w-1/2">
                        <img src="{{ asset('img/reservation.jpg') }}" alt="" class="object-cover w-full h-full">
                    </div>
                    <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2 bg-gray-100">
                        <div class="w-full">
                            <h3 class="text-2xl text-center mb-5 text-gray-500 dark:text-white">
                                Make Reservation
                            </h3>
                            <div class="w-full bg-gray-200 rounded-full">
                                <div
                                    class="w-50 p-3 text-sm font-medium leading-none text-center text-white bg-black rounded-full">
                                    Step 2</div>
                            </div>
                            <form method="POST" action="{{route('reservations.store.step.two')}}"
                                class="w-[500px] m-auto my-10">
                                @csrf
                                <div class="relative z-0 w-full mb-6 group">
                                    <select type="table_id" name="table_id" id="table_id"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-black peer">
                                        <option selected disabled>Choose Table</option>
                                        @foreach ($tables as $table)
                                            <option value="{{ $table->id }}" @selected($table->id == $reservation->table_id)>
                                                {{ $table->name }}({{ $table->guest_number }} Guests)</option>
                                        @endforeach
                                    </select>
                                    <label for="table_id"
                                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-black peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email
                                        address</label>
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                                <div class="mt-6 p-4 flex justify-between">
                                    <a href="{{route('reservations.step.one')}}" class="text-white bg-black hover:bg-gray-800 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Previous</a>
                                    <button type="submit"
                                    class="text-white bg-black hover:bg-gray-800 focus:ring-4 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Make Reservation
                                </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
