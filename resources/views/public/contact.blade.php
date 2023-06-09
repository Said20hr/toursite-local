<x-guest-layout>
    <secion class="bg-white">
        <img src="{{asset('images/sasha.webp')}}" class="w-full object-cover object-center relative h-full xl:h-screen w-full">
        <div class="bg-background-dark bg-opacity-40 z-50 w-full flex flex-col justify-center text-center absolute inset-0 h-screen"></div>
        <div class="z-50 absolute w-full h-screen top-0 flex flex-col justify-center text-center">
            <div class="z-40 m-auto px-6">
                <h2 class="z-50 font-serif text-white xl:text-9xl text-5xl xl:mb-6 mb-4">Contact Us</h2>
            </div>
        </div>
    </secion>
    <section class="py-20 bg-gray-200 w-full">
        <div class="max-w-5xl mx-auto">
            <div class="text-center">
                <h2 class="font-serif xl:text-6xl text-4xl">Our team is available to answer your questions</h2>
            </div>
            <div class="xl:flex justify-between max-w-xl bg-gray-100 rounded-md mx-auto my-12 border border-gray-600">
                <div class="w-full  p-10 rounded-md mx-auto " id="response">
                    @if(session()->has('success_message'))
                        <div class="text-green-600 text-center text-xl flex justify-center">
                            {{ session()->get('success_message') }}
                        </div>
                    @else
                    <form method="post" action="{{route('contact.submit')}}" class="">
                        @csrf
                        <div class="grid grid-cols-1 gap-6">
                            <input type="text" name="name" class="w-full px-4 py-2 rounded-sm border border-gray-300" placeholder="Name">
                            <input type="email" name="email" class="w-full px-4 py-2 rounded-sm border border-gray-300" placeholder="Email">
                            <input type="text" name="subject" class="w-full px-4 py-2 rounded-sm border border-gray-300" placeholder="Subject">
                            <textarea name="message" name="message" class="w-full px-4 py-2 rounded-sm border border-gray-300" placeholder="Your Message"></textarea>
                            <button type="submit" class="p-3 bg-elementary hover:bg-opacity-80 text-white">Send your message</button>
                        </div>
                    </form>
                    @endif
                </div>
            </div>

        </div>

    </section>
</x-guest-layout>
