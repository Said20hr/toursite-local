<x-guest-layout>
    <secion class="bg-white">
        <img src="{{asset('images/chris-_EUqgIjrb74-unsplash.webp')}}" class="w-full object-cover object-center relative h-full xl:h-screen w-full">
        <div class="bg-background-dark bg-opacity-40 z-50 w-full flex flex-col justify-center text-center absolute inset-0 blur-sm h-72 xl:h-screen"></div>
        <div class="z-50 absolute w-full h-72 xl:h-screen top-0 flex flex-col justify-center text-center">
            <div class="z-40 mx-auto px-6">
                <h2 class="z-50 {{app()->getLocale() == 'ar' ? 'font-Cairo xl:text-6xl text-3xl' : 'font-serif xl:text-9xl text-5xl'}} text-white  xl:mb-6 mb-4">
                    {{__('Get to know us more')}}</h2>
            </div>
        </div>
    </secion>
    <section class="py-12 xl:py-32">
        <div class="xl:container">
            <div class="xl:grid grid-cols-2 gap-x-20 mx-auto text-center px-6">
                <div class="text-left ">
                    <h2 class=" {{app()->getLocale() == 'ar' ? 'font-Cairo text-right xl:text-4xl text-3xl' : 'font-serif xl:text-6xl text-5xl'}} font-semibold mb-4">{{__('Meet the founder')}} </h2>
                    <p class="xl:text-lg text-base text-justify tracking-wide leading-relaxed mb-8 {{app()->getLocale() == 'ar' ? 'font-Cairo text-right' : ''}}">
                        {{__( "Meet Derreck Marimba, the visionary behind Touriste Lokal. With an unwavering passion for the ocean and a career steeped in the marine industry, Derreck embarked on a remarkable journey in 2020. He transformed his dream into a thriving reality by establishing Touriste Lokal, a premier boat charter company offering an extensive array of services tailored to clients of varying experience levels. Derreck's commitment extends beyond the ordinary; he is wholeheartedly dedicated to crafting extraordinary experiences for every customer, going the extra mile to guarantee the success of each outing. Your adventure with Touriste Lokal is in the hands of a true ocean enthusiast and expert.")}}

                    </p>
                </div>
                <div class="group relative">
                    <img src="{{asset('images/URE.jpg')}}" class="w-full object-center rounded-xl shadow-sm" alt="">
                    <div class="justify-center mx-auto w-full gap-x-12 items-center hidden group-hover:flex absolute transition-opacity duration-75 bottom-2">
                        <a href="{{setting('public.owner-facebook')}}"> <i class="text-3xl fab fa-facebook text-white transition transition-opacity duration-75 hover:scale-110"></i></a>
                        <a href="{{setting('public.owner-instagram')}}"> <i class="text-3xl fab fa-instagram text-white transition transition-opacity duration-75 hover:scale-110"></i></a>
                        <a href="mailto:{{setting('public.owner-email')}}"> <i class="text-3xl fa fa-envelope text-white transition transition-opacity duration-75 hover:scale-110"></i></a>
                        <a href="tel:{{setting('public.owner-phone')}}"> <i class="text-3xl fa fa-phone text-white transition transition-opacity duration-75 hover:scale-110"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--section class="py-12 xl:py-20 bg-gray-200 w-full">
        <h2 class="text-5xl xl:text-7xl text-center text-elementary font-serif font-semibold my-2 my-8"> The Business</h2>
        <div class="container py-6 xl:py-16 relative" >
            <div class="grid xl:grid-cols-2 grid-cols-1 gap-6" uk-lightbox="animation: fade">
                <div class="grid grid-cols-1 gap-6">
                    <div class="uk-text-center">
                        <div class="uk-inline-clip uk-transition-toggle group rounded-2xl" tabindex="0">
                            <img src="{{asset('images/1about-1.png')}}" class="uk-transition-scale-up uk-transition-opaque w-full h-96 xl:h-auto object-cover rounded-2xl shadow" alt="">
                            <div class="transition-all duration-500 hidden group-hover:flex bg-primary cursor-pointer text-white text-4xl rounded-2xl bg-opacity-40 z-50 w-full h-screen flex flex-col justify-center
                             m-auto text-center absolute inset-0">
                                Stylist Experiment
                            </div>
                        </div>
                    </div>
                    <div class="uk-text-center">
                        <div class="uk-inline-clip uk-transition-toggle group rounded-2xl" tabindex="0">
                            <img src="{{asset('images/3about-3.jpg')}}" class="uk-transition-scale-up uk-transition-opaque w-full h-96 xl:h-auto object-cover rounded-2xl shadow" alt="">
                            <div class="transition-all duration-500 hidden group-hover:flex bg-primary cursor-pointer text-white text-4xl rounded-2xl bg-opacity-40 z-50 w-full h-screen flex flex-col justify-center
                             m-auto text-center absolute inset-0">
                                White Board
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-text-center xl:h-full">
                    <div class="uk-text-center xl:h-full">
                        <div class="uk-inline-clip uk-transition-toggle group rounded-2xl xl:h-full" tabindex="0">
                            <img src="{{asset('images/2about-2.jpg')}}" class="uk-transition-scale-up uk-transition-opaque w-full xl:h-full h-auto object-cover rounded-2xl shadow" alt="">
                            <div class="transition-all duration-500 xl:h-full hidden group-hover:flex bg-primary cursor-pointer text-white text-4xl rounded-2xl bg-opacity-40 z-50 w-full flex flex-col justify-center
                             m-auto text-center absolute inset-0">
                                Make Today Great
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </section-->

</x-guest-layout>
