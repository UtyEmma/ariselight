<footer class="relative mt-24 bg-slate-900 dark:bg-slate-800">
    <div class="container">
        <div class="grid grid-cols-1">
            <div class="relative py-16">
                <div class="relative w-full">
                    <div class="grid grid-cols-1 md:grid-cols-4 md:gap-10">
                        <div  class="md:col-span-2">
                            <a href="{{route('home')}}" class="text-[22px] focus:outline-none">
                                <img src="/assets/images/logo-light.png" alt="">
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
                    @if($settings->linkedin_link)
                        <li class="inline"><a href="{{$settings->linkedin_link->value}}" target="_blank" class="text-gray-400 border border-gray-800 rounded-md btn btn-icon btn-sm hover:text-white dark:border-gray-700 hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"><i data-feather="linkedin" class="w-4 h-4"></i></a></li>
                    @endif

                    @if ($settings->facebook_link)
                        <li class="inline"><a href="{{$settings->facebook_link->value}}" target="_blank" class="text-gray-400 border border-gray-800 rounded-md btn btn-icon btn-sm hover:text-white dark:border-gray-700 hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"><i data-feather="facebook" class="w-4 h-4"></i></a></li>
                    @endif

                    @if ($settings->instagram_link)
                        <li class="inline"><a href="{{$settings->instagram_link->value}}" target="_blank" class="text-gray-400 border border-gray-800 rounded-md btn btn-icon btn-sm hover:text-white dark:border-gray-700 hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"><i data-feather="instagram" class="w-4 h-4"></i></a></li>
                    @endif
                    @if ($settings->twitter_link)
                        <li class="inline"><a href="{{$settings->twitter_link->value}}" target="_blank" class="text-gray-400 border border-gray-800 rounded-md btn btn-icon btn-sm hover:text-white dark:border-gray-700 hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"><i data-feather="twitter" class="w-4 h-4"></i></a></li>
                    @endif
                    @if ($settings->site_email)
                        <li class="inline"><a href="mailto:{{$settings->site_email->vaue}}" class="text-gray-400 border border-gray-800 rounded-md btn btn-icon btn-sm hover:text-white dark:border-gray-700 hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"><i data-feather="mail" class="w-4 h-4"></i></a></li>
                    @endif
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
