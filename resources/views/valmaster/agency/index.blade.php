<x-app-layout>
    <x-slot name="header">
        <x-nav-links.agency></x-nav-links.agency>
    </x-slot>

    <div class="flex flex-col pt-4">

        <div>
            <form action="{{route('valmaster.agency.index')}}">
                <div class="flex justify-center">
                    <div class="mb-3 xl:w-96">
                        <div class="input-group relative flex flex-wrap items-stretch w-full mb-4">
                            <input class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                   type="text"
                                   placeholder="Search"
                                   aria-label="Search"
                                   name="search"
                                   aria-describedby="button-addon2">
                            <button class="btn inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out flex items-center"
                                    type="submit"
                                    id="button-addon2">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </form>

            @if(session()->has('Add'))
                <div class="bg-blue-100 rounded-lg xl:w-96 float-end text-base text-blue-700 inline-flex items-center w-full mb-2" role="alert">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="info-circle" class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z"></path>
                    </svg>
                    {{ session('Add') }}
                </div>
            @endif
            @if(session()->has('Update'))
                <div class="bg-green-200 rounded-lg xl:w-96 float-end text-base text-green-700 inline-flex items-center w-full mb-2" role="alert">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle" class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
                    </svg>
                    {{ session('Update') }}
                </div>
            @endif

            @if(session()->has('delete'))

                    <div class="bg-red-200 rounded-lg xl:w-96 float-end text-base text-red-700 inline-flex items-center w-full mb-2" role="alert">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times-circle" class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path>
                        </svg>

                        {{ session('delete') }}
                    </div>
            @endif


        </div>

        <div class="max-w-full overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class=" divide-y divide-dashed shadow overflow-hidden border border-indigo-400 sm:rounded-lg ">
                    <x-table.table>
                        <x-slot name="header">
                            <x-table.header>#</x-table.header>
                            <x-table.header>Job #</x-table.header>
                            <x-table.header>Rent/Sale</x-table.header>
                            <x-table.header>Web Reference Number</x-table.header>
                            <x-table.header>Agent in Charge</x-table.header>
                            <x-table.header>Service Line</x-table.header>
                            <x-table.header>Date of Instruction</x-table.header>
                            <x-table.header>Client Name</x-table.header>
                            <x-table.header>Client Contact Number</x-table.header>
                            <x-table.header>Email</x-table.header>
                            <x-table.header>Property Address</x-table.header>
                            <x-table.header>Google Cordinates</x-table.header>
                            <x-table.header>Type of Property</x-table.header>
                            <x-table.header>Type of Building 1</x-table.header>
                            <x-table.header>Type of Building 2</x-table.header>
                            <x-table.header>Building Height</x-table.header>
                            <x-table.header>Number of Bedrooms</x-table.header>
                            <x-table.header>Size of Rooms</x-table.header>
                            <x-table.header>Number of Bathrooms</x-table.header>
                            <x-table.header>Master Self Contained</x-table.header>
                            <x-table.header>Furnished</x-table.header>
                            <x-table.header>Quality of Finishes</x-table.header>
                            <x-table.header>Land Size</x-table.header>
                            <x-table.header>GUEST HOUSE</x-table.header>
                            <x-table.header>Swimming Pool</x-table.header>
                            <x-table.header>Pool House/club</x-table.header>
                            <x-table.header>Gym</x-table.header>
                            <x-table.header>Guard House</x-table.header>
                            <x-table.header>Workers Quarters</x-table.header>
                            <x-table.header>Garage</x-table.header>
                            <x-table.header>Layout of Office Space</x-table.header>
                            <x-table.header>Parking</x-table.header>
                            <x-table.header>Pets</x-table.header>
                            <x-table.header>Electricity</x-table.header>
                            <x-table.header>Water</x-table.header>
                            <x-table.header>Surroundings</x-table.header>
                            <x-table.header>Recreational Facilities</x-table.header>
                            <x-table.header>Shopping</x-table.header>
                            <x-table.header>Schools</x-table.header>
                            <x-table.header>Nearby Offices</x-table.header>
                            <x-table.header>Transport</x-table.header>
                            <x-table.header>Rent Price K</x-table.header>
                            <x-table.header>Rent Price $</x-table.header>
                            <x-table.header>Sale Price/Market Value K</x-table.header>
                            <x-table.header>Sale Price/Market Value $</x-table.header>
                            <x-table.header>Action</x-table.header>
                        </x-slot>
                        <?php $i = 0?>
                        @foreach($agencies as $agency)
                             <tr>
                                <x-table.column>{{++$i}}</x-table.column>
                                <x-table.column>{{$agency->job_number}}</x-table.column>
                                <x-table.column>{{$agency->rent_sale}}</x-table.column>
                                <x-table.column>{{$agency->web}}</x-table.column>
                                <x-table.column>{{$agency->agent_in_charge}}</x-table.column>
                                <x-table.column>{{$agency->service_line}}</x-table.column>
                                <x-table.column>{{$agency->date_of_instruction}}</x-table.column>
                                <x-table.column>{{$agency->client_name}}</x-table.column>
                                <x-table.column>{{$agency->client_contact_number}}</x-table.column>
                                <x-table.column>{{$agency->email}}</x-table.column>
                                <x-table.column>{{$agency->property_address}}</x-table.column>
                                <x-table.column>{{$agency->google_cordinates}}</x-table.column>
                                <x-table.column>{{$agency->type_of_property}}</x-table.column>
                                <x-table.column>{{$agency->type_of_building}}</x-table.column>
                                <x-table.column>{{$agency->type_of_building_2}}</x-table.column>
                                <x-table.column>{{$agency->building_height}}</x-table.column>
                                <x-table.column>{{$agency->number_of_bedrooms}}</x-table.column>
                                <x-table.column>{{$agency->size_of_rooms}}</x-table.column>
                                <x-table.column>{{$agency->number_of_bathrooms}}</x-table.column>
                                <x-table.column>{{$agency->master_self_contained}}</x-table.column>
                                <x-table.column>{{$agency->furnished}}</x-table.column>
                                <x-table.column>{{$agency->quality_of_finishes}}</x-table.column>
                                <x-table.column>{{$agency->land_size}}</x-table.column>
                                <x-table.column>{{$agency->guest_house}}</x-table.column>
                                <x-table.column>{{$agency->swimming_pool}}</x-table.column>
                                <x-table.column>{{$agency->pool_house_club}}</x-table.column>
                                <x-table.column>{{$agency->gym}}</x-table.column>
                                <x-table.column>{{$agency->guard_house}}</x-table.column>
                                <x-table.column>{{$agency->workers_quarters}}</x-table.column>
                                <x-table.column>{{$agency->garage}}</x-table.column>
                                <x-table.column>{{$agency->layout_of_office_space}}</x-table.column>
                                <x-table.column>{{$agency->parking}}</x-table.column>
                                <x-table.column>{{$agency->pets}}</x-table.column>
                                <x-table.column>{{$agency->electricity}}</x-table.column>
                                <x-table.column>{{$agency->water}}</x-table.column>
                                <x-table.column>{{$agency->surroundings}}</x-table.column>
                                <x-table.column>{{$agency->recreational_facilities}}</x-table.column>
                                <x-table.column>{{$agency->shopping}}</x-table.column>
                                <x-table.column>{{$agency->schools}}</x-table.column>
                                <x-table.column>{{$agency->nearby_offices}}</x-table.column>
                                <x-table.column>{{$agency->transport}}</x-table.column>
                                <x-table.column>K{{$agency->rent_price_k}}</x-table.column>
                                <x-table.column>${{$agency->rent_price_usd}}</x-table.column>
                                <x-table.column>K{{$agency->sale_price_market_value_k}}</x-table.column>
                                <x-table.column>${{$agency->sale_price_market_value_usd}}</x-table.column>
                                <x-table.column>
                                    {{--Edit Button--}}
                                    <a class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                       href="{{ route('valmaster.agency.edit', $agency->id) }}"
                                       role="button">
                                        Edit
                                    </a>

                                    {{--Delete Button--}}
                                    <button type="submit"
                                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-500/75 hover:bg-red-500/100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                            onclick="event.preventDefault();
                                                document.getElementById('delete-user-form-{{$agency->id}}').submit()">
                                        DELETE
                                    </button>

                                    <form id="delete-user-form-{{ $agency->id }}" action="{{ route('valmaster.agency.destroy', $agency->id) }}" method="POST" style="display: none">
                                        @csrf
                                        @method("DELETE")
                                    </form>
                                </x-table.column>
                            </tr>
                        @endforeach
                    </x-table.table>
                    {{$agencies->appends(['search' => request('search')])->links()}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
