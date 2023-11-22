<x-guest-layout :title="'About Us'">
    <section class="relative table w-full py-32 bg-center bg-no-repeat bg-cover lg:py-36" style="background-image: url({{asset('assets/images/about.jpg')}})">
        <div class="absolute inset-0 bg-black opacity-80"></div>
        <div class="container">
            <div class="grid grid-cols-1 mt-10 text-center">
                <h3 class="text-3xl font-medium leading-normal text-white md:text-4xl md:leading-normal">About Us</h3>
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

    <section class="relative py-16 lg:py-24">
        <div class="container">
            <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                <div class="md:col-span-5">
                    <div class="relative">
                        <img src="{{asset('assets/images/ceo.jpg')}}" class="shadow-md rounded-xl" alt="">
                    </div>
                </div><!--end col-->

                <div class="md:col-span-7">
                    <div class="lg:ms-4">
                        <h4 class="mb-6 text-2xl font-semibold leading-normal md:text-3xl lg:leading-normal">Expert Guidance Tailored for You.</h4>
                        <p class="max-w-xl text-slate-400 mb-5">Navigating the real estate market can be daunting, but with Arise Light, it becomes a seamless journey. Our agents bring not only years of industry experience but also a deep understanding of local markets. We walk you through each property, providing comprehensive insights, discussing market trends, and addressing any questions you may have. From the initial consultation to the final closing, our commitment to personalized service ensures that you're not just finding a property; you're discovering a place where memories will be made, where dreams will unfold, and where your investment will thrive. Trust us to be your unwavering partner in your real estate endeavors.</p>
                        <p class="max-w-xl text-slate-400">We believe in transparency, integrity, and exceeding expectations. Our core values serve as the guiding light in every interaction and transaction. We understand that real estate is not just about transactions; it's about relationships and trust. Whether you're seeking a cozy family home where laughter fills the halls, a luxurious estate that exudes elegance, or a strategic investment opportunity that promises future prosperity, our team of seasoned experts is dedicated to guiding you every step of the way. We prioritize understanding your unique needs, ensuring that each property recommendation aligns with your vision and goals.</p>

                        <div class="mt-6">
                            <p class="max-w-xl text-slate-400">{{env('CEO_NAME')}}</p>
                            <p class="max-w-xl font-semibold">CEO Arise Light</p>
                        </div>

                        <div class="mt-4">
                            <a href="{{route('properties')}}" class="mt-3 text-white bg-green-600 rounded-md btn hover:bg-green-700">Find Properties </a>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end grid-->
        </div><!--end container-->

        @include('partials.why-choose-us')
    </section><!--end section-->
    <!-- End -->

    <!-- Start CTA -->
    <section class="relative py-24 bg-fixed bg-center bg-no-repeat bg-cover" style="background-image: url('{{asset('assets/images/bg/02.jpg')}}');">
        <div class="absolute inset-0 bg-black/75"></div>
        <div class="container">
            <div class="grid justify-center grid-cols-1 text-center lg:grid-cols-12 md:text-left">
                <div class="lg:col-start-2 lg:col-span-10">
                    <div class="grid items-center grid-cols-1 md:grid-cols-3">

                        <div class="text-center counter-box">
                            <h1 class="mb-2 text-4xl font-semibold text-white lg:text-5xl"><span class="counter-value" data-target="1548">1010</span>+</h1>
                            <h5 class="text-lg font-medium text-white counter-head">Properties Sold</h5>
                        </div><!--end counter box-->


                        <div class="text-center counter-box">
                            <h1 class="mb-2 text-4xl font-semibold text-white lg:text-5xl"><span class="counter-value" data-target="25">2</span>+</h1>
                            <h5 class="text-lg font-medium text-white counter-head">Clients</h5>
                        </div><!--end counter box-->


                        <div class="text-center counter-box">
                            <h1 class="mb-2 text-4xl font-semibold text-white lg:text-5xl"><span class="counter-value" data-target="9">0</span>+</h1>
                            <h5 class="text-lg font-medium text-white counter-head">Years Experience</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative py-16 lg:py-24">
        @include('partials.testimonials')

        @include('partials.cta')
    </section>
</x-guest-layout>
