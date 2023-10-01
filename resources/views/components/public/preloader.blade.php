<div wire.loading
     x-data="{ show: true }"
     x-show="show"
     x-init="shown = true;setTimeout(() => show = false, 2000)"
     x-show.transition.out.opacity.duration.1000ms="shown"
     x-transition:leave.opacity.duration.1000ms
     class="fixed inset-0 w-screen h-full z-990 h-screen overflow-hidden bg-slate-900
      justify-center overflow-hidden flex items-center ">
    <div class="text-center w-screen overflow-hidden animate-ping_slow duration-2000 transition-transform ease-linear w-44 xl:w-56 mb-4">
        <img src="{{asset('images/logos/touiriste new@300x (1).png')}}" class="w-44 xl:w-56" alt="loader">
    </div>

</div>

