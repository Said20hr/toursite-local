<header>
    <nav class="z-550 absolute top-0 h-20 w-full inset-x-0 border-gray-200 px-4 lg:px-6 py-3">
        <div class="z-100 flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="{{route('home-page')}}" class="flex items-center z-100">
                <img src="{{asset('images/logos/logo_03.png')}}" class="xl:mr-3 h-16 sm:h-20" alt="logo" />
            </a>
            <div class="flex items-center lg:order-2 z-100">
                <a href="{{route('login')}}" class="hidden xl:flex text-black bg-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Log in</a>
                <a href="{{route('booking')}}" class="hidden xl:flex text-white bg-secondary hover:bg-secondary focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">Book Now</a>
                <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            <div class="z-100 hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-16 lg:mt-0">
                    <li>
                        <a href="{{route('home-page')}}" class="{{Route::currentRouteName() == "home-page"  ? ' nav-link-active' : 'nav-link '}}">Home</a>
                    </li>
                    <li>
                        <a href="{{route('about')}}" class="{{Route::currentRouteName() == "about"  ? ' nav-link-active' : 'nav-link '}}">About Us</a>
                    </li>
                    <li>
                        <a href="{{route('services')}}" class="{{Route::currentRouteName() == "services"  ? ' nav-link-active' : 'nav-link '}}">Services</a>
                    </li>
                    <li>
                        <a href="{{route('booking')}}" class="{{Route::currentRouteName() == "booking"  ? ' nav-link-active' : 'nav-link'}}">Booking</a>
                    </li>
                    <li>
                        <a href="{{route('contact')}}" class="{{Route::currentRouteName() == "contact"  ? ' nav-link-active' : 'nav-link '}}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
