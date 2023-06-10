<?php

namespace App\Http\Livewire;

use App\Models\Booking;
use App\Models\Service;
use Livewire\Component;

class ServiceBooking extends Component
{
    public $service;
    public $serviceSelected;
    public $services;
    public $step = 1;
    public $checkin;
    public $checkout;
    public $adults;
    public $children;
    public $firstname;
    public $lastname;
    public $email;
    public $phone;
    public $address;
    public $country;
    public $city;
    public $message;
    public function mount($service = null)
    {
        $this->service = $service;
        $this->services = Service::all();
    }

    public function booking()
    {
        $this->validate([
            'checkin' => 'required|date|after_or_equal:today',
            'checkout' => 'required|date|after:checkin',
            'adults' => 'required|numeric|min:1|max:10',
            'children' => 'nullable|numeric|min:0|max:10',
        ]);
        if (! $this->service)
        {
            $this->service = Service::findOrFail($this->serviceSelected);
        }
        $this->step = 2;
    }
    public function info()
    {
        $this->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'nullable|string',
        ]);
        $this->step = 3;
    }
    public function Send()
    {
        $booking = Booking::create([
            'service_id' => $this->service->id,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'phone' => $this->phone,
            'check_in_date' =>$this->checkin,
            'check_ou_date' =>$this->checkout,
            'adults' =>$this->adults,
            'children' => $this->children,
            'additional_information' => $this->message,
            'status' => 'Pending',
        ]);
        dd($booking);
    }
    public function render()
    {
        return view('livewire.service-booking');
    }
}
