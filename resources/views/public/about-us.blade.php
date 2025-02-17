<x-guest-layout>
    <secion class="bg-white">
        <img src="{{asset('images/chris-_EUqgIjrb74-unsplash.webp')}}" class="object-cover object-center relative h-full xl:h-screen w-full" alt="img">
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
                    <img src="{{asset('images/URE.jpg')}}" class="w-full object-center rounded-xl shadow-sm" alt="sqs">
                    <div class="justify-center mx-auto w-full gap-x-12 items-center hidden group-hover:flex absolute transition-opacity duration-75 bottom-2">
                        <a href="{{setting('public.owner-facebook')}}"> <i class="text-3xl fab fa-facebook text-white  duration-75 hover:scale-110"></i></a>
                        <a href="{{setting('public.owner-instagram')}}"> <i class="text-3xl fab fa-instagram text-white  duration-75 hover:scale-110"></i></a>
                        <a href="mailto:{{setting('public.owner-email')}}"> <i class="text-3xl fa fa-envelope text-white  duration-75 hover:scale-110"></i></a>
                        <a href="tel:{{setting('public.owner-phone')}}"> <i class="text-3xl fa fa-phone text-white  duration-75 hover:scale-110"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-guest-layout>
