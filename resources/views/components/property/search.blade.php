<div class="relative -mt-32">
    <div class="grid grid-cols-1">
        <form action="{{route('properties')}}">
            <ul class="flex-wrap justify-center inline-block w-full p-4 text-center bg-white border-b sm:w-fit dark:bg-slate-900 rounded-t-xl dark:border-gray-800" id="myTab" role="tablist" x-data="{
                checked: 'sale'
            }">
                <li role="presentation" class="inline-block">
                    <label  class="w-full px-6 py-2 text-base font-medium transition-all duration-500 ease-in-out rounded-md cursor-pointer" :class="checked == 'sale' ? 'bg-green-600 text-white' : ''" id="buy-home-tab" data-tabs-target="#buy-home" type="button" role="tab" >
                        <input type="radio" x-on:change="checked = $event.target.value" value="sale" name="type" class="hidden" hidden>
                        Buy
                    </label>
                </li>

                <li role="presentation" class="inline-block">
                    <label class="w-full px-6 py-2 text-base font-medium transition-all duration-500 ease-in-out rounded-md cursor-pointer" :class="checked == 'rent' ? 'bg-green-600 text-white' : ''"  id="rent-home-tab" data-tabs-target="#rent-home" type="button" role="tab" aria-controls="rent-home" aria-selected="false">
                        <input type="radio" x-on:change="checked = $event.target.value" value="rent" name="type" class="hidden" hidden>
                        Rent
                    </label>
                </li>
            </ul>

            <div id="StarterContent" class="p-6 bg-white shadow-md dark:bg-slate-900 rounded-ss-none rounded-se-none md:rounded-se-xl rounded-xl dark:shadow-gray-700">
                <div class=""  aria-labelledby="buy-home-tab">
                    <div class="registration-form text-dark text-start">
                        <div class="grid grid-cols-1 gap-6 lg:grid-cols-4 md:grid-cols-2 lg:gap-0">
                            <div>
                                <label class="font-medium form-label text-slate-900 dark:text-white">Search : <span class="text-red-600">*</span></label>
                                <div class="relative mt-2 filter-search-form filter-border">
                                    <i class="uil uil-search icons"></i>
                                    <input name="search" type="text" id="job-keyword" class="border-0 ps-10 form-input filter-input-box bg-gray-50 dark:bg-slate-800" placeholder="Search your keywords">
                                </div>
                            </div>


                            <div>
                                <label for="buy-properties" class="font-medium form-label text-slate-900 dark:text-white">Location:</label>
                                <div class="relative mt-2 filter-search-form filter-border">
                                    <i class="uil uil-estate icons"></i>
                                    <input name="location" type="text" id="job-keyword" class="border-0 ps-10 form-input filter-input-box bg-gray-50 dark:bg-slate-800" placeholder="Location" />
                                </div>
                            </div>

                            <div>
                                <label for="buy-min-price" class="font-medium form-label text-slate-900 dark:text-white">Min Price :</label>
                                <div class="relative mt-2 filter-search-form filter-border">
                                    <i class="uil uil-usd-circle icons"></i>
                                    <input name="min" type="text" class="border-0 ps-10 form-input filter-input-box bg-gray-50 dark:bg-slate-800" placeholder="Min Price" />
                                </div>
                            </div>

                            <div>
                                <label for="buy-max-price" class="font-medium form-label text-slate-900 dark:text-white">Max Price :</label>
                                <div class="relative mt-2 filter-search-form">
                                    <i class="uil uil-usd-circle icons"></i>
                                    <input name="max" type="text" class="border-0 ps-10 form-input filter-input-box bg-gray-50 dark:bg-slate-800" placeholder="Max Price" />
                                </div>
                            </div>

                            <div class="lg:mt-6">
                                <button type="submit" class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white searchbtn submit-btn w-full !h-12 rounded">Search</button>
                            </div>
                        </div><!--end grid-->
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
