<x-guest-layout>
    <section class="relative mt-20">
        <div class="mx-2 container-fluid md:mx-4">
            <div class="relative table w-full pt-40 overflow-hidden bg-center bg-cover shadow-md pb-52 rounded-2xl" style="background-image: url({{asset('assets/images/bg/02.jpg')}});">
                <div class="absolute inset-0 bg-black/60"></div>

                <div class="container">
                    <div class="grid grid-cols-1">
                        <div class="text-center ltr:md:text-left rtl:md:text-right">
                            <h1 class="mb-6 text-4xl font-bold leading-normal text-white lg:leading-normal lg:text-5xl">We will help you find <br> your <span class="text-green-600">Wonderful</span> home</h1>
                            <p class="max-w-xl text-xl text-white/70">A great plateform to buy, sell and rent your properties without any agent or commisions.</p>
                        </div>
                    </div><!--end grid-->
                </div><!--end container-->
            </div>
        </div><!--end Container-->
    </section><!--end section-->
    <!-- Hero End -->

    <!-- Start -->
    <section class="relative pb-16 md:pb-24">
        <div class="container">
            <div class="grid justify-center grid-cols-1">
                <div class="relative -mt-32">
                    <div class="grid grid-cols-1">
                        <ul class="flex-wrap justify-center inline-block w-full p-4 text-center bg-white border-b sm:w-fit dark:bg-slate-900 rounded-t-xl dark:border-gray-800" id="myTab" data-tabs-toggle="#StarterContent" role="tablist">
                            <li role="presentation" class="inline-block">
                                <button class="w-full px-6 py-2 text-base font-medium transition-all duration-500 ease-in-out rounded-md hover:text-green-600" id="buy-home-tab" data-tabs-target="#buy-home" type="button" role="tab" aria-controls="buy-home" aria-selected="true">Buy</button>
                            </li>
                            <li role="presentation" class="inline-block">
                                <button class="w-full px-6 py-2 text-base font-medium transition-all duration-500 ease-in-out rounded-md" id="sell-home-tab" data-tabs-target="#sell-home" type="button" role="tab" aria-controls="sell-home" aria-selected="false">Sell</button>
                            </li>
                            <li role="presentation" class="inline-block">
                                <button class="w-full px-6 py-2 text-base font-medium transition-all duration-500 ease-in-out rounded-md" id="rent-home-tab" data-tabs-target="#rent-home" type="button" role="tab" aria-controls="rent-home" aria-selected="false">Rent</button>
                            </li>
                        </ul>

                        <div id="StarterContent" class="p-6 bg-white shadow-md dark:bg-slate-900 rounded-ss-none rounded-se-none md:rounded-se-xl rounded-xl dark:shadow-gray-700">
                            <div class="" id="buy-home" role="tabpanel" aria-labelledby="buy-home-tab">
                                <form action="#">
                                    <div class="registration-form text-dark text-start">
                                        <div class="grid grid-cols-1 gap-6 lg:grid-cols-4 md:grid-cols-2 lg:gap-0">
                                            <div>
                                                <label class="font-medium form-label text-slate-900 dark:text-white">Search : <span class="text-red-600">*</span></label>
                                                <div class="relative mt-2 filter-search-form filter-border">
                                                    <i class="uil uil-search icons"></i>
                                                    <input name="name" type="text" id="job-keyword" class="border-0 form-input filter-input-box bg-gray-50 dark:bg-slate-800" placeholder="Search your keaywords">
                                                </div>
                                            </div>


                                            <div>
                                                <label for="buy-properties" class="font-medium form-label text-slate-900 dark:text-white">Select Categories:</label>
                                                <div class="relative mt-2 filter-search-form filter-border">
                                                    <i class="uil uil-estate icons"></i>
                                                    <select class="form-select z-2" data-trigger name="choices-catagory" id="choices-catagory-buy" aria-label="Default select example">
                                                        <option>Houses</option>
                                                        <option>Apartment</option>
                                                        <option>Offices</option>
                                                        <option>Townhome</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div>
                                                <label for="buy-min-price" class="font-medium form-label text-slate-900 dark:text-white">Min Price :</label>
                                                <div class="relative mt-2 filter-search-form filter-border">
                                                    <i class="uil uil-usd-circle icons"></i>
                                                    <select class="form-select" data-trigger name="choices-min-price" id="choices-min-price-buy" aria-label="Default select example">
                                                        <option>Min Price</option>
                                                        <option>500</option>
                                                        <option>1000</option>
                                                        <option>2000</option>
                                                        <option>3000</option>
                                                        <option>4000</option>
                                                        <option>5000</option>
                                                        <option>6000</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div>
                                                <label for="buy-max-price" class="font-medium form-label text-slate-900 dark:text-white">Max Price :</label>
                                                <div class="relative mt-2 filter-search-form">
                                                    <i class="uil uil-usd-circle icons"></i>
                                                    <select class="form-select" data-trigger name="choices-max-price" id="choices-max-price-buy" aria-label="Default select example">
                                                        <option>Max Price</option>
                                                        <option>500</option>
                                                        <option>1000</option>
                                                        <option>2000</option>
                                                        <option>3000</option>
                                                        <option>4000</option>
                                                        <option>5000</option>
                                                        <option>6000</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="lg:mt-6">
                                                <input type="submit" id="search-buy" name="search" class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white searchbtn submit-btn w-full !h-12 rounded" value="Search">
                                            </div>
                                        </div><!--end grid-->
                                    </div><!--end container-->
                                </form>
                            </div>

                            <div class="hidden" id="sell-home" role="tabpanel" aria-labelledby="sell-home-tab">
                                <form action="#">
                                    <div class="registration-form text-dark ltr:text-start rtl:text-end">
                                        <div class="grid grid-cols-1 gap-6 lg:grid-cols-4 md:grid-cols-2 lg:gap-0">
                                            <div>
                                                <label class="font-medium form-label text-slate-900 dark:text-white">Search : <span class="text-red-600">*</span></label>
                                                <div class="relative mt-2 filter-search-form filter-border">
                                                    <i class="uil uil-search icons"></i>
                                                    <input name="name" type="text" id="job-keyword" class="border-0 form-input filter-input-box bg-gray-50 dark:bg-slate-800" placeholder="Search your keaywords">
                                                </div>
                                            </div>

                                            <div>
                                                <label for="buy-properties" class="font-medium form-label text-slate-900 dark:text-white">Select Categories:</label>
                                                <div class="relative mt-2 filter-search-form filter-border">
                                                    <i class="uil uil-estate icons"></i>
                                                    <select class="form-select z-2" data-trigger name="choices-catagory" id="choices-catagory-sell" aria-label="Default select example">
                                                        <option>Houses</option>
                                                        <option>Apartment</option>
                                                        <option>Offices</option>
                                                        <option>Townhome</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div>
                                                <label for="buy-min-price" class="font-medium form-label text-slate-900 dark:text-white">Min Price :</label>
                                                <div class="relative mt-2 filter-search-form filter-border">
                                                    <i class="uil uil-usd-circle icons"></i>
                                                    <select class="form-select" data-trigger name="choices-min-price" id="choices-min-price-sell" aria-label="Default select example">
                                                        <option>Min Price</option>
                                                        <option>500</option>
                                                        <option>1000</option>
                                                        <option>2000</option>
                                                        <option>3000</option>
                                                        <option>4000</option>
                                                        <option>5000</option>
                                                        <option>6000</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div>
                                                <label for="buy-max-price" class="font-medium form-label text-slate-900 dark:text-white">Max Price :</label>
                                                <div class="relative mt-2 filter-search-form">
                                                    <i class="uil uil-usd-circle icons"></i>
                                                    <select class="form-select" data-trigger name="choices-max-price" id="choices-max-price-sell" aria-label="Default select example">
                                                        <option>Max Price</option>
                                                        <option>500</option>
                                                        <option>1000</option>
                                                        <option>2000</option>
                                                        <option>3000</option>
                                                        <option>4000</option>
                                                        <option>5000</option>
                                                        <option>6000</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="lg:mt-6">
                                                <input type="submit" id="search-sell" name="search" class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white searchbtn submit-btn w-full !h-12 rounded" value="Search">
                                            </div>
                                        </div><!--end grid-->
                                    </div><!--end container-->
                                </form>
                            </div>

                            <div class="hidden" id="rent-home" role="tabpanel" aria-labelledby="rent-home-tab">
                                <form action="#">
                                    <div class="registration-form text-dark ltr:text-start rtl:text-end">
                                        <div class="grid grid-cols-1 gap-6 lg:grid-cols-4 md:grid-cols-2 lg:gap-0">
                                            <div>
                                                <label class="font-medium form-label text-slate-900 dark:text-white">Search : <span class="text-red-600">*</span></label>
                                                <div class="relative mt-2 filter-search-form filter-border">
                                                    <i class="uil uil-search icons"></i>
                                                    <input name="name" type="text" id="job-keyword" class="border-0 form-input filter-input-box bg-gray-50 dark:bg-slate-800" placeholder="Search your keaywords">
                                                </div>
                                            </div>

                                            <div>
                                                <label for="buy-properties" class="font-medium form-label text-slate-900 dark:text-white">Select Categories:</label>
                                                <div class="relative mt-2 filter-search-form filter-border">
                                                    <i class="uil uil-estate icons"></i>
                                                    <select class="form-select z-2" data-trigger name="choices-catagory" id="choices-catagory-rent" aria-label="Default select example">
                                                        <option>Houses</option>
                                                        <option>Apartment</option>
                                                        <option>Offices</option>
                                                        <option>Townhome</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div>
                                                <label for="buy-min-price" class="font-medium form-label text-slate-900 dark:text-white">Min Price :</label>
                                                <div class="relative mt-2 filter-search-form filter-border">
                                                    <i class="uil uil-usd-circle icons"></i>
                                                    <select class="form-select" data-trigger name="choices-min-price" id="choices-min-price-rent" aria-label="Default select example">
                                                        <option>Min Price</option>
                                                        <option>500</option>
                                                        <option>1000</option>
                                                        <option>2000</option>
                                                        <option>3000</option>
                                                        <option>4000</option>
                                                        <option>5000</option>
                                                        <option>6000</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div>
                                                <label for="buy-max-price" class="font-medium form-label text-slate-900 dark:text-white">Max Price :</label>
                                                <div class="relative mt-2 filter-search-form">
                                                    <i class="uil uil-usd-circle icons"></i>
                                                    <select class="form-select" data-trigger name="choices-max-price" id="choices-max-price-rent" aria-label="Default select example">
                                                        <option>Max Price</option>
                                                        <option>500</option>
                                                        <option>1000</option>
                                                        <option>2000</option>
                                                        <option>3000</option>
                                                        <option>4000</option>
                                                        <option>5000</option>
                                                        <option>6000</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="lg:mt-6">
                                                <input type="submit" id="search-rent" name="search" class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white searchbtn submit-btn w-full !h-12 rounded" value="Search">
                                            </div>
                                        </div><!--end grid-->
                                    </div><!--end container-->
                                </form>
                            </div>
                        </div>
                    </div><!--end grid-->
                </div>
            </div><!--end grid-->
        </div><!--end container-->

        <div class="container mt-16 lg:mt-24">
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
                            <a href="#" class="mt-3 text-white bg-green-600 rounded-md btn hover:bg-green-700">Learn More </a>
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

        <div class="container mt-16 lg:mt-24">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 text-2xl font-semibold leading-normal md:text-3xl md:leading-normal">Featured Properties</h3>

                <p class="max-w-xl mx-auto text-slate-400">A great plateform to buy, sell and rent your properties without any agent or commisions.</p>
            </div><!--end grid-->

            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
                <div class="overflow-hidden duration-500 ease-in-out bg-white shadow group rounded-xl dark:bg-slate-900 hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700">
                    <div class="relative">
                        <img src="assets/images/property/1.jpg" alt="">

                        <div class="absolute top-4 end-4">
                            <a href="javascript:void(0)" class="bg-white rounded-full shadow btn btn-icon dark:bg-slate-900 dark:shadow-gray-700 text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i class="mdi mdi-heart mdi-18px"></i></a>
                        </div>
                    </div>

                    <div class="p-6">
                        <div class="pb-6">
                            <a href="property-detail.html" class="text-lg font-medium duration-500 ease-in-out hover:text-green-600">10765 Hillshire Ave, Baton Rouge, LA 70810, USA</a>
                        </div>

                        <ul class="flex items-center py-6 list-none border-y border-slate-100 dark:border-gray-800">
                            <li class="flex items-center me-4">
                                <i class="text-2xl text-green-600 uil uil-compress-arrows me-2"></i>
                                <span>8000sqf</span>
                            </li>

                            <li class="flex items-center me-4">
                                <i class="text-2xl text-green-600 uil uil-bed-double me-2"></i>
                                <span>4 Beds</span>
                            </li>

                            <li class="flex items-center">
                                <i class="text-2xl text-green-600 uil uil-bath me-2"></i>
                                <span>4 Baths</span>
                            </li>
                        </ul>

                        <ul class="flex items-center justify-between pt-6 list-none">
                            <li>
                                <span class="text-slate-400">Price</span>
                                <p class="text-lg font-medium">$5000</p>
                            </li>

                            <li>
                                <span class="text-slate-400">Rating</span>
                                <ul class="text-lg font-medium list-none text-amber-400">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline text-black dark:text-white">5.0(30)</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div><!--end property content-->

                <div class="overflow-hidden duration-500 ease-in-out bg-white shadow group rounded-xl dark:bg-slate-900 hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700">
                    <div class="relative">
                        <img src="assets/images/property/2.jpg" alt="">

                        <div class="absolute top-4 end-4">
                            <a href="javascript:void(0)" class="bg-white rounded-full shadow btn btn-icon dark:bg-slate-900 dark:shadow-gray-700 text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i class="mdi mdi-heart mdi-18px"></i></a>
                        </div>
                    </div>

                    <div class="p-6">
                        <div class="pb-6">
                            <a href="property-detail.html" class="text-lg font-medium duration-500 ease-in-out hover:text-green-600">59345 STONEWALL DR, Plaquemine, LA 70764, USA</a>
                        </div>

                        <ul class="flex items-center py-6 list-none border-y border-slate-100 dark:border-gray-800">
                            <li class="flex items-center me-4">
                                <i class="text-2xl text-green-600 uil uil-compress-arrows me-2"></i>
                                <span>8000sqf</span>
                            </li>

                            <li class="flex items-center me-4">
                                <i class="text-2xl text-green-600 uil uil-bed-double me-2"></i>
                                <span>4 Beds</span>
                            </li>

                            <li class="flex items-center">
                                <i class="text-2xl text-green-600 uil uil-bath me-2"></i>
                                <span>4 Baths</span>
                            </li>
                        </ul>

                        <ul class="flex items-center justify-between pt-6 list-none">
                            <li>
                                <span class="text-slate-400">Price</span>
                                <p class="text-lg font-medium">$5000</p>
                            </li>

                            <li>
                                <span class="text-slate-400">Rating</span>
                                <ul class="text-lg font-medium list-none text-amber-400">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline text-black dark:text-white">5.0(30)</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div><!--end property content-->

                <div class="overflow-hidden duration-500 ease-in-out bg-white shadow group rounded-xl dark:bg-slate-900 hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700">
                    <div class="relative">
                        <img src="assets/images/property/3.jpg" alt="">

                        <div class="absolute top-4 end-4">
                            <a href="javascript:void(0)" class="bg-white rounded-full shadow btn btn-icon dark:bg-slate-900 dark:shadow-gray-700 text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i class="mdi mdi-heart mdi-18px"></i></a>
                        </div>
                    </div>

                    <div class="p-6">
                        <div class="pb-6">
                            <a href="property-detail.html" class="text-lg font-medium duration-500 ease-in-out hover:text-green-600">3723 SANDBAR DR, Addis, LA 70710, USA</a>
                        </div>

                        <ul class="flex items-center py-6 list-none border-y border-slate-100 dark:border-gray-800">
                            <li class="flex items-center me-4">
                                <i class="text-2xl text-green-600 uil uil-compress-arrows me-2"></i>
                                <span>8000sqf</span>
                            </li>

                            <li class="flex items-center me-4">
                                <i class="text-2xl text-green-600 uil uil-bed-double me-2"></i>
                                <span>4 Beds</span>
                            </li>

                            <li class="flex items-center">
                                <i class="text-2xl text-green-600 uil uil-bath me-2"></i>
                                <span>4 Baths</span>
                            </li>
                        </ul>

                        <ul class="flex items-center justify-between pt-6 list-none">
                            <li>
                                <span class="text-slate-400">Price</span>
                                <p class="text-lg font-medium">$5000</p>
                            </li>

                            <li>
                                <span class="text-slate-400">Rating</span>
                                <ul class="text-lg font-medium list-none text-amber-400">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline text-black dark:text-white">5.0(30)</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div><!--end property content-->

                <div class="overflow-hidden duration-500 ease-in-out bg-white shadow group rounded-xl dark:bg-slate-900 hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700">
                    <div class="relative">
                        <img src="assets/images/property/4.jpg" alt="">

                        <div class="absolute top-4 end-4">
                            <a href="javascript:void(0)" class="bg-white rounded-full shadow btn btn-icon dark:bg-slate-900 dark:shadow-gray-700 text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i class="mdi mdi-heart mdi-18px"></i></a>
                        </div>
                    </div>

                    <div class="p-6">
                        <div class="pb-6">
                            <a href="property-detail.html" class="text-lg font-medium duration-500 ease-in-out hover:text-green-600">Lot 21 ROYAL OAK DR, Prairieville, LA 70769, USA</a>
                        </div>

                        <ul class="flex items-center py-6 list-none border-y border-slate-100 dark:border-gray-800">
                            <li class="flex items-center me-4">
                                <i class="text-2xl text-green-600 uil uil-compress-arrows me-2"></i>
                                <span>8000sqf</span>
                            </li>

                            <li class="flex items-center me-4">
                                <i class="text-2xl text-green-600 uil uil-bed-double me-2"></i>
                                <span>4 Beds</span>
                            </li>

                            <li class="flex items-center">
                                <i class="text-2xl text-green-600 uil uil-bath me-2"></i>
                                <span>4 Baths</span>
                            </li>
                        </ul>

                        <ul class="flex items-center justify-between pt-6 list-none">
                            <li>
                                <span class="text-slate-400">Price</span>
                                <p class="text-lg font-medium">$5000</p>
                            </li>

                            <li>
                                <span class="text-slate-400">Rating</span>
                                <ul class="text-lg font-medium list-none text-amber-400">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline text-black dark:text-white">5.0(30)</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div><!--end property content-->

                <div class="overflow-hidden duration-500 ease-in-out bg-white shadow group rounded-xl dark:bg-slate-900 hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700">
                    <div class="relative">
                        <img src="assets/images/property/5.jpg" alt="">

                        <div class="absolute top-4 end-4">
                            <a href="javascript:void(0)" class="bg-white rounded-full shadow btn btn-icon dark:bg-slate-900 dark:shadow-gray-700 text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i class="mdi mdi-heart mdi-18px"></i></a>
                        </div>
                    </div>

                    <div class="p-6">
                        <div class="pb-6">
                            <a href="property-detail.html" class="text-lg font-medium duration-500 ease-in-out hover:text-green-600">710 BOYD DR, Unit #1102, Baton Rouge, LA 70808, USA</a>
                        </div>

                        <ul class="flex items-center py-6 list-none border-y border-slate-100 dark:border-gray-800">
                            <li class="flex items-center me-4">
                                <i class="text-2xl text-green-600 uil uil-compress-arrows me-2"></i>
                                <span>8000sqf</span>
                            </li>

                            <li class="flex items-center me-4">
                                <i class="text-2xl text-green-600 uil uil-bed-double me-2"></i>
                                <span>4 Beds</span>
                            </li>

                            <li class="flex items-center">
                                <i class="text-2xl text-green-600 uil uil-bath me-2"></i>
                                <span>4 Baths</span>
                            </li>
                        </ul>

                        <ul class="flex items-center justify-between pt-6 list-none">
                            <li>
                                <span class="text-slate-400">Price</span>
                                <p class="text-lg font-medium">$5000</p>
                            </li>

                            <li>
                                <span class="text-slate-400">Rating</span>
                                <ul class="text-lg font-medium list-none text-amber-400">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline text-black dark:text-white">5.0(30)</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div><!--end property content-->

                <div class="overflow-hidden duration-500 ease-in-out bg-white shadow group rounded-xl dark:bg-slate-900 hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700">
                    <div class="relative">
                        <img src="assets/images/property/6.jpg" alt="">

                        <div class="absolute top-4 end-4">
                            <a href="javascript:void(0)" class="bg-white rounded-full shadow btn btn-icon dark:bg-slate-900 dark:shadow-gray-700 text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i class="mdi mdi-heart mdi-18px"></i></a>
                        </div>
                    </div>

                    <div class="p-6">
                        <div class="pb-6">
                            <a href="property-detail.html" class="text-lg font-medium duration-500 ease-in-out hover:text-green-600">5133 MCLAIN WAY, Baton Rouge, LA 70809, USA</a>
                        </div>

                        <ul class="flex items-center py-6 list-none border-y border-slate-100 dark:border-gray-800">
                            <li class="flex items-center me-4">
                                <i class="text-2xl text-green-600 uil uil-compress-arrows me-2"></i>
                                <span>8000sqf</span>
                            </li>

                            <li class="flex items-center me-4">
                                <i class="text-2xl text-green-600 uil uil-bed-double me-2"></i>
                                <span>4 Beds</span>
                            </li>

                            <li class="flex items-center">
                                <i class="text-2xl text-green-600 uil uil-bath me-2"></i>
                                <span>4 Baths</span>
                            </li>
                        </ul>

                        <ul class="flex items-center justify-between pt-6 list-none">
                            <li>
                                <span class="text-slate-400">Price</span>
                                <p class="text-lg font-medium">$5000</p>
                            </li>

                            <li>
                                <span class="text-slate-400">Rating</span>
                                <ul class="text-lg font-medium list-none text-amber-400">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline text-black dark:text-white">5.0(30)</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div><!--end property content-->
            </div><!--en grid-->
        </div><!--end container-->

        <div class="container mt-16 lg:mt-24">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 text-2xl font-semibold leading-normal md:text-3xl md:leading-normal">What Our Client Say ?</h3>

                <p class="max-w-xl mx-auto text-slate-400">A great plateform to buy, sell and rent your properties without any agent or commisions.</p>
            </div><!--end grid-->

            <div class="relative flex justify-center mt-16">
                <div class="relative w-full lg:w-1/3 md:w-1/2">
                    <div class="absolute -top-20 md:-start-24 -start-0">
                        <i class="mdi mdi-format-quote-open text-9xl opacity-5"></i>
                    </div>

                    <div class="absolute bottom-28 md:-end-24 -end-0">
                        <i class="mdi mdi-format-quote-close text-9xl opacity-5"></i>
                    </div>

                    <div class="tiny-single-item">
                        <div class="tiny-slide">
                            <div class="text-center">
                                <p class="text-xl italic text-slate-400"> " Hously made the processes so easy. Hously instantly increased the amount of interest and ultimately saved us over $10,000. " </p>

                                <div class="mt-5 text-center">
                                    <ul class="mb-2 text-xl font-medium list-none text-amber-400">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                    </ul>

                                    <img src="assets/images/client/01.jpg" class="mx-auto rounded-full shadow-md h-14 w-14 dark:shadow-gray-700" alt="">
                                    <h6 class="mt-2 fw-semibold">Christa Smith</h6>
                                    <span class="text-sm text-slate-400">Manager</span>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="text-center">
                                <p class="text-xl italic text-slate-400"> " I highly recommend Hously as the new way to sell your home "by owner". My home sold in 24 hours for the asking price. Best $400 you could spend to sell your home. " </p>

                                <div class="mt-5 text-center">
                                    <ul class="mb-2 text-xl font-medium list-none text-amber-400">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                    </ul>

                                    <img src="assets/images/client/02.jpg" class="mx-auto rounded-full shadow-md h-14 w-14 dark:shadow-gray-700" alt="">
                                    <h6 class="mt-2 fw-semibold">Christa Smith</h6>
                                    <span class="text-sm text-slate-400">Manager</span>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="text-center">
                                <p class="text-xl italic text-slate-400"> " My favorite part about selling my home myself was that we got to meet and get to know the people personally. This made it so much more enjoyable! " </p>

                                <div class="mt-5 text-center">
                                    <ul class="mb-2 text-xl font-medium list-none text-amber-400">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                    </ul>

                                    <img src="assets/images/client/03.jpg" class="mx-auto rounded-full shadow-md h-14 w-14 dark:shadow-gray-700" alt="">
                                    <h6 class="mt-2 fw-semibold">Christa Smith</h6>
                                    <span class="text-sm text-slate-400">Manager</span>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="text-center">
                                <p class="text-xl italic text-slate-400"> " Great experience all around! Easy to use and efficient. " </p>

                                <div class="mt-5 text-center">
                                    <ul class="mb-2 text-xl font-medium list-none text-amber-400">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                    </ul>

                                    <img src="assets/images/client/04.jpg" class="mx-auto rounded-full shadow-md h-14 w-14 dark:shadow-gray-700" alt="">
                                    <h6 class="mt-2 fw-semibold">Christa Smith</h6>
                                    <span class="text-sm text-slate-400">Manager</span>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="text-center">
                                <p class="text-xl italic text-slate-400"> " Hously made selling my home easy and stress free. They went above and beyond what is expected. " </p>

                                <div class="mt-5 text-center">
                                    <ul class="mb-2 text-xl font-medium list-none text-amber-400">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                    </ul>

                                    <img src="assets/images/client/05.jpg" class="mx-auto rounded-full shadow-md h-14 w-14 dark:shadow-gray-700" alt="">
                                    <h6 class="mt-2 fw-semibold">Christa Smith</h6>
                                    <span class="text-sm text-slate-400">Manager</span>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="text-center">
                                <p class="text-xl italic text-slate-400"> " Hously is fair priced, quick to respond, and easy to use. I highly recommend their services! " </p>

                                <div class="mt-5 text-center">
                                    <ul class="mb-2 text-xl font-medium list-none text-amber-400">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                    </ul>

                                    <img src="assets/images/client/06.jpg" class="mx-auto rounded-full shadow-md h-14 w-14 dark:shadow-gray-700" alt="">
                                    <h6 class="mt-2 fw-semibold">Christa Smith</h6>
                                    <span class="text-sm text-slate-400">Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end grid-->
        </div><!--end container-->

        <div class="container mt-16 lg:mt-24">
            <div class="grid grid-cols-1 text-center">
                <h3 class="mb-6 text-2xl font-medium leading-normal text-black md:text-3xl md:leading-normal dark:text-white">Have Question ? Get in touch!</h3>

                <p class="max-w-xl mx-auto text-slate-400">A great plateform to buy, sell and rent your properties without any agent or commisions.</p>

                <div class="mt-6">
                    <a href="contact.html" class="text-white bg-green-600 rounded-md btn hover:bg-green-700"><i class="align-middle uil uil-phone me-2"></i> Contact us</a>
                </div>
            </div><!--end grid-->
        </div><!--end container-->
    </section>
</x-guest-layout>
