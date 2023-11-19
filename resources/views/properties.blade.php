<x-guest-layout nav>
    <section class="relative table w-full py-48 bg-center bg-no-repeat bg-cover lg:py-48" style="background-image: url('{{asset('assets/images/bg/02.jpg')}}')">
        <div class="absolute inset-0 bg-black opacity-80"></div>
        <div class="container">
            <div class="grid grid-cols-1 mt-10 text-center">
                <h3 class="text-3xl font-medium leading-normal text-white md:text-4xl md:leading-normal">Properties</h3>
            </div><!--end grid-->
        </div><!--end container-->
    </section><!--end section-->
    <div class="relative">
        <div class="overflow-hidden text-white shape z-1 dark:text-slate-900">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <div class="container relative -mt-5 z-1">
        <div class="grid grid-cols-1">
            @include('components.property.search')
        </div><!--end grid-->
    </div><!--end container-->
    <!-- End Hero -->

    <!-- Start -->
    <section class="relative py-16 lg:py-24">
        <div class="container">
            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px]">
                @forelse ($properties as $property)
                    <x-property.item :property="$property" />
                @empty
                @endforelse
            </div>

            <div class="grid grid-cols-1 mt-8 md:grid-cols-12">
                <div class="text-center md:col-span-12">
                    {{$properties->links()}}
                </div>
            </div><!--end grid-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->
</x-guest-layout>
