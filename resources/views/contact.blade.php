<x-guest-layout title="Contact Us">
    <section class="relative table w-full py-32 bg-center bg-no-repeat bg-cover lg:py-36" style="background-image: url({{asset('assets/images/about.jpg')}})">
        <div class="absolute inset-0 bg-black opacity-80"></div>
        <div class="container">
            <div class="grid grid-cols-1 mt-10 text-center">
                <h3 class="text-3xl font-medium leading-normal text-white md:text-4xl md:leading-normal">Contact Us</h3>
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
                <div class="lg:col-span-7 md:col-span-6">
                    <img src="assets/images/svg/contact.svg" alt="">
                </div>

                <div class="lg:col-span-5 md:col-span-6">
                    <div class="lg:me-5">
                        <div class="p-6 bg-white rounded-md shadow dark:bg-slate-900 dark:shadow-gray-700">
                            <h3 class="mb-6 text-2xl font-medium leading-normal">Get in touch !</h3>

                            <form method="POST" action="{{route('contact.send')}}">
                                @csrf
                                <p class="mb-0" id="error-msg"></p>
                                <div id="simple-msg"></div>
                                <div class="grid lg:grid-cols-12 lg:gap-6">
                                    <div class="mb-5 lg:col-span-6">
                                        <label for="name" class="font-medium">Your Name:</label>
                                        <input name="name" type="text" class="mt-2 form-input" placeholder="Name">
                                        <x-input.error key="name" />
                                    </div>

                                    <div class="mb-5 lg:col-span-6">
                                        <label for="email" class="font-medium">Your Email:</label>
                                        <input name="email" type="email" class="mt-2 form-input" placeholder="Email">
                                        <x-input.error key="email" />
                                    </div>
                                </div>

                                <div class="grid grid-cols-1">
                                    <div class="mb-5">
                                        <label for="subject" class="font-medium">Your Question:</label>
                                        <input name="subject" class="mt-2 form-input" placeholder="Subject">
                                        <x-input.error key="subject" />
                                    </div>

                                    <div class="mb-5">
                                        <label for="comments" class="font-medium">Your Message:</label>
                                        <textarea name="message" class="mt-2 form-input textarea" placeholder="Message"></textarea>
                                        <x-input.error key="message" />
                                    </div>
                                </div>

                                @if (session('error') || session('success'))
                                    <div class="py-3">
                                        @if (session('error'))
                                            <p class="text-red-600">{{session()->get('success')}}</p>
                                        @endif
                                        @if (session('success'))
                                            <p class="text-green-600">{{session()->get('success')}}</p>
                                        @endif
                                    </div>
                                @endif
                                <button type="submit" class="space-x-3 text-white bg-green-600 rounded-md btn hover:bg-green-700">Send Message</button>
                                {{-- <x-spinner wire:loading wire:trigger='send' /> --}}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div><!--end container-->

        <div class="container mt-16 lg:mt-24">
            <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px]">
                <div class="px-6 text-center">
                    <div class="relative -m-3 overflow-hidden text-transparent">
                        <i data-feather="hexagon" class="w-32 h-32 mx-auto fill-green-600/5"></i>
                        <div class="absolute flex items-center justify-center mx-auto text-4xl text-green-600 align-middle transition-all duration-500 ease-in-out top-2/4 -translate-y-2/4 start-0 end-0 rounded-xl">
                            <i class="uil uil-phone"></i>
                        </div>
                    </div>

                    <div class="content mt-7">
                        <h5 class="text-xl font-medium title h5">Phone</h5>
                        <div class="mt-3">
                            <a href="tel:{{$settings->contact_phone?->value}}contact_phone" class="text-green-600 transition duration-500 btn btn-link hover:text-green-600 after:bg-green-600">{{$settings->contact_phone?->value}}</a>
                        </div>
                    </div>
                </div>

                <div class="px-6 text-center">
                    <div class="relative -m-3 overflow-hidden text-transparent">
                        <i data-feather="hexagon" class="w-32 h-32 mx-auto fill-green-600/5"></i>
                        <div class="absolute flex items-center justify-center mx-auto text-4xl text-green-600 align-middle transition-all duration-500 ease-in-out top-2/4 -translate-y-2/4 start-0 end-0 rounded-xl">
                            <i class="uil uil-envelope"></i>
                        </div>
                    </div>

                    <div class="content mt-7">
                        <h5 class="text-xl font-medium title h5">Email</h5>
                        <div class="mt-3">
                            <a href="mailto:{{$settings->site_email?->value}}" class="text-green-600 transition duration-500 btn btn-link hover:text-green-600 after:bg-green-600">{{$settings->site_email?->value}}</a>
                        </div>
                    </div>
                </div>

                <div class="px-6 text-center">
                    <div class="relative -m-3 overflow-hidden text-transparent">
                        <i data-feather="hexagon" class="w-32 h-32 mx-auto fill-green-600/5"></i>
                        <div class="absolute flex items-center justify-center mx-auto text-4xl text-green-600 align-middle transition-all duration-500 ease-in-out top-2/4 -translate-y-2/4 start-0 end-0 rounded-xl">
                            <i class="uil uil-map-marker"></i>
                        </div>
                    </div>

                    <div class="content mt-7">
                        <h5 class="text-xl font-medium title h5">Location</h5>
                        <p class="mt-3 text-slate-400">{{$settings->contact_address?->value}}</p>
                    </div>
                </div>
            </div><!--end grid-->
        </div><!--end container-->
    </section>
</x-guest-layout>
