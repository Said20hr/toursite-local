<div class="z-50 w-full min-h-screen xl:h-full top-0 flex flex-col justify-center xl:px-0 px-6 py-20 xl:py-40 relative bg-cover bg-center"
     style="background-image: url({{ $service ? asset('storage/'.$service->image) : asset('images/anse-source-d-argent-la-digue-seychelles-young-couple-men-women-tropical-beach-during-luxury-vacation-seychelles-tropical-beach-anse-source-d-argent-la-digue-seychelles.webp') }})">
    <div class="bg-background-dark bg-opacity-30 z-30 w-full flex flex-col justify-center text-center absolute inset-0 h-full"></div>
    <h2 class="text-4xl xl:text-7xl text-center z-50 text-white font-serif font-semibold xl:mb-6 mb-2"> Book your trip.</h2>
    @if($step == 1)
        <form wire:submit.prevent="booking" class="z-40 m-auto pt-4 pb-8 xl:px-8 px-6 bg-white rounded-md w-full xl:max-w-7xl mx-auto xl:mt-12">
            <div class="grid xl:grid-cols-6 gap-x-2">
                <div class="flex flex-col">
                    <label for="service" class="xl:my-2 my-1 font-bold text-sm ">Service</label>
                    @if(isset($service))
                        <input value="{{$service->title}}" name="service" disabled type="text" class="px-5 py-2 xl:h-14 h-10 w-full xl:w-44 bg-white border border-gray-500 rounded-lg">
                    @else
                        <select id="service" wire:model="serviceSelected" class="px-4 p-2 xl:h-14 h-10 bg-white border border-gray-300 w-full xl:w-44 rounded-lg">
                            <option value="" disabled>Choose Service</option>
                            @foreach($services as $service)
                                <option value="{{$service->id}}">{{$service->title}}</option>
                            @endforeach
                        </select>
                    @endif
                </div>
                <div class="flex flex-col">
                    <label for="checkIn" class="xl:my-2 my-1 font-bold text-sm ">Check-In Date</label>
                    <input type="date" id="checkIn" wire:model="checkin" placeholder="Check-In Date" class="p-2 xl:h-14 h-10 w-full xl:w-44 bg-white border border-gray-300 rounded-lg" min="{{ date('Y-m-d') }}">
                    <x-input-error for="checkin" class="mt-1" />
                </div>
                <div class="flex flex-col">
                    <label for="CheckOut" class="xl:my-2 my-1 font-bold text-sm ">Check-Out Date</label>
                    <input type="date" id="CheckOut" wire:model="checkout" placeholder="Check-Out Date" class="p-2 xl:h-14 h-10 w-full xl:w-44 bg-white border border-gray-300 rounded-lg" min="{{ isset($checkin) ? date('Y-m-d', strtotime($checkin . ' +1 day')) : date('Y-m-d') }}">
                    <x-input-error for="checkout" class="mt-1" />
                </div>
                <div class="flex flex-col relative">
                    <label for="Adults" class="xl:my-2 my-1 font-bold text-sm ">Number of Adults</label>
                    <i class="fa fa-male text-xl absolute xl:top-13 top-9 left-3"></i>
                    <input type="number" id="Adults" wire:model="adults" min="1" max="10" placeholder="Adults" class="pl-10 p-2 xl:h-14 h-10 w-full xl:w-44 bg-white border border-gray-300 rounded-lg">
                    <x-input-error for="adults" class="mt-1" />
                </div>
                <div class="flex flex-col relative">
                    <label for="Children" class="xl:my-2 my-1 font-bold text-sm ">Children</label>
                    <i class="fa fa-child-dress text-lg absolute xl:top-13 top-9 left-3"></i>
                    <input type="number" id="Children" wire:model="children" min="0" max="10" placeholder="Children" class="pl-10 p-2 xl:h-14 h-10 w-full xl:w-44 bg-white border border-gray-300 rounded-lg">
                    <x-input-error for="children" class="mt-1" />
                </div>
                <div class="flex flex-col">
                    <button type="submit" class="bg-elementary px-4 py-2 text-white rounded-lg w-full xl:w-44 xl:h-14 h-10 mt-6 xl:mt-10">Next</button>
                </div>
            </div>
        </form>
    @elseif($step == 2)
        <form wire:submit.prevent="info" class="z-40 m-auto p-6 bg-white rounded-md w-full xl:max-w-3xl mx-auto mt-2">
            <div class="xl:grid xl:grid-cols-2 gap-6 xl:px-6">
                <div class="">
                    <label for="firstname" class="xl:my-2 my-1 font-bold text-sm ">First name</label>
                    <input type="text" id="firstname" wire:model="firstname" class="w-full px-4 py-2 rounded-sm border border-gray-300" placeholder="First name">
                    <x-input-error for="lastname" class="mt-1" />
                </div>
                <div class="">
                    <label for="firstname" class="xl:my-2 my-1 font-bold text-sm ">Last name</label>
                    <input type="text" wire:model="lastname" class="w-full px-4 py-2 rounded-sm border border-gray-300" placeholder="Last name">
                    <x-input-error for="firstname" class="mt-1" />
                </div>
                <div class="">
                    <label for="email" class="xl:my-2 my-1 font-bold text-sm ">Email</label>
                    <input type="email" wire:model="email" class="w-full px-4 py-2 rounded-sm border border-gray-300" placeholder="Email">
                    <x-input-error for="email" class="mt-1" />
                </div>
                <div class="">
                    <label for="phone" class="xl:my-2 my-1 font-bold text-sm ">Phone</label>
                    <input type="text" wire:model="phone" class="w-full px-4 py-2 rounded-sm border border-gray-300" placeholder="Phone">
                    <x-input-error for="phone" class="mt-1" />
                </div>
                <div class="col-span-2">
                    <label for="phone" class="xl:my-2 my-1 font-bold text-sm ">Message</label>
                    <textarea name="message" wire:model="message" class="w-full px-4 py-2 rounded-sm border border-gray-300" placeholder="Additional information"></textarea>
                    <x-input-error for="message" class="mt-1" />
                </div>
                <div class="xl:col-span-2 flex justify-center">
                    <button type="submit" class="bg-elementary px-4 py-2 text-white rounded-lg w-full xl:w-1/2 xl:h-14 h-10 mt-6 xl:mt-10">
                        {{__('Next')}}
                    </button>
                </div>
            </div>
        </form>
    @elseif($step == 3)
        <div class="z-40 m-auto p-6 bg-white rounded-md w-full xl:max-w-3xl mx-auto mt-2">
            <div class="grid grid-cols-1 xl:grid-cols-2 gap-6 py-4">
                <div>
                    <div class="w-full max-w-full  xl:flex xl:flex-col items-center px-3 flex-0">
                        <h6 class="mb-4 dark:text-white -ml-4">Reservation details</h6>
                        <div class="relative before:left-4 before:-ml-px before:content-[''] before:absolute before:top-0 before:h-full before:border-r-2 before:border-solid before:border-r-slate-100 ">
                            <div class="relative mb-4">
                                <span class="left-4 absolute inline-flex items-center justify-center w-6.5 h-6.5 rounded-circle bg-white text-center -translate-x-1/2 text-base font-semibold z-1">
                                    <i class="fa fa-star leading-none text-slate-600 leading-pro"></i>
                                </span>
                                <div class="ml-12 pt-1.4 relative -top-1.5 w-auto lg:max-w-120">
                                    <h6 class="mb-0 font-semibold leading-normal dark:text-white text-sm text-slate-700">Service</h6>
                                    <p class="mt-1 mb-0 font-semibold leading-tight text-xs text-slate-400">{{$service->title}}</p>
                                </div>
                            </div>
                            <div class="relative mb-4">
                                <span class="left-4 absolute inline-flex items-center justify-center w-6.5 h-6.5 rounded-circle bg-white text-center -translate-x-1/2 text-base font-semibold z-1">
                                    <i class="fa leading-none fa-calendar text-slate-600 leading-pro"></i>
                                </span>
                                <div class="ml-12 pt-1.4 relative -top-1.5 w-auto lg:max-w-120 float-none">
                                    <h6 class="mb-0 font-semibold leading-normal dark:text-white text-sm text-slate-700">Check-In Date</h6>
                                    <p class="mt-1 mb-0 font-semibold leading-tight text-xs text-slate-400">{{$checkin}}</p>
                                </div>
                            </div>
                            <div class="relative mb-4">
                                <span class="left-4 absolute inline-flex items-center justify-center w-6.5 h-6.5 rounded-circle bg-white text-center -translate-x-1/2 text-base font-semibold z-1">
                                    <i class="fa leading-none fa-calendar text-slate-600 leading-pro"></i>
                                </span>
                                <div class="ml-12 pt-1.4 relative -top-1.5 w-auto lg:max-w-120">
                                    <h6 class="mb-0 font-semibold leading-normal dark:text-white text-sm text-slate-700">Check-Out Date</h6>
                                    <p class="mt-1 mb-0 font-semibold leading-tight text-xs text-slate-400">{{$checkout}}</p>
                                </div>
                            </div>
                            <div class="relative mb-4">
                                <span class="left-4 absolute inline-flex items-center justify-center w-6.5 h-6.5 rounded-circle bg-white text-center -translate-x-1/2 text-base font-semibold z-1">
                                    <i class="fa leading-none fa-users text-slate-600 leading-pro"></i>
                                </span>
                                <div class="ml-12 pt-1.4 relative -top-1.5 w-auto lg:max-w-120 float-none">
                                    <h6 class="mb-0 font-semibold leading-normal dark:text-white text-sm text-slate-700">Number Of Adults</h6>
                                    <p class="mt-1 mb-0 font-semibold leading-tight text-xs text-slate-400">{{$adults}}</p>
                                </div>
                            </div>
                            <div class="relative mb-4">
                                <span class="left-4 absolute inline-flex items-center justify-center w-6.5 h-6.5 rounded-circle bg-white text-center -translate-x-1/2 text-base font-semibold z-1">
                                    <i class="fa leading-none fa-child-dress text-slate-600 leading-pro"></i>
                                </span>
                                <div class="ml-12 pt-1.4 relative -top-1.5 w-auto lg:max-w-120 float-none">
                                    <h6 class="mb-0 font-semibold leading-normal dark:text-white text-sm text-slate-700">Number of Children</h6>
                                    <p class="mt-1 mb-0 font-semibold leading-tight text-xs text-slate-400">{{$children}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <ul class=" xl:flex xl:flex-col items-center pl-0 mb-0 rounded-lg">
                        <li class="relative flex mb-2 rounded-xl bg-gray-50 dark:bg-slate-800 text-inherit">
                            <div class="flex flex-col">
                                <h6 class="mb-4 dark:text-white">Information details</h6>
                                <div class="mb-2 mt-2 leading-tight text-base xl:mb-6">
                                    First name : <span class="ml-2 font-semibold text-slate-700 dark:text-white/70">{{$firstname}}</span>
                                </div>
                                <div class="mb-2 leading-tight text-base xl:mb-6">
                                    Last name : <span class="ml-2 font-semibold text-slate-700 dark:text-white/70">{{$lastname}}</span>
                                </div>
                                <div class="mb-2 leading-tight text-base xl:mb-6">
                                    Email Address:
                                    <span class="ml-2 font-semibold text-slate-700 dark:text-white/70">{{$email}}</span>
                                </div>
                                <div class="leading-tight text-base xl:mb-6">
                                    Phone Number:
                                    <span class="ml-2 font-semibold text-slate-700 dark:text-white/70">{{$phone}}</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="xl:col-span-2 flex justify-center">
                    <button type="button" wire:click="Send()" class="bg-elementary px-4 py-2 text-white rounded-lg w-full xl:w-1/2 xl:h-14 h-10 mt-6 xl:mt-10">
                        {{__('Confirm and send your inquiry')}}
                    </button>
                </div>
            </div>
        </div>
    @elseif($step == 4)
        <div class="z-40 m-auto xl:p-6 p-4 bg-white rounded-md w-full xl:max-w-3xl mx-auto mt-2">
            <div class="grid xl:grid-cols-2 grid-cols-1 gap-6">
                <div class="xl:col-span-2 text-green-600 text-center xl:text-xl text-base xl:flex xl:flex-col justify-center">
                    Thank you for your reservation inquiry! We have received your request and will be in touch shortly.
                    <div class="mt-4">
                        <svg
                            class="xl:w-24 xl:h-24 w-16 h-16"
                            viewBox="0 0 133 133"
                            version="1.1"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                        >
                            <g
                                id="check-group"
                                stroke="none"
                                stroke-width="1"
                                fill="none"
                                fill-rule="evenodd"
                            >
                                <circle
                                    id="filled-circle"
                                    fill="#07b481"
                                    cx="66.5"
                                    cy="66.5"
                                    r="54.5"
                                />
                                <circle
                                    id="white-circle"
                                    fill="#FFFFFF"
                                    cx="66.5"
                                    cy="66.5"
                                    r="55.5"
                                />
                                <circle
                                    id="outline"
                                    stroke="#07b481"
                                    stroke-width="4"
                                    cx="66.5"
                                    cy="66.5"
                                    r="54.5"
                                />
                                <polyline
                                    id="check"
                                    stroke="#FFFFFF"
                                    stroke-width="5.5"
                                    points="41 70 56 85 92 49"
                                />
                            </g>
                        </svg>
                    </div>

                </div>
                <div class="xl:col-span-2 text-green-600 text-center text-xl flex justify-center pb-4">
                    <a href="{{route('services')}}" class="rounded-lg hover:bg-opacity-80 transition-color duration-100 xl:px-6 px-4 py-2 text-white bg-secondary border border-secondary text-lg">
                        {{__('Check our services')}}
                    </a>
                </div>
            </div>
        </div>
    @endif

</div>
