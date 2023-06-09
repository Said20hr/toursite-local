<x-guest-layout>
    <secion class="">
        <img src="{{asset('images/landing-page-new1-02.webp')}}" class="w-full object-cover relative min-h-screen w-full" alt="hero">
        <div class="bg-background-dark bg-opacity-40 z-50 w-full h-screen flex flex-col justify-center m-auto text-center absolute inset-0 blur-sm"></div>
        <div class="z-50 absolute w-full h-screen top-0 flex flex-col justify-center text-center">
            <div class="z-40 mx-auto px-6">
                <h2 class="z-50 font-serif text-white xl:text-8xl text-5xl xl:mb-6 mb-4"> The Perfect Trips in Seychelles</h2>
                <h3 class="z-50 text-white font-medium xl:text-3xl text-lg mb-6">
                    If you are looking for a perfect holiday experience with memories to cherish you are at the right place.
                    <br>
                    Let’s plan a reasonable stay for you.</h3>
                <a href="{{route('booking')}}" class="mt-6 z-50 bg-btn shadow-sm hover:shadow-0 hover:opacity-70 py-3 px-12 text-white rounded-full w-fit mx-auto text-lg xl:text-2xl font-semibold " style="z-index: 30;">Book Now</a>
            </div>
        </div>
    </secion>
    <section class="py-12 xl:py-20">
        <div class="max-w-4xl mx-auto text-center px-6">
            <h2 class="xl:text-6xl text-5xl font-serif font-semibold mb-4"> WHY Touriste Lokal?</h2>
            <p class="text-center xl:text-2xl text-xl tracking-wide leading-relaxed mb-8">
                When in Seychelles, it is best to be served by Seychellois. Though boating and marine scenery is not unique to Seychelles, its culture and marine life is.
                With the assistance of this small but competent service, “Touriste Lokal” will guarantee a wonderful time and value for your money.
            </p>
            <a href="{{route('about')}}" class="z-50 bg-btn-secondary shadow-sm hover:shadow-0 hover:opacity-70 py-3 px-12 text-white rounded-full w-fit mx-auto text-xl font-semibold ">GET TO KNOW US</a>
        </div>
    </section>
    <section class="py-6 xl:py-20">
        <div class="container">
            <div class=" p-2 rounded-lg xl:grid grid-cols-2 items-center gap-x-16 gap-y-12 xl:gap-y-24 mb-16 text-center xl:text-left">
                <div class="w-full relative text-center xl:text-left mb-6 xl:mb-2">
                    <h2 class="text-5xl font-serif font-semibold mb-6"> Book Your Trip</h2>
                    <p class="text-base xl:text-lg text-black tracking-wide xl:leading-relaxed mb-3">
                        Whether it’s a private fishing trip, a snorkeling discovery, diving, island hopping,
                        or just a fun day out with friends and family followed by grilled fish on an island, we have you covered!
                    </p>
                    <p class="text-lg text-black tracking-wide leading-relaxed  mb-4 xl:mb-10">
                        We are ready and able to cater to what you have in mind, so don’t hesitate to get in touch so we can figure something out that best suits your expectations.
                    </p>
                    <div class="flex justify-center xl:justify-start w-full ">
                        <a href="{{route('about')}}" class="z-50 bg-btn-secondary shadow-sm hover:shadow-0 hover:opacity-70 py-2 px-12 text-white rounded-full w-fit text-xl font-semibold ">BOOK TODAY</a>
                    </div>
                    <img src="{{asset('images/landing-page-new-03.png')}}" alt="icon" class="absolute bottom-0 right-10 hidden xl:flex">
                </div>
                <div class="mb-6 xl:mb-2">
                    <img src="{{asset('images/DSC2228-1-1200x795.webp')}}" class="w-full object-center rounded-xl shadow-sm" alt="">
                </div>
            </div>
            <div class="p-2 rounded-lg xl:grid grid-cols-2 items-center gap-x-16 gap-y-12 xl:gap-y-24 mb-16 text-center xl:text-left">
                <div class="w-full relative order-first xl:order-last mb-6 xl:mb-2">
                    <h2 class="text-5xl font-serif font-semibold mb-6"> Our Services</h2>
                    <p class="text-base xl:text-lg text-black tracking-wide xl:leading-relaxed mb-4 xl:mb-10">
                        Don’t miss your opportunity to spot eagle rays, pipefish, sea turtles, and sometimes even bottlenose dolphins! An ecological marvel,
                        and Seychelles’ oldest marine reserve that attracts over a third of all Seychelles’ tourists. Come and find out why!
                    </p>
                    <div class="flex justify-center xl:justify-start w-full ">
                        <a href="{{route('services')}}" class="z-50 bg-btn-secondary shadow-sm hover:shadow-0 hover:opacity-70 py-2 px-12 text-white rounded-full w-fit text-xl font-semibold ">Services</a>
                    </div>
                    <img src="{{asset('images/landing-page-new-03.png')}}" alt="icon" class="absolute bottom-0 right-10 hidden xl:flex">
                </div>
                <div class="mb-6 xl:mb-2">
                    <img src="{{asset('images/DSC2218-1200x795.webp')}}" class="w-full object-center rounded-xl shadow-sm" alt="">
                </div>
            </div>
            <div class="p-2 rounded-lg xl:grid grid-cols-2 items-center gap-x-16 gap-y-12 xl:gap-y-24 mb-16 text-center xl:text-left">
                <div class="w-full relative mb-6 xl:mb-2">
                    <h2 class="text-5xl font-serif font-semibold mb-6"> Book Your Trip</h2>
                    <p class="text-base xl:text-lg text-black tracking-wide xl:leading-relaxed mb-4 xl:mb-10">
                        Whether you are chilling, having fun or focused on that catch, what is guaranteed is the intake of a stunning tropical surrounding. From the clear, turquoise Indian Ocean, lush green mountains or majestic
                        unique granite formations, there is no other place like Seychelles to spend time out at sea.
                    </p>
                    <div class="flex justify-center xl:justify-start w-full ">
                        <a href="{{route('about')}}" class="z-50 bg-btn-secondary shadow-sm hover:shadow-0 hover:opacity-70 py-2 px-12 text-white rounded-full w-fit text-xl font-semibold ">About us</a>
                    </div>
                    <img src="{{asset('images/landing-page-new-03.png')}}" alt="icon" class="absolute bottom-0 right-10 hidden xl:flex">
                </div>
                <div class="mb-6 xl:mb-2">
                    <img src="{{asset('images/IMG_20210728_111606-800x600.webp')}}" class="w-full object-center rounded-xl shadow-sm" alt="">
                </div>
            </div>
        </div>
    </section>
   {{-- <section class="py-20 bg-gray-200 w-full">
        <h2 class="text-7xl text-center text-elementary font-serif font-semibold my-8"> Recent Experiences</h2>
        <div class="container py-16 relative" >
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4" uk-lightbox="animation: fade">
                @foreach($gallery as $image)
                    <a href="{{ $image->image }}" class="flex flex-0 ">
                        <img class="h-auto max-w-full object-cover rounded-lg hover:grayscale hover:scale-95 cursor-pointer transition duration-500" src="{{ $image->image }}" alt="{{$image->image}}">
                    </a>
                @endforeach
            </div>

        </div>
        </div>
    </section>--}}
    <section class="py-20 bg-elementary w-full">
        <div class="xl:container px-6 mx-auto text-center">
            <h2 class="text-5xl text-secondary font-serif">TESTIMONIALS</h2>
            <div class="mx-auto mt-12">
                <div class="uk-position-relative uk-visible-toggle uk-light text-center" tabindex="-1" uk-slider="autoplay: true">
                    <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-1@m uk-child-width-1-3@l uk-child-width-1-1@s uk-grid">
                       @foreach($testimonials as $testi)
                            <li class="h-full my-12">
                                <div class="p-8 bg-white rounded-2xl shadow-lg text-center h-full">
                                    <img src="{{asset('storage/testimonies/'.$testi->avatar)}}" alt="Profile" class="-mt-20 w-20 rounded-full">
                                    <div class="text-center text-black my-4 font-semibold text-lg">{{$testi->name}}</div>
                                    <div class="flex flex-wrap gap-4 mx-auto text-center justify-center mb-6">
                                        @for($i=0 ;$i < $testi->stars ; $i++)
                                            <i class="fa fa-star text-yellow-400"></i>
                                        @endfor
                                    </div>
                                    <div class="mt-4 text-black text-justify mb-6">
                                        {{ $testi->description }}
                                    </div>
                                </div>
                            </li>
                       @endforeach
                    </ul>
                    <ul class="uk-slider-nav uk-dotnav my-6 text-xl flex justify-center"></ul>
                </div>
                <div class="mx-auto flex justify-center mt-12">
                    <a href="{{setting('public.instagram')}}" target="_blank" class="rounded-full hover:bg-opacity-80 transition-color duration-100 xl:px-12 px-10 xl:py-4 py-2 text-white bg-secondary border border-elementary text-xl">
                        {{__('Follow us on Instagram')}}
                    </a>
                </div>
            </div>
        </div>
    </section>

</x-guest-layout>
