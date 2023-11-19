<x-guest-layout nav>
    <section class="relative table w-full py-32 bg-center bg-no-repeat bg-cover lg:py-36" style="background-image: url('{{asset('assets/images/bg/02.jpg')}}')">
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
    <div class="container relative -mt-16 z-1">
        <div class="grid grid-cols-1">
            <form class="p-6 bg-white shadow-md dark:bg-slate-900 rounded-xl dark:shadow-gray-700">
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
            </form><!--end form-->
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
