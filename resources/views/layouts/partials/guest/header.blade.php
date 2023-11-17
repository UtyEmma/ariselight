<nav id="topnav" class="defaultscroll is-sticky">
    <div class="container">
        <!-- Logo container-->
        <a class="logo" href="index.html">
            <img src="assets/images/logo-dark.png" class="inline-block dark:hidden" alt="">
            <img src="assets/images/logo-light.png" class="hidden dark:inline-block" alt="">
        </a>
        <!-- End Logo container-->

        <!-- Start Mobile Toggle -->
        <div class="menu-extras">
            <div class="menu-item">
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
            </div>
        </div>
        <!-- End Mobile Toggle -->

        <!--Login button Start-->
        {{-- <ul class="mb-0 list-none buy-button">
            <li class="inline mb-0">
                <a href="auth-login.html" class="text-white bg-green-600 border-green-600 rounded-full btn btn-icon hover:bg-green-700 dark:border-green-600"><i data-feather="user" class="h-4 w-4 stroke-[3]"></i></a>
            </li>
            <li class="hidden mb-0 sm:inline ps-1">
                <a href="auth-signup.html" class="text-white bg-green-600 border-green-600 rounded-full btn hover:bg-green-700 dark:border-green-600">Signup</a>
            </li>
        </ul> --}}
        <!--Login button End-->

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="justify-end navigation-menu">
                <li ><a href="javascript:void(0)" class="sub-menu-item">Home</a></li>
                <li><a href="sell.html" class="sub-menu-item">About Us</a></li>
                <li><a href="buy.html" class="sub-menu-item">Properties</a></li>
                <li><a href="contact.html" class="sub-menu-item">Contact</a></li>
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
</nav>
