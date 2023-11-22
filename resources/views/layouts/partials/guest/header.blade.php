<nav id="topnav" class="bg-white dark:bg-slate-900 defaultscroll is-sticky">
    <div class="container">
        <!-- Logo container-->
        <a class="logo" href="{{route('home')}}">
            <img src="assets/images/logo.png" class="inline-block max-w-[100px]" alt="{{env('APP_NAME')}}">
        </a>

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
            <ul class="justify-end navigation-menu">
                <li ><a href="{{route('home')}}" class="sub-menu-item {{request()->routeIs('home') ? 'text-green-600' : ''}}">Home</a></li>
                <li><a href="{{route('about')}}" class="sub-menu-item {{request()->routeIs('about') ? 'text-green-600' : ''}}">About Us</a></li>
                <li><a href="{{route('properties')}}" class="sub-menu-item {{request()->routeIs('properties*') ? 'text-green-600' : ''}}">Properties</a></li>
                <li><a href="{{route('contact')}}" class="sub-menu-item {{request()->routeIs('contact') ? 'text-green-600' : ''}}">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
