<x-guest-layout :title="'Home'">
    <section class="relative mt-20">
        <div class="mx-2 container-fluid md:mx-4">
            <div class="relative table w-full pt-40 overflow-hidden bg-center bg-cover shadow-md pb-52 rounded-2xl"
            >
                <div>
                    <video src="{{asset('assets/videos/VID-20231121-WA0004.mp4')}}" loop autoplay muted class="absolute inset-0 object-cover h-full min-w-full"></video>
                </div>
                <div class="absolute inset-0 bg-black/75 overflow-clip"></div>

                <div class="container">
                    <div class="grid grid-cols-1">
                        <div class="text-center ltr:md:text-left rtl:md:text-right">
                            <h1 class="mb-6 text-3xl font-bold leading-normal text-white md:text-4xl lg:leading-normal lg:text-5xl">Discover Enugu's Premier <br> Real Estate with <span class="text-green-600">Arise Light.</span> </h1>
                            <p class="max-w-xl text-lg text-white md:text-xl">We are your trusted partner for finding homes, estates, and lucrative property Investments in Enugu State.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative pb-16 md:pb-24">
        <div class="container">
            <div class="grid justify-center grid-cols-1">
                @include('components.property.search')
            </div>
        </div>

        <div class="container mt-16 lg:mt-24">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                <div class="md:col-span-6">
                    <div class="relative rounded-lg bg-green-600/10" x-data="{
                        play: false,
                        video: null
                    }">
                        {{-- <img src="assets/images/about.jpg" class="shadow-md rounded-xl" alt=""> --}}
                        <video src="{{asset('assets/videos/VID-20231121-WA0005.mp4')}}" x-bind:autoplay="play" x-on:pause="play = false" x-on:play="play = true" controls x-ref="video" class="w-full rounded-md h-[30rem]"></video>
                            <div x-on:click="$refs.video.play();" x-show="play == false" class="absolute text-center bottom-2/4 translate-y-2/4 start-0 end-0">
                                <button

                                    class="inline-flex items-center justify-center w-20 h-20 text-green-600 bg-white rounded-full shadow-md dark:shadow-gyay-700 dark:bg-slate-900">
                                    <i class="inline-flex items-center justify-center text-2xl mdi mdi-play"></i>
                                </button>
                            </div>
                    </div>
                </div>

                <div class="md:col-span-6">
                    <div class="lg:ms-4">
                        <h4 class="mb-6 text-2xl font-semibold leading-normal md:text-3xl lg:leading-normal">Discover Your Next Home with <br/> {{env('APP_NAME')}}</h4>
                        <p class="max-w-xl mb-5 text-slate-400">Arise Light is a premier real estate agency dedicated to guiding our clients through the complexities of the real estate market. With years of experience and a commitment to personalized service, we've helped countless individuals, families, and investors achieve their real estate goals.</p>
                        <p class="max-w-xl text-slate-400">At Arise Light, we illuminate your path to the perfect property. We understand that finding the ideal home or investment property involves more than just square footage and amenities—it's about finding a place where your dreams and aspirations can flourish.</p>

                        <div class="mt-4">
                            <a href="{{route('about')}}" class="mt-3 text-white bg-green-600 rounded-md btn hover:bg-green-700">Learn More </a>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end grid-->
        </div>

        @include('partials.why-choose-us')

        @if (count($properties) > 0)
            <div class="container mt-16 lg:mt-24">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h3 class="mb-4 text-2xl font-semibold leading-normal md:text-3xl md:leading-normal">Featured Properties</h3>

                    <p class="max-w-xl mx-auto text-slate-400">Find a property that fits into your ideal lifestyle <br/> and investment goals.</p>
                </div><!--end grid-->

                <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
                    @forelse ($properties as $property)
                        <x-property.item :property="$property" />
                    @empty
                    @endforelse
                </div><!--en grid-->
            </div>
        @endif

        @include('partials.testimonials')

        @include('partials.cta')
    </section>
</x-guest-layout>
