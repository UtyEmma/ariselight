<div
    class="overflow-hidden duration-500 ease-in-out bg-white shadow group rounded-xl dark:bg-slate-900 hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700">
    <div class="relative">
        <img src="{{asset('storage/'.$property->image)}}" alt="">

        {{-- <div class="absolute top-4 end-4">
            <a href="javascript:void(0)"
                class="bg-white rounded-full shadow btn btn-icon dark:bg-slate-900 dark:shadow-gray-700 text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i
                    class="mdi mdi-heart mdi-18px"></i></a>
        </div> --}}
    </div>

    <div class="p-6 space-y-3">
        <div class="">
            <a href="{{route('properties.show', ['property' => $property->slug])}}"
                class="text-lg font-medium duration-500 ease-in-out hover:text-green-600">{{$property->title}}</a>
        </div>

        <ul class="flex justify-between py-6 list-none border-y border-slate-100 dark:border-gray-800">
            <li class="flex items-center">
                <i class="text-2xl text-green-600 uil uil-compress-arrows me-2"></i>
                <span>{{$property->type}}</span>
            </li>

            @if ($property->no_bedrooms)
                <li class="flex items-center">
                    <i class="text-2xl text-green-600 uil uil-bed-double me-2"></i>
                    <span>{{$property->no_bedrooms}} Beds</span>
                </li>
            @endif

            @if ($property->no_floors)
                <li class="flex items-center">
                    <i class="text-2xl text-green-600 uil uil-bath me-2"></i>
                    <span>{{$property->no_floors}} Floors</span>
                </li>
            @endif
        </ul>

        <ul class="flex items-center justify-between list-none">
            <li>
                <span class="mb-0 leading-tight text-slate-400">Price</span>
                <p class="text-lg font-medium"><x-naira />{{$property->price}}</p>
            </li>

            {{-- <li>
                <span class="text-slate-400">Rating</span>
                <ul class="text-lg font-medium list-none text-amber-400">
                    <li class="inline"><i class="mdi mdi-star"></i></li>
                    <li class="inline"><i class="mdi mdi-star"></i></li>
                    <li class="inline"><i class="mdi mdi-star"></i></li>
                    <li class="inline"><i class="mdi mdi-star"></i></li>
                    <li class="inline"><i class="mdi mdi-star"></i></li>
                    <li class="inline text-black dark:text-white">5.0(30)</li>
                </ul>
            </li> --}}
        </ul>
    </div>
</div><!--end property content-->
