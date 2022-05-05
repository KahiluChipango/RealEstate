<x-app-layout>
    <x-slot name="header">

        <x-nav-links.accounts></x-nav-links.accounts>
    </x-slot>
    <div class="row">
        <div class="col-12">
            <div class="float-end hidden space-x-3 sm:-my-px sm:ml-10 sm:flex">
                <a class="float-end inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-cyan-600 hover:bg-cyan-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                   href="{{ route('valmaster.agency.download-summary',  $agency->id) }}"
                   role="button"
                   id="download-invoice">
                    Download
                </a>
            </div>

            @if(session()->has('EmailInvoice'))
                <div class="bg-green-200 rounded-lg xl:w-96 float-md-start text-base text-green-700 inline-flex items-center w-full mb-2" role="alert">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle" class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
                    </svg>
                    {{ session('EmailInvoice') }}
                </div>
            @endif

            @if(session()->has('SuccessSms'))
                <div class="bg-cyan-200 rounded-lg xl:w-96 float-md-start text-base text-green-700 inline-flex items-center w-full mb-2" role="alert">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle" class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
                    </svg>
                    {{ session('SuccessSms') }}
                </div>
            @endif

            @if(session()->has('FailSms'))
                <div class="bg-violet-200 rounded-lg xl:w-96 float-md-start text-base text-green-700 inline-flex items-center w-full mb-2" role="alert">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle" class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
                    </svg>
                    {{ session('FailSms') }}
                </div>
            @endif
        </div>
    </div>


    <div class="py-4 bg-green-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="grid grid-cols-3 gap-4">
                        <x-application-logo class="col-start-1 col-span-1 block h-10 w-auto fill- text-gray-600 items-center" />
                        <h1 class="col-start-2 col-span-2 text-left text-3xl font-bold">
                            Sherwood Greene Properties Limited
                        </h1>

                        <h1 class="col-span-3 text-center text-2xl font-semibold font-serif text-red-400 opacity-75 ">
                            Summary
                        </h1>
                        <div class="col-span-1 border-b-2">
                            <h1 class="underline font-bold text-uppercase font-serif">Job Number</h1>
                            <p class="font-mono">{{$agency->job_number}}</p>
                        </div>

                         <div class="col-span-1 border-b-2">
                            <h1 class="underline font-bold text-uppercase font-serif">Rent/Sale</h1>
                            <p class="font-mono">{{$agency->rent_sale}}</p>
                        </div>

                         <div class="col-span-1 border-b-2">
                            <h1 class="underline font-bold text-uppercase font-serif">Web</h1>
                            <p class="font-mono">{{$agency->web}}</p>
                        </div>

                         <div class="col-span-1 border-b-2">
                            <h1 class="underline font-bold text-uppercase font-serif">Agent In Charge</h1>
                            <p class="font-mono">{{$agency->agent_in_charge}}</p>
                        </div>

                         <div class="col-span-1 border-b-2">
                            <h1 class="underline font-bold text-uppercase font-serif">Service Line</h1>
                            <p class="font-mono">{{$agency->service_line}}</p>
                        </div>

                         <div class="col-span-1 border-b-2">
                            <h1 class="underline font-bold text-uppercase font-serif">Date of Instruction</h1>
                            <p class="font-mono">{{$agency->date_of_instruction}}</p>
                        </div>

                         <div class="col-span-1 border-b-2">
                            <h1 class="underline font-bold text-uppercase font-serif">Status</h1>
                            <p class="font-mono">{{$agency->job_number}}</p>
                        </div>

                         <div class="col-span-1 border-b-2">
                            <h1 class="underline font-bold text-uppercase font-serif">Client Name</h1>
                            <p class="font-mono">{{$agency->client_name}}</p>
                        </div>

                         <div class="col-span-1 border-b-2">
                            <h1 class="underline font-bold text-uppercase font-serif">Client Contact Numner</h1>
                            <p class="font-mono">{{$agency->client_contact_number}}</p>
                        </div>

                         <div class="col-span-1 border-b-2">
                            <h1 class="underline font-bold text-uppercase font-serif">Email</h1>
                            <p class="font-mono">{{$agency->email}}</p>
                        </div>

                         <div class="col-span-1 border-b-2">
                            <h1 class="underline font-bold text-uppercase font-serif">Property Address</h1>
                            <p class="font-mono">{{$agency->property_address}}</p>
                        </div>

                         <div class="col-span-1 border-b-2">
                            <h1 class="underline font-bold text-uppercase font-serif">Google Cordinates </h1>
                            <p class="font-mono">{{$agency->google_cordinates}}</p>
                        </div>

                         <div class="col-span-1 border-b-2">
                            <h1 class="underline font-bold text-uppercase font-serif">Type of property</h1>
                            <p class="font-mono">{{$agency->type_of_property}}</p>
                        </div>

                         <div class="col-span-1 border-b-2">
                            <h1 class="underline font-bold text-uppercase font-serif">Type of Building</h1>
                            <p class="font-mono">{{$agency->type_of_building}}</p>
                        </div>

                         <div class="col-span-1 border-b-2">
                            <h1 class="underline font-bold text-uppercase font-serif">Type of Building 2</h1>
                            <p class="font-mono">{{$agency->type_of_building_2}}</p>
                        </div>

                         <div class="col-span-1 border-b-2">
                            <h1 class="underline font-bold text-uppercase font-serif">Building Height</h1>
                            <p class="font-mono">{{$agency->building_height}}</p>
                        </div>

                         <div class="col-span-1 border-b-2">
                            <h1 class="underline font-bold text-uppercase font-serif">Number of Bedrooms</h1>
                            <p class="font-mono">{{$agency->number_of_bedrooms}}</p>
                        </div>

                         <div class="col-span-1 border-b-2">
                            <h1 class="underline font-bold text-uppercase font-serif">Size of Rooms</h1>
                            <p class="font-mono">{{$agency->size_of_rooms}}</p>
                        </div>

                         <div class="col-span-1 border-b-2">
                            <h1 class="underline font-bold text-uppercase font-serif">Number of bedrooms</h1>
                            <p class="font-mono">{{$agency->number_of_bathrooms}}</p>
                        </div>

                         <div class="col-span-1 border-b-2">
                            <h1 class="underline font-bold text-uppercase font-serif">Master Self Contained</h1>
                            <p class="font-mono">{{$agency->master_self_contained}}</p>
                        </div>

                         <div class="col-span-1 border-b-2">
                            <h1 class="underline font-bold text-uppercase font-serif">Furnished</h1>
                            <p class="font-mono">{{$agency->furnished}}</p>
                        </div>

                         <div class="col-span-1 border-b-2">
                            <h1 class="underline font-bold text-uppercase font-serif">Quality of Finishes</h1>
                            <p class="font-mono">{{$agency->quality_of_finishes}}</p>
                        </div>

                         <div class="col-span-1 border-b-2">
                            <h1 class="underline font-bold text-uppercase font-serif">Land Size</h1>
                            <p class="font-mono">{{$agency->land_size}}</p>
                        </div>

                         <div class="col-span-1 border-b-2">
                            <h1 class="underline font-bold text-uppercase font-serif">Pool House Club</h1>
                            <p class="font-mono">{{$agency->pool_house_club}}</p>
                        </div>

                         <div class="col-span-1 border-b-2">
                            <h1 class="underline font-bold text-uppercase font-serif">Gym</h1>
                            <p class="font-mono">{{$agency->gym}}</p>
                        </div>

                         <div class="col-span-1 border-b-2">
                            <h1 class="underline font-bold text-uppercase font-serif">Guard House</h1>
                            <p class="font-mono">{{$agency->guard_house}}</p>
                        </div>

                         <div class="col-span-1 border-b-2">
                            <h1 class="underline font-bold text-uppercase font-serif">Workers Quarters</h1>
                            <p class="font-mono">{{$agency->workers_quarters}}</p>
                        </div>

                         <div class="col-span-1 border-b-2">
                            <h1 class="underline font-bold text-uppercase font-serif">Garage</h1>
                            <p class="font-mono">{{$agency->garage}}</p>
                        </div>

                         <div class="col-span-1 border-b-2">
                            <h1 class="underline font-bold text-uppercase font-serif">Guest House</h1>
                            <p class="font-mono">{{$agency->guest_house}}</p>
                        </div>

                         <div class="col-span-1 border-b-2">
                            <h1 class="underline font-bold text-uppercase font-serif">Swimming pool</h1>
                            <p class="font-mono">{{$agency->swimming_pool}}</p>
                        </div>

                         <div class="col-span-1 border-b-2">
                            <h1 class="underline font-bold text-uppercase font-serif">Layout of office space</h1>
                            <p class="font-mono">{{$agency->layout_of_office_space}}</p>
                        </div>

                         <div class="col-span-1 border-b-2">
                            <h1 class="underline font-bold text-uppercase font-serif">Parking</h1>
                            <p class="font-mono">{{$agency->parking}}</p>
                        </div>

                         <div class="col-span-1 border-b-2">
                            <h1 class="underline font-bold text-uppercase font-serif">Pets</h1>
                            <p class="font-mono">{{$agency->pets}}</p>
                        </div>

                         <div class="col-span-1 border-b-2">
                            <h1 class="underline font-bold text-uppercase font-serif">Electricity</h1>
                            <p class="font-mono">{{$agency->electricity}}</p>
                        </div>

                         <div class="col-span-1 border-b-2">
                            <h1 class="underline font-bold text-uppercase font-serif">Water</h1>
                            <p class="font-mono">{{$agency->water}}</p>
                        </div>

                         <div class="col-span-1 border-b-2">
                            <h1 class="underline font-bold text-uppercase font-serif">Surroundings</h1>
                            <p class="font-mono">{{$agency->surroundings}}</p>
                        </div>

                         <div class="col-span-1 border-b-2">
                            <h1 class="underline font-bold text-uppercase font-serif">Recreational Facilities</h1>
                            <p class="font-mono">{{$agency->recreational_facilities}}</p>
                        </div>

                         <div class="col-span-1 border-b-2">
                            <h1 class="underline font-bold text-uppercase font-serif">Shopping</h1>
                            <p class="font-mono">{{$agency->shopping}}</p>
                        </div>

                         <div class="col-span-1 border-b-2">
                            <h1 class="underline font-bold text-uppercase font-serif">Schools</h1>
                            <p class="font-mono">{{$agency->schools}}</p>
                        </div>

                         <div class="col-span-1 border-b-2">
                            <h1 class="underline font-bold text-uppercase font-serif">nearby offices</h1>
                            <p class="font-mono">{{$agency->nearby_offices}}</p>
                        </div>

                         <div class="col-span-1 border-b-2">
                            <h1 class="underline font-bold text-uppercase font-serif">transport</h1>
                            <p class="font-mono">{{$agency->transport}}</p>
                        </div>

                         <div class="col-span-1 border-b-2">
                            <h1 class="underline font-bold text-uppercase font-serif">Rent Price</h1>
                            <p class="font-mono">K{{$agency->rent_price_k}}</p>
                             <p class="font-mono">${{$agency->rent_price_usd}}</p>
                        </div>

                         <div class="col-span-1 border-b-2">
                            <h1 class="underline font-bold text-uppercase font-serif">Sale PRice Market Value</h1>
                            <p class="font-mono">K{{$agency->sale_price_market_value_k}}</p>
                             <p class="font-mono">${{$agency->sale_price_market_value_usd}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
