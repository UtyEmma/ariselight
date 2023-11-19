<x-guest-layout>
    <section class="relative pb-16 mt-20 md:pb-24">
        <div class="container-fluid">
            <div class="mt-4 md:flex">
                <div class="p-1 lg:w-1/2 md:w-1/2">
                    <div class="relative overflow-hidden group">
                        <img src="assets/images/property/single/1.jpg" alt="">
                        <div class="absolute inset-0 duration-500 ease-in-out group-hover:bg-slate-900/70"></div>
                        <div class="absolute invisible text-center -translate-y-1/2 top-1/2 start-0 end-0 group-hover:visible">
                            <a href="assets/images/property/single/1.jpg" class="text-white bg-green-600 rounded-full btn btn-icon hover:bg-green-700 lightbox"><i class="uil uil-camera"></i></a>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/2 md:w-1/2">
                    <div class="flex">
                        <div class="w-1/2 p-1">
                            <div class="relative overflow-hidden group">
                                <img src="assets/images/property/single/2.jpg" alt="">
                                <div class="absolute inset-0 duration-500 ease-in-out group-hover:bg-slate-900/70"></div>
                                <div class="absolute invisible text-center -translate-y-1/2 top-1/2 start-0 end-0 group-hover:visible">
                                    <a href="assets/images/property/single/2.jpg" class="text-white bg-green-600 rounded-full btn btn-icon hover:bg-green-700 lightbox"><i class="uil uil-camera"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="w-1/2 p-1">
                            <div class="relative overflow-hidden group">
                                <img src="assets/images/property/single/3.jpg" alt="">
                                <div class="absolute inset-0 duration-500 ease-in-out group-hover:bg-slate-900/70"></div>
                                <div class="absolute invisible text-center -translate-y-1/2 top-1/2 start-0 end-0 group-hover:visible">
                                    <a href="assets/images/property/single/3.jpg" class="text-white bg-green-600 rounded-full btn btn-icon hover:bg-green-700 lightbox"><i class="uil uil-camera"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex">
                        <div class="w-1/2 p-1">
                            <div class="relative overflow-hidden group">
                                <img src="assets/images/property/single/4.jpg" alt="">
                                <div class="absolute inset-0 duration-500 ease-in-out group-hover:bg-slate-900/70"></div>
                                <div class="absolute invisible text-center -translate-y-1/2 top-1/2 start-0 end-0 group-hover:visible">
                                    <a href="assets/images/property/single/4.jpg" class="text-white bg-green-600 rounded-full btn btn-icon hover:bg-green-700 lightbox"><i class="uil uil-camera"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="w-1/2 p-1">
                            <div class="relative overflow-hidden group">
                                <img src="assets/images/property/single/5.jpg" alt="">
                                <div class="absolute inset-0 duration-500 ease-in-out group-hover:bg-slate-900/70"></div>
                                <div class="absolute invisible text-center -translate-y-1/2 top-1/2 start-0 end-0 group-hover:visible">
                                    <a href="assets/images/property/single/5.jpg" class="text-white bg-green-600 rounded-full btn btn-icon hover:bg-green-700 lightbox"><i class="uil uil-camera"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end flex-->
        </div><!--end container fluid-->

        <div class="container mt-16 md:mt-24">
            <div class="md:flex">
                <div class="px-3 lg:w-2/3 md:w-1/2 md:p-4">
                    <h4 class="text-2xl font-medium">{{$property->title}}</h4>
                    <p>{{$property->location}}</p>

                    <ul class="flex items-center py-6 list-none">
                        <li class="flex items-center lg:me-6 me-4">
                            <i class="text-2xl text-green-600 uil uil-compress-arrows lg:text-3xl me-2"></i>
                            <span class="lg:text-xl">{{$property->type}}</span>
                        </li>

                        @if ($property->no_bedrooms)
                            <li class="flex items-center lg:me-6 me-4">
                                <i class="text-2xl text-green-600 uil uil-bed-double lg:text-3xl me-2"></i>
                                <span class="lg:text-xl">{{$property->no_bedrooms}} Beds</span>
                            </li>
                        @endif

                        @if ($property->no_floors)
                            <li class="flex items-center">
                                <i class="text-2xl text-green-600 uil uil-bath lg:text-3xl me-2"></i>
                                <span class="lg:text-xl">{{$property->no_floors}} Floors</span>
                            </li>
                        @endif
                    </ul>

                    <div class="text-slate-400">
                        {!! $property->description !!}
                    </div>

                    <div class="w-full leading-[0] border-0 mt-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin" style="border:0" class="w-full h-[500px]" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="px-3 mt-8 lg:w-1/3 md:w-1/2 md:p-4 md:mt-0">
                    <div class="sticky top-20">
                        <div class="rounded-md shadow bg-slate-50 dark:bg-slate-800 dark:shadow-gray-700">
                            <div class="p-6">
                                <h5 class="text-2xl font-medium">Price:</h5>

                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-xl font-medium"><x-naira /> {{number_format($property->price)}}</span>

                                    <span class="bg-green-600/10 text-green-600 text-sm px-2.5 py-0.75 rounded h-6">For Sale</span>
                                </div>

                                <ul class="mt-4 list-none">
                                    <li class="flex items-center justify-between">
                                        <span class="text-sm text-slate-400">Days on Hously</span>
                                        <span class="text-sm font-medium">124 Days</span>
                                    </li>

                                    <li class="flex items-center justify-between mt-2">
                                        <span class="text-sm text-slate-400">Price per sq ft</span>
                                        <span class="text-sm font-medium">$ 186</span>
                                    </li>

                                    <li class="flex items-center justify-between mt-2">
                                        <span class="text-sm text-slate-400">Monthly Payment (estimate)</span>
                                        <span class="text-sm font-medium">$ 1497/Monthly</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="flex">
                                <div class="w-1/2 p-1">
                                    <a href="#" class="w-full text-white bg-green-600 rounded-md btn hover:bg-green-700">Book Now</a>
                                </div>
                                <div class="w-1/2 p-1">
                                    <a href="#" class="w-full text-white bg-green-600 rounded-md btn hover:bg-green-700">Offer Now</a>
                                </div>
                            </div>
                        </div>

                        <div class="mt-12 text-center">
                            <h3 class="mb-6 text-xl font-medium leading-normal text-black dark:text-white">Have Question ? Get in touch!</h3>

                            <div class="mt-6">
                                <a href="contact.html" class="text-green-600 bg-transparent border border-green-600 rounded-md btn hover:bg-green-600 hover:text-white"><i class="align-middle uil uil-phone me-2"></i> Contact us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
