<x-guest-layout>
    <secion class="">
        <img src="{{asset('images/drone-view-from-anse-lazio-beach-praslin-island-seychelles-couple-men-women-beach.webp')}}"
             class="w-full object-cover object-center relative h-116 xl:h-screen w-full">
        <div class="bg-background-dark bg-opacity-40 z-50 w-full flex flex-col justify-center text-center absolute inset-0 blur-sm h-116 xl:h-screen"></div>
        <div class="z-50 absolute w-full h-116 xl:h-screen top-0 flex flex-col justify-center text-center" >
            <div class="z-40 mx-auto max-w-5xl px-6 h-full">
                <h2 class="z-50 font-serif text-white xl:text-9xl text-4xl xl:mb-6 mb-4 xl:mt-64 mt-28"> Our Services</h2>
                <p class="text-white xl:text-lg text-base leading-10">
                    Touriste Lokal offers diverse boat charter services, curated for all experience levels, ensuring unforgettable ocean adventures led by a passionate marine expert.
                </p>
            </div>
        </div>
        <section class="py-12 xl:py-20 bg-gray-200 w-full">
            <h2 class="text-4xl xl:text-7xl text-center text-elementary font-serif font-semibold my-2 my-8"> Select your dream trip.</h2>
            <div class="container py-6 xl:py-16 relative" >
                <div class="grid xl:grid-cols-3 grid-cols-1 gap-6">
                    @foreach($services as $service)
                        <div class="p-2 rounded-md bg-gray-100 shadow text-center">
                            <div class="uk-inline-clip uk-transition-toggle relative rounded-lg mb-4" tabindex="0">
                                <img src="{{asset('storage/'.$service->image)}}" class="uk-transition-scale-up uk-transition-opaque w-full h-auto object-cover rounded-lg shadow" alt="">
                            </div>
                            <a href="#" class="text-elementary text-center font-serif text-3xl hover:text-secondary xl:text-5xl mt-3">
                                {{$service->Subtitle}}
                            </a>
                            <p class="text-center mt-2">
                                {{$service->excerpt}}
                            </p>
                            <div class="flex justify-center mb-3">
                                <a href="{{route('service.show',$service->slug)}}" class="rounded-md hover:bg-opacity-80 bg-elementary text-white px-3 py-2 text-lg">Read More</a>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
            </div>
        </section>
    </secion>


</x-guest-layout>
