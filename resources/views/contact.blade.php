<x-guest-layout>
    <section class="relative table w-full py-32 lg:py-36 bg-[url('../../assets/images/bg/01.html')] bg-no-repeat bg-center bg-cover">
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
                <div class="lg:col-span-7 md:col-span-6">
                    <img src="assets/images/svg/contact.svg" alt="">
                </div>

                <div class="lg:col-span-5 md:col-span-6">
                    <div class="lg:me-5">
                        <div class="p-6 bg-white rounded-md shadow dark:bg-slate-900 dark:shadow-gray-700">
                            <h3 class="mb-6 text-2xl font-medium leading-normal">Get in touch !</h3>

                            <form method="post" name="myForm" id="myForm" onsubmit="return validateForm()">
                                <p class="mb-0" id="error-msg"></p>
                                <div id="simple-msg"></div>
                                <div class="grid lg:grid-cols-12 lg:gap-6">
                                    <div class="mb-5 lg:col-span-6">
                                        <label for="name" class="font-medium">Your Name:</label>
                                        <input name="name" id="name" type="text" class="mt-2 form-input" placeholder="Name :">
                                    </div>

                                    <div class="mb-5 lg:col-span-6">
                                        <label for="email" class="font-medium">Your Email:</label>
                                        <input name="email" id="email" type="email" class="mt-2 form-input" placeholder="Email :">
                                    </div>
                                </div>

                                <div class="grid grid-cols-1">
                                    <div class="mb-5">
                                        <label for="subject" class="font-medium">Your Question:</label>
                                        <input name="subject" id="subject" class="mt-2 form-input" placeholder="Subject :">
                                    </div>

                                    <div class="mb-5">
                                        <label for="comments" class="font-medium">Your Comment:</label>
                                        <textarea name="comments" id="comments" class="mt-2 form-input textarea" placeholder="Message :"></textarea>
                                    </div>
                                </div>
                                <button type="submit" id="submit" name="send" class="text-white bg-green-600 rounded-md btn hover:bg-green-700">Send Message</button>
                            </form>
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
                        <p class="mt-3 text-slate-400">The phrasal sequence of the is now so that many campaign and benefit</p>

                        <div class="mt-5">
                            <a href="tel:+152534-468-854" class="text-green-600 transition duration-500 btn btn-link hover:text-green-600 after:bg-green-600">+152 534-468-854</a>
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
                        <p class="mt-3 text-slate-400">The phrasal sequence of the is now so that many campaign and benefit</p>

                        <div class="mt-5">
                            <a href="mailto:contact@example.com" class="text-green-600 transition duration-500 btn btn-link hover:text-green-600 after:bg-green-600">contact@example.com</a>
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
                        <p class="mt-3 text-slate-400">C/54 Northwest Freeway, Suite 558, <br> Houston, USA 485</p>

                        <div class="mt-5">
                            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin"
                            data-type="iframe" class="text-green-600 transition duration-500 video-play-icon read-more lightbox btn btn-link hover:text-green-600 after:bg-green-600">View on Google map</a>
                        </div>
                    </div>
                </div>
            </div><!--end grid-->
        </div><!--end container-->
    </section>
</x-guest-layout>
