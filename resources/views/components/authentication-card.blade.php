<div class="min-h-screen flex flex-col sm:justify-center items-center pt-16 sm:pt-0 bg-cover px-4 rounded-md"
style="background-image: url( {{asset('images/landing-page-new1-02.webp')}} )">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-12 px-6 py-4 bg-white shadow-md overflow-hidden rounded-lg z-100">
        {{ $slot }}
    </div>
</div>
