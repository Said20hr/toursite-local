<x-guest-layout>
    <secion class="bg-white">
        <img src="{{asset('storage/'.$service->image)}}" class="w-full object-cover object-center relative h-screen w-full">
        <div class="bg-background-dark bg-opacity-40 z-50 w-full flex flex-col justify-center text-center absolute inset-0 blur-sm h-screen"></div>
        <div class="z-50 absolute w-full h-screen top-0 flex flex-col justify-center text-center">
            <div class="z-40 m-auto px-6">
                <h2 class="z-50 font-serif text-white xl:text-9xl text-5xl xl:mb-6 mb-4">{{$service->title}}</h2>
            </div>
        </div>
    </secion>
    <section class="py-20 bg-gray-200 w-full">
        <div class="grid xl:grid-cols-3 gap-12 container">
             <div>
                 <h2 class="font-serif text-5xl">{{$service->title_description_1}}</h2>
                 <p>
                     {{$service->description_1}}
                 </p>
             </div>
            <div>
                <h2 class="font-serif text-5xl">{{$service->title_description_2}}</h2>
                <p>
                    {{$service->description_2}}
                </p>
            </div>
            <div>
                <h2 class="font-serif text-5xl">{{$service->title_description_3}}</h2>
                <p>
                    {{$service->description_3}}
                </p>
            </div>
        </div>
        <h2 class="text-5xl text-center text-elementary font-serif font-semibold mt-16"> Gallery</h2>
        <div class="container py-16 relative" >
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4" uk-lightbox="animation: fade">
                @foreach(json_decode($service->gallery) as $image)
                    <a href="{{asset('storage/'.$image)}}" class="flex flex-0 ">
                        <img class="h-auto max-w-full object-cover rounded-lg hover:grayscale hover:scale-95 cursor-pointer transition duration-500" src="{{asset('storage/'.$image)}}" alt="{{$image}}">
                    </a>
                @endforeach
            </div>
            <div class="my-24 text-center">
                <p class="text-2xl mb-5">Custome your {{$service->title}} tour with us inquiree now</p>
                <a href="{{route('booking.service', $service->slug )}}" class="text-white bg-elementary rounded-2xl px-12 py-2.5 text-xl mt-4">INQUIRY</a>
            </div>
        </div>
        </div>

    </section>

</x-guest-layout>
