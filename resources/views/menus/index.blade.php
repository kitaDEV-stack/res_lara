<x-guest-layout>
    <div class="grid gap-3 my-6 lg:mb-16 md:grid-cols-4">
        @foreach ($menus as $menu)              
            <div class="max-w-sm m-5 bg-white border border-gray-200 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="{{asset("menus_img/$menu->image")}}" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$menu->name}}</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$menu->description}}</p>
                    <div class="flex items-center justify-between p-4">
                        <span class="text-xl text-green-600">${{$menu->price}}</span>
                    </div>
                </div>
            </div>
            @endforeach
</x-guest-layout>