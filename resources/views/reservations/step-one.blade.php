<x-guest-layout>
    <div class="container w-full px-5 py-6 mx-auto">
        <div class="flex items-center min-h-screen">
            <div class="flex-1 h-full max-w-4xl-mx-auto bg-white rounded-lg shadow-xl">
                <div class="flex flex-col md:flex-row">
                    <div class="h-32 md:h-auto md:w-1/2">
                        <img src="{{asset('img/reservation.jpg')}}" alt="" class="object-cover w-full h-full">
                    </div>
                    <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2 bg-gray-100">
                        <div class="w-full">
                            <h3 class="text-2xl text-center mb-5 text-gray-500 dark:text-white">
                                Make Reservation
                            </h3>
                            <div class="w-full bg-gray-200 rounded-full">
                                <div class="w-40 p-3 text-sm font-medium leading-none text-center text-white bg-black rounded-full">Step 1</div>
                            </div>
                            <form method="POST" action="{{route('reservations.store.step.one')}}" class="w-[500px] m-auto my-10">
                                @csrf
                                <div class="relative z-0 w-full mb-6 group">
                                    <input type="email" name="email" id="email"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-black peer"
                                        placeholder=" " value="{{$reservation->email ?? ''}}" />
                                    <label for="email"
                                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-black peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email
                                        address</label>
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                                <div class="relative z-0 w-full mb-6 group">
                                    <input type="number" name="guest_number" id="guest_number"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-black peer"
                                        placeholder=" " value="{{$reservation->guest_number ?? ''}}" />
                                    <label for="guest_number"
                                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-black peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Guest Number</label>
                                        <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                                </div>
                                <div class="grid md:grid-cols-2 md:gap-6">
                                    <div class="relative z-0 w-full mb-6 group">
                                        <input type="text" name="first_name" id="first_name"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-black peer"
                                            placeholder=" " value="{{$reservation->first_name ?? ''}}" />
                                        <label for="floating_first_name"
                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-black peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First
                                            name</label>
                                            <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                                    </div>
                                    <div class="relative z-0 w-full mb-6 group">
                                        <input type="text" name="last_name" id="last_name"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-black peer"
                                            placeholder=" "value="{{$reservation->last_name ?? ''}}" />
                                        <label for="floating_last_name"
                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-black peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last
                                            name</label>
                                            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="grid md:grid-cols-2 md:gap-6">
                                    <div class="relative z-0 w-full mb-6 group">
                                        <input type="number" name="tel_number"
                                            id="tel_number"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-black peer"
                                            placeholder=" " value="{{$reservation->tel_number ?? ''}}" />
                                        <label for="tel_number"
                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-black peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone
                                            number (123-456-7890)</label>
                                            <x-input-error :messages="$errors->get('tel_number')" class="mt-2" />
                                    </div>
                                    <div class="relative z-0 w-full mb-6 group">
                                        <input type="datetime-local" name="res_date" id="res_date"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-black peer"
                                            min="{{$min_date->format('Y-m-d\TH:i:s')}}" max="{{$max_date->format('Y-m-d\TH:i:s')}}" value="{{$reservation ? $reservation->res_date->format('Y-m-d\TH:i:s') : ''}}" />
                                        <label for="res_date"
                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-black peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Reservation Date</label>
                                            <x-input-error :messages="$errors->get('res_date')" class="mt-2" />
                                    </div>
                                </div>
                                <button type="submit"
                                    class="text-white bg-black hover:bg-gray-800 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Next</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
