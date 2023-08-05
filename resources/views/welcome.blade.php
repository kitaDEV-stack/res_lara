<x-guest-layout>
    {{-- hero section --}}
    <section
        class="bg-center mb-5 bg-no-repeat bg-[url('D:\xampp\htdocs\new_laravel\resto_app\public\img\hero.jpg')] bg-gray-700 bg-blend-multiply">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
                Welcome to Laravel Restaurant</h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Here at Flowbite we focus on
                markets where technology, innovation, and capital can unlock long-term value and drive economic growth.
            </p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                <a href="{{ route('reservations.step.one') }}"
                    class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-black rounded-lg bg-white hover:bg-gray-800 hover:text-white focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Make Your Reservation
                </a>
            </div>
        </div>
    </section>
    {{-- hero section --}}
    {{-- welcome section --}}
    <section class="bg-white dark:bg-gray-900">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h4
                    class="max-w-lg mb-4 text-lg text-gray-500 font-bold tracking-tight leading-none md:text-xl xl:text-lg dark:text-white">
                    OUR STORY
                </h4>
                <h1
                    class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
                    Welcome</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti non aut deleniti laboriosam
                    ipsum. Doloremque odit excepturi, ipsum aut facilis quae voluptatem illo, recusandae voluptates
                    accusamus deserunt ducimus ullam corporis!</p>
                <a href="#"
                    class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-black hover:bg-gray-800 dark:focus:ring-blue-900">
                    Read More
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="{{ asset('img/welcome.jpg') }}" class="rounded-lg" alt="mockup">
            </div>
        </div>
    </section>
    {{-- welcome section --}}
    {{-- about section --}}
    <section class="bg-white my-5 dark:bg-gray-900">
        <div
            class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
            <img class="w-full" src="{{ asset('img/about.svg') }}" alt="dashboard image">
            <div class="mt-4 md:mt-0">
                <h4
                    class="max-w-lg mb-4 text-lg text-gray-500 font-bold tracking-tight leading-none md:text-xl xl:text-lg dark:text-white">
                    About Us
                </h4>
                <h1
                    class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
                    Why Choose Us?</h1>
                <p class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400">Flowbite helps you connect with
                    friends and communities of people who share your interests. Connecting with your friends and family
                    as well as discovering new ones is easy with features like Groups.</p>
                <div class="mb-5">
                    <p class="text-gray-500 inline-flex md:text-lg my-3"><svg
                            class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 1H1m14 18H1m2 0v-4.333a2 2 0 0 1 .4-1.2L5.55 10.6a1 1 0 0 0 0-1.2L3.4 6.533a2 2 0 0 1-.4-1.2V1h10v4.333a2 2 0 0 1-.4 1.2L10.45 9.4a1 1 0 0 0 0 1.2l2.15 2.867a2 2 0 0 1 .4 1.2V19H3Z" />
                        </svg>
                        Faster Processing and Delivery</p>
                </div>
                <div class="mb-5">
                    <p class="text-gray-500 inline-flex md:text-lg my-3"><svg
                            class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 11 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1.75 15.363a4.954 4.954 0 0 0 2.638 1.574c2.345.572 4.653-.434 5.155-2.247.502-1.813-1.313-3.79-3.657-4.364-2.344-.574-4.16-2.551-3.658-4.364.502-1.813 2.81-2.818 5.155-2.246A4.97 4.97 0 0 1 10 5.264M6 17.097v1.82m0-17.5v2.138" />
                        </svg>
                        Easy Payments
                    </p>
                </div>
                <div class="mb-5">
                    <p class="text-gray-500 inline-flex md:text-lg my-3"><svg
                            class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                            <path
                                d="m17.351 3.063-8-3a1.009 1.009 0 0 0-.7 0l-8 3A1 1 0 0 0 0 4a19.394 19.394 0 0 0 8.47 15.848 1 1 0 0 0 1.06 0A19.394 19.394 0 0 0 18 4a1 1 0 0 0-.649-.937Zm-3.644 4.644-5 5A1 1 0 0 1 8 13c-.033 0-.065 0-.1-.005a1 1 0 0 1-.733-.44l-2-3a1 1 0 0 1 1.664-1.11l1.323 1.986 4.138-4.138a1 1 0 0 1 1.414 1.414h.001Z" />
                        </svg>
                        100% Protectiong and Security for Your App</p>
                </div>
            </div>
        </div>
    </section>
    {{-- about section --}}
    {{-- menu section --}}
    <section>
        <div class="mb-5">
            <h4 class="text-2xl text-center mb-5 text-gray-500 dark:text-white">Our Menu</h4>
            <h1
                class="mb-4 text-4xl text-center font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                TODAY'S SPECIALITY</h1>
        </div>
        <div class="grid gap-3 mb-6 lg:mb-16 md:grid-cols-4">
            @foreach ($specials->menus as $menu)
                <div
                    class="max-w-sm m-5 bg-white border border-gray-200 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{ asset("menus_img/$menu->image") }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                {{ $menu->name }}</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $menu->description }}</p>
                        <div class="flex items-center justify-between p-4">
                            <span class="text-xl text-green-600">${{ $menu->price }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- menu section --}}
</x-guest-layout>
