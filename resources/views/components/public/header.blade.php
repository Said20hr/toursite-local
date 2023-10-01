<header class="relative">
    <nav class="z-550 absolute top-0 h-20 w-full inset-x-0 border-gray-200 px-0 lg:px-6 py-3" x-data="{open : false}">
        <div class="z-100 flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="{{route('home-page')}}" class="flex items-center z-100 ml-2">
                <img src="{{asset('images/logos/logo_03.png')}}" class="xl:mr-3 h-16 sm:h-20" alt="logo" />
            </a>
            <div class="flex items-center lg:order-2 z-100">
                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="route('logout')"  class="hidden xl:flex text-black bg-white hover:bg-gray-50 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 "
                           onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            <i class="fa-regular fa-circle-user mr-2"></i>
                            {{ __('Log out') }}
                        </a>
                    </form>                @endauth
                    @guest
                        <a href="{{route('voyager.login')}}" class="hidden xl:flex text-black bg-white hover:bg-gray-50 font-medium rounded-lg text-sm px-4 lg:px-4 py-2 lg:py-2.5 mr-2 ">{{__('Log in')}}</a>
                    @endguest

                <a href="{{route('booking')}}" class="hidden xl:flex text-white bg-secondary hover:bg-secondary   font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2">{{__('Book Now')}}</a>

                <button x-on:click="open =! open" type="button" class="mr-3 border-2 border-gray-400 inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            <div class="z-100 hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row gap-x-12 lg:mt-0">
                    <li>
                        <a href="{{route('home-page')}}" class="{{Route::currentRouteName() == "home-page"  ? ' nav-link-active' : 'nav-link '}}">{{__('Home')}}</a>
                    </li>
                    <li>
                        <a href="{{route('about')}}" class="{{Route::currentRouteName() == "about"  ? ' nav-link-active' : 'nav-link '}}">{{__('About Us')}}</a>
                    </li>
                    <li>
                        <a href="{{route('services')}}" class="{{Route::currentRouteName() == "services"  ? ' nav-link-active' : 'nav-link '}}">{{__('Services')}}</a>
                    </li>
                    <li>
                        <a href="{{route('booking')}}" class="{{Route::currentRouteName() == "booking"  ? ' nav-link-active' : 'nav-link'}}">{{__('Booking')}}</a>
                    </li>
                    <li>
                        <a href="{{route('contact')}}" class="{{Route::currentRouteName() == "contact"  ? ' nav-link-active' : 'nav-link '}}">{{__('Contact')}}</a>
                    </li>
                    <li>

                        <div class="uk-inline">
                            <button class="px-6 py-2 bg-white rounded-xl text-center flex justify-center gap-x-3 items-center" type="button">
                                <x-languages-switch :locale="app()->getLocale()"/>
                            </button>
                            <div uk-dropdown="animation: slide-top; animate-out: true; duration:300" class="p-0 w-full">
                                <ul class="p-1 border">
                                    <li class="p-2 border hover:bg-gray-100  mb-3">
                                        <a href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), ['locale' => 'en']) }}" class="flex justify-start items-center gap-x-3">
                                            <img
                                                src="https://flagcdn.com/16x12/gb.png"
                                                srcset="https://flagcdn.com/32x24/gb.png 2x,https://flagcdn.com/48x36/gb.png 3x"
                                                 width="20"
                                                height="18"
                                                alt="UK">
                                            <span>English</span>
                                        </a></li>
                                    <li class="p-2 border hover:bg-gray-100  mb-3">
                                        <a href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), ['locale' => 'fr']) }}" class="flex justify-start items-center gap-x-3">
                                            <img
                                                src="https://flagcdn.com/16x12/fr.png"
                                                srcset="https://flagcdn.com/32x24/fr.png 2x,https://flagcdn.com/48x36/fr.png 3x"
                                                 width="20"
                                                height="18"
                                                alt="France">
                                            <span>Français</span>
                                        </a>
                                    </li>
                                    <li class="p-2 border hover:bg-gray-100  mb-3">
                                        <a href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), ['locale' => 'ru']) }}" class="flex justify-start items-center gap-x-3">
                                            <img
                                                src="https://flagcdn.com/16x12/ru.png"
                                                srcset="https://flagcdn.com/32x24/ru.png 2x,https://flagcdn.com/48x36/ru.png 3x"
                                                 width="20"
                                                height="18"
                                                alt="Russia">
                                            <span>Русский</span>
                                        </a>
                                    </li>
                                    <li class="p-2 border hover:bg-gray-100  mb-3">
                                        <a href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), ['locale' => 'gr']) }}" class="flex justify-start items-center gap-x-3">
                                            <img
                                                src="https://flagcdn.com/16x12/gr.png"
                                                srcset="https://flagcdn.com/32x24/gr.png 2x,https://flagcdn.com/48x36/gr.png 3x"
                                                 width="20"
                                                height="18"
                                                alt="Greece">
                                            <span>Ελληνικά</span>
                                        </a>
                                    </li>
                                    <li class="p-2 border hover:bg-gray-100  mb-3">
                                        <a href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), ['locale' => 'sj']) }}" class="flex justify-start items-center gap-x-3">
                                            <img
                                                src="https://flagcdn.com/16x12/no.png"
                                                srcset="https://flagcdn.com/32x24/no.png 2x,https://flagcdn.com/48x36/no.png 3x"
                                                 width="20"
                                                height="18"
                                                alt="Norway">
                                            <span>Norsk</span>
                                        </a>
                                    </li>
                                    <li class="p-2 border hover:bg-gray-100  mb-3">
                                        <a href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), ['locale' => 'it']) }}" class="flex justify-start items-center gap-x-3">
                                            <img
                                                src="https://flagcdn.com/16x12/it.png"
                                                srcset="https://flagcdn.com/32x24/it.png 2x,https://flagcdn.com/48x36/it.png 3x"
                                                 width="20"
                                                height="18"
                                                alt="Italy">
                                            <span>Italiano</span>
                                        </a>
                                    </li>
                                    <li class="p-2 border hover:bg-gray-100  mb-3">
                                        <a href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), ['locale' => 'es']) }}" class="flex justify-start items-center gap-x-3">
                                            <img
                                                src="https://flagcdn.com/16x12/es.png"
                                                srcset="https://flagcdn.com/32x24/es.png 2x,https://flagcdn.com/48x36/es.png 3x"
                                                 width="20"
                                                height="18"
                                                alt="Spain">
                                            <span>Español</span>
                                        </a>
                                    </li>
                                    <li class="p-2 border hover:bg-gray-100  mb-3">
                                        <a href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), ['locale' => 'ar']) }}" class="flex justify-start items-center gap-x-3">
                                            <img
                                                src="https://flagcdn.com/16x12/sa.png"
                                                srcset="https://flagcdn.com/32x24/sa.png 2x,https://flagcdn.com/48x36/sa.png 3x"
                                                 width="20"
                                                height="18"
                                                alt="Saudi Arabia">
                                            <span>عربي</span>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="z-100 xl:hidden bg-slate-900 mt-1 px-4 justify-between items-center w-full lg:flex lg:w-auto lg:order-1" style="display: none" x-show="open">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-16 lg:mt-0">
                    <li class="mb-4">
                        <a href="{{route('home-page')}}" class="{{Route::currentRouteName() == "home-page"  ? ' nav-link-active' : 'nav-link '}}">{{__('Home')}}</a>
                    </li>
                    <li class="mb-4">
                        <a href="{{route('about')}}" class="{{Route::currentRouteName() == "about"  ? ' nav-link-active' : 'nav-link '}}">{{__('About U')}}s</a>
                    </li>
                    <li class="mb-4">
                        <a href="{{route('services')}}" class="{{Route::currentRouteName() == "services"  ? ' nav-link-active' : 'nav-link '}}">{{__('Services')}}</a>
                    </li>
                    <li class="mb-4">
                        <a href="{{route('booking')}}" class="{{Route::currentRouteName() == "booking"  ? ' nav-link-active' : 'nav-link'}}">{{__('Booking')}}</a>
                    </li>
                    <li class="mb-4">
                        <a href="{{route('contact')}}" class="{{Route::currentRouteName() == "contact"  ? ' nav-link-active' : 'nav-link '}}">{{__('Contact')}}</a>
                    </li>
                    <li class="mb-6">
                        <a href="{{route('booking')}}" class="text-white bg-secondary hover:bg-secondary font-medium rounded-lg text-sm px-4 py-2">{{__('Book no')}}w</a>
                    </li>

                    <li class="mb-6">
                        <a href="{{route('voyager.login')}}" class="bg-white text-secondary font-medium rounded-lg text-sm px-4 py-2">{{__('Log in')}}</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</header>
