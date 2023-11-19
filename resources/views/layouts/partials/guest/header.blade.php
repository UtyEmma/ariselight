<nav id="topnav" class="bg-white dark:bg-gray-800 defaultscroll is-sticky bg-opacity-80">
    <div class="container">
        <!-- Logo container-->
        <a class="logo" href="{{route('home')}}">
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

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="justify-end navigation-menu">
                <li ><a href="{{route('home')}}" class="sub-menu-item">Home</a></li>
                <li><a href="{{route('about')}}" class="sub-menu-item">About Us</a></li>
                <li><a href="{{route('properties')}}" class="sub-menu-item">Properties</a></li>
                <li><a href="{{route('contact')}}" class="sub-menu-item">Contact</a></li>
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
</nav>
