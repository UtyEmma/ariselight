<x-guest-layout>
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
            <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                <div class="md:col-span-5">
                    <div class="relative">
                        <img src="assets/images/about.jpg" class="shadow-md rounded-xl" alt="">
                        <div class="absolute text-center bottom-2/4 translate-y-2/4 start-0 end-0">
                            <a href="#!" data-type="youtube" data-id="yba7hPeTSjk"
                                class="inline-flex items-center justify-center w-20 h-20 text-green-600 bg-white rounded-full shadow-md lightbox dark:shadow-gyay-700 dark:bg-slate-900">
                                <i class="inline-flex items-center justify-center text-2xl mdi mdi-play"></i>
                            </a>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="md:col-span-7">
                    <div class="lg:ms-4">
                        <h4 class="mb-6 text-2xl font-semibold leading-normal md:text-3xl lg:leading-normal">Efficiency. Transparency. <br> Control.</h4>
                        <p class="max-w-xl text-slate-400">Hously developed a platform for the Real Estate marketplace that allows buyers and sellers to easily execute a transaction on their own. The platform drives efficiency, cost transparency and control into the hands of the consumers. Hously is Real Estate Redefined.</p>

                        <div class="mt-4">
                            <a href="{{route('properties')}}" class="mt-3 text-white bg-green-600 rounded-md btn hover:bg-green-700">Find Properties </a>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end grid-->
        </div><!--end container-->

        <div class="container mt-16 lg:mt-24">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 text-2xl font-semibold leading-normal md:text-3xl md:leading-normal">How It Works</h3>

                <p class="max-w-xl mx-auto text-slate-400">A great plateform to buy, sell and rent your properties without any agent or commisions.</p>
            </div><!--end grid-->

            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
                <!-- Content -->
                <div class="relative overflow-hidden text-center transition-all duration-500 ease-in-out bg-transparent group lg:px-10 rounded-xl">
                    <div class="relative -m-3 overflow-hidden text-transparent">
                        <i data-feather="hexagon" class="w-32 h-32 mx-auto fill-green-600/5"></i>
                        <div class="absolute flex items-center justify-center mx-auto text-4xl text-green-600 align-middle transition-all duration-500 ease-in-out top-2/4 -translate-y-2/4 start-0 end-0 rounded-xl">
                            <i class="uil uil-estate"></i>
                        </div>
                    </div>

                    <div class="mt-6">
                        <h5 class="text-xl font-medium">Evaluate Property</h5>
                        <p class="mt-3 text-slate-400">If the distribution of letters and 'words' is random, the reader will not be distracted from making.</p>
                    </div>
                </div>
                <!-- Content -->

                <!-- Content -->
                <div class="relative overflow-hidden text-center transition-all duration-500 ease-in-out bg-transparent group lg:px-10 rounded-xl">
                    <div class="relative -m-3 overflow-hidden text-transparent">
                        <i data-feather="hexagon" class="w-32 h-32 mx-auto fill-green-600/5"></i>
                        <div class="absolute flex items-center justify-center mx-auto text-4xl text-green-600 align-middle transition-all duration-500 ease-in-out top-2/4 -translate-y-2/4 start-0 end-0 rounded-xl">
                            <i class="uil uil-bag"></i>
                        </div>
                    </div>

                    <div class="mt-6">
                        <h5 class="text-xl font-medium">Meeting with Agent</h5>
                        <p class="mt-3 text-slate-400">If the distribution of letters and 'words' is random, the reader will not be distracted from making.</p>
                    </div>
                </div>
                <!-- Content -->

                <!-- Content -->
                <div class="relative overflow-hidden text-center transition-all duration-500 ease-in-out bg-transparent group lg:px-10 rounded-xl">
                    <div class="relative -m-3 overflow-hidden text-transparent">
                        <i data-feather="hexagon" class="w-32 h-32 mx-auto fill-green-600/5"></i>
                        <div class="absolute flex items-center justify-center mx-auto text-4xl text-green-600 align-middle transition-all duration-500 ease-in-out top-2/4 -translate-y-2/4 start-0 end-0 rounded-xl">
                            <i class="uil uil-key-skeleton"></i>
                        </div>
                    </div>

                    <div class="mt-6">
                        <h5 class="text-xl font-medium">Close the Deal</h5>
                        <p class="mt-3 text-slate-400">If the distribution of letters and 'words' is random, the reader will not be distracted from making.</p>
                    </div>
                </div>
                <!-- Content -->
            </div><!--end grid-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->

    <!-- Start CTA -->
    <section class="relative py-24 bg-[url('../../assets/images/bg/01.html')] bg-no-repeat bg-center bg-fixed bg-cover">
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="container">
            <div class="grid justify-center grid-cols-1 text-center lg:grid-cols-12 md:text-left">
                <div class="lg:col-start-2 lg:col-span-10">
                    <div class="grid items-center grid-cols-1 md:grid-cols-3">

                        <div class="text-center counter-box">
                            <h1 class="mb-2 text-4xl font-semibold text-white lg:text-5xl"><span class="counter-value" data-target="1548">1010</span>+</h1>
                            <h5 class="text-lg font-medium text-white counter-head">Properties Sell</h5>
                        </div><!--end counter box-->


                        <div class="text-center counter-box">
                            <h1 class="mb-2 text-4xl font-semibold text-white lg:text-5xl"><span class="counter-value" data-target="25">2</span>+</h1>
                            <h5 class="text-lg font-medium text-white counter-head">Award Gained</h5>
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

        <div class="container mt-16 lg:mt-24">
            <div class="grid grid-cols-1 text-center">
                <h3 class="mb-6 text-2xl font-medium leading-normal text-black md:text-3xl md:leading-normal dark:text-white">Have Question ? Get in touch!</h3>

                <p class="max-w-xl mx-auto text-slate-400">A great plateform to buy, sell and rent your properties without any agent or commisions.</p>

                <div class="mt-6">
                    <a href="contact.html" class="text-white bg-green-600 rounded-md btn hover:bg-green-700"><i class="align-middle uil uil-phone me-2"></i> Contact us</a>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
