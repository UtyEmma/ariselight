<footer class="relative mt-24 bg-slate-900 dark:bg-slate-800">
    <div class="container">
        <div class="grid grid-cols-1">
            <div class="relative py-16">
                <div class="relative w-full">
                    {{-- <div class="relative px-6 py-10 overflow-hidden bg-white shadow-lg -top-40 dark:bg-slate-900 lg:px-8 rounded-xl dark:shadow-gray-700">
                        <div class="grid md:grid-cols-2 grid-cols-1 items-center gap-[30px]">
                            <div class="text-center ltr:md:text-left rtl:md:text-right z-1">
                                <h3 class="text-2xl font-medium leading-normal text-black md:text-3xl md:leading-normal dark:text-white">Subscribe to Newsletter!</h3>
                                <p class="max-w-xl mx-auto text-slate-400">Subscribe to get latest updates and information.</p>
                            </div>

                            <div class="subcribe-form z-1">
                                <form class="relative max-w-lg md:ms-auto">
                                    <input type="email" id="subcribe" name="email" class="bg-white rounded-full shadow dark:bg-slate-900 dark:shadow-gray-700" placeholder="Enter your email :">
                                    <button type="submit" class="text-white bg-green-600 rounded-full btn hover:bg-green-700">Subscribe</button>
                                </form><!--end form-->
                            </div>
                        </div>

                        <div class="absolute -top-5 -start-5">
                            <div class="uil uil-envelope lg:text-[150px] text-7xl text-black/5 dark:text-white/5 ltr:-rotate-45 rtl:rotate-45"></div>
                        </div>

                        <div class="absolute -bottom-5 -end-5">
                            <div class="uil uil-pen lg:text-[150px] text-7xl text-black/5 dark:text-white/5 rtl:-rotate-90"></div>
                        </div>
                    </div> --}}

                    <div class="grid grid-cols-1 md:grid-cols-3">
                        <div >
                            <a href="#" class="text-[22px] focus:outline-none">
                                <img src="assets/images/logo-light.png" alt="">
                            </a>
                            <p class="mt-6 text-gray-300">{{$settings->description?->value}}</p>

                        </div>

                        <div>
                            <h5 class="tracking-[1px] text-gray-100 font-semibold">Usefull Links</h5>
                            <ul class="mt-6 list-none footer-list">
                                <li><a href="{{route('about')}}" class="duration-500 ease-in-out text-slate-300 hover:text-slate-400"><i class="uil uil-angle-right-b me-1"></i> About Us</a></li>
                                <li class="mt-[10px]"><a href="{{route('properties')}}" class="duration-500 ease-in-out text-slate-300 hover:text-slate-400"><i class="uil uil-angle-right-b me-1"></i> Properties</a></li>
                                <li class="mt-[10px]"><a href="{{route('contact')}}" class="duration-500 ease-in-out text-slate-300 hover:text-slate-400"><i class="uil uil-angle-right-b me-1"></i> Contact</a></li>
                            </ul>
                        </div>

                        <div>
                            <h5 class="tracking-[1px] text-gray-100 font-semibold">Contact Details</h5>

                            <div class="flex mt-6">
                                <i data-feather="map-pin" class="w-5 h-5 text-green-600 me-3"></i>
                                <div class="">
                                    <h6 class="mb-2 text-gray-300">{{$settings->contact_address->value}}</h6>
                                </div>
                            </div>

                            <div class="flex mt-6">
                                <i data-feather="mail" class="w-5 h-5 text-green-600 me-3"></i>
                                <div class="">
                                    <a href="mailto:{{$settings->contact_phone->value}}" class="duration-500 ease-in-out text-slate-300 hover:text-slate-400">{{$settings->site_email->value}}</a>
                                </div>
                            </div>

                            <div class="flex mt-6">
                                <i data-feather="phone" class="w-5 h-5 text-green-600 me-3"></i>
                                <div class="">
                                    <a href="tel:{{$settings->contact_phone->value}}" class="duration-500 ease-in-out text-slate-300 hover:text-slate-400">{{$settings->contact_phone->value}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-[30px] px-0 border-t border-gray-800 dark:border-gray-700">
        <div class="container text-center">
            <div class="grid items-center gap-6 md:grid-cols-2">
                <div class="text-center ltr:md:text-left rtl:md:text-right">
                    <p class="mb-0 text-gray-300">© <script>document.write(new Date().getFullYear())</script> {{$settings->site_title->value}}. Design with <i class="text-red-600 mdi mdi-heart"></i>.</p>
                </div>

                <ul class="text-center list-none ltr:md:text-right rtl:md:text-left">
                    @if($settings->linkedin)
                        <li class="inline"><a href="{{$settings->linkedin->value}}" target="_blank" class="text-gray-400 border border-gray-800 rounded-md btn btn-icon btn-sm hover:text-white dark:border-gray-700 hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"><i data-feather="linkedin" class="w-4 h-4"></i></a></li>
                    @endif
                    <li class="inline"><a href="https://www.facebook.com/shreethemes" target="_blank" class="text-gray-400 border border-gray-800 rounded-md btn btn-icon btn-sm hover:text-white dark:border-gray-700 hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"><i data-feather="facebook" class="w-4 h-4"></i></a></li>
                    <li class="inline"><a href="https://www.instagram.com/shreethemes/" target="_blank" class="text-gray-400 border border-gray-800 rounded-md btn btn-icon btn-sm hover:text-white dark:border-gray-700 hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"><i data-feather="instagram" class="w-4 h-4"></i></a></li>
                    <li class="inline"><a href="https://twitter.com/shreethemes" target="_blank" class="text-gray-400 border border-gray-800 rounded-md btn btn-icon btn-sm hover:text-white dark:border-gray-700 hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"><i data-feather="twitter" class="w-4 h-4"></i></a></li>
                    <li class="inline"><a href="mailto:support@shreethemes.in" class="text-gray-400 border border-gray-800 rounded-md btn btn-icon btn-sm hover:text-white dark:border-gray-700 hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"><i data-feather="mail" class="w-4 h-4"></i></a></li>
                    <li class="inline"><a href="https://forms.gle/QkTueCikDGqJnbky9" target="_blank" class="text-gray-400 border border-gray-800 rounded-md btn btn-icon btn-sm hover:text-white dark:border-gray-700 hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"><i data-feather="file-text" class="w-4 h-4"></i></a></li>
                </ul><!--end icon-->
            </div><!--end grid-->
        </div><!--end container-->
    </div>
</footer><!--end footer-->
<!-- End Footer -->
<!-- Switcher -->
<div class="fixed top-1/4 -left-2 z-3">
    <span class="relative inline-block rotate-90">
        <input type="checkbox" class="absolute opacity-0 checkbox" id="chk" />
        <label class="flex items-center justify-between h-8 p-1 rounded-full shadow cursor-pointer label bg-slate-900 dark:bg-white dark:shadow-gray-700 w-14" for="chk">
            <i class="uil uil-moon text-[20px] text-yellow-500 mt-1"></i>
            <i class="uil uil-sun text-[20px] text-yellow-500 mt-1"></i>
            <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] start-[2px] w-7 h-7"></span>
        </label>
    </span>
</div>

<a href="#" onclick="topFunction()" id="back-to-top" class="fixed z-10 items-center justify-center hidden text-lg text-center text-white bg-green-600 rounded-full back-to-top bottom-5 end-5 h-9 w-9"><i class="uil uil-arrow-up"></i></a>
