<x-guest-layout>
    <secion class="relative">
        @if(isset($service))
            @livewire('service-booking', ['service' =>$service])
        @else
            @livewire('service-booking')
        @endif
    </secion>
    {{--
    <section class="py-20 bg-gray-200 w-full">
        <div class="container py-16 relative" >
            <div class="xl:flex gap-x-16">
                <div class="w-full xl:w-1/2">
                    <h2 class="font-serif text-5xl">
                        World-Class Luxury <br>
                        Facilities
                    </h2>
                    <p class="text-lg leading-relaxed mt-3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elitsy modesy tempor incididunt labore dolor magna aliqua. Quis ipsum suspendisse ultrices gravida risus.
                    </p>
                    <div class="flex items-center gap-x-12 px-6 mt-8">
                        <div>
                            <i class="fa fa-phone text-5xl text-elementary"></i>
                        </div>
                        <div>
                            <div class="text-xl">
                                Call Us For Reservations:
                            </div>
                            <a href="tel:{{setting('public.phone')}}" class="mt-0 font-bold text-3xl text-black">
                                {{setting('public.phone')}}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-6 w-full xl:w-1/2">
                    <img src="{{asset('images/beer-glasses-400x528.jpg')}}" alt="beer" class="w-full rounded-xl object-cover">
                    <img src="{{asset('images/hotel-room-1-400x528.jpg')}}" alt="beer" class="w-full rounded-xl object-cover">
                </div>
            </div>

        </div>
    </section>
    --}}
    <section>
        <iframe src="https://www.youtube-nocookie.com/embed/{{setting('public.video')}}?autoplay=0&amp;showinfo=0&amp;rel=0&amp;modestbranding=1&amp;playsinline=1" width="1920" height="1080" allowfullscreen uk-responsive uk-video="automute: true"></iframe>
    </section>
</x-guest-layout>
