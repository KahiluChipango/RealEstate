<x-app-layout>
    <x-slot name="header" >
               <x-nav-links.front-desk></x-nav-links.front-desk>
    </x-slot>




    <div class="flex flex-col pt-4">
        <div>
            <form action="{{route('valmaster.front-desk.index')}}">
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
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4 bg-lim" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </form>

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
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class=" divide-y divide-dashed shadow overflow-hidden border border-indigo-400 sm:rounded-lg ">


                <x-table.table>
                            <x-slot name="header">
                                <x-table.header>#</x-table.header>
                                <x-table.header>Job #</x-table.header>
                                <x-table.header>Client Name</x-table.header>
                                <x-table.header>Client Number</x-table.header>
                                <x-table.header>Client Email</x-table.header>
                                <x-table.header>Contact Person</x-table.header>
                                <x-table.header>C/P Number</x-table.header>
                                <x-table.header>Property Address</x-table.header>
                                <x-table.header>Fee</x-table.header>
                                <x-table.header>Fee Status</x-table.header>
                                <x-table.header>Report Status</x-table.header>
                                <x-table.header>FeedBack Status</x-table.header>
                                <x-table.header>Assigned To</x-table.header>
                                <x-table.header>Type of Property</x-table.header>
                                <x-table.header>Market Value</x-table.header>
                                <x-table.header>Purpose</x-table.header>
                                <x-table.header>Property Description</x-table.header>
                                <x-table.header>Report Due Date</x-table.header>
                                <x-table.header>Inspection Due</x-table.header>
                                <x-table.header>Valuation Time</x-table.header>
                                <x-table.header>Days Taken to Complete</x-table.header>
                                <x-table.header>Fee Due Date</x-table.header>
                                <x-table.header>Date of Delivery</x-table.header>
                                <x-table.header>Date of Receipt of Instruction</x-table.header>
                                <x-table.header>Action</x-table.header>
                            </x-slot>

                                <?php $i = 0?>
                                @foreach($clients as $client)
                                <tr>

                                    <x-table.column>{{++$i}}</x-table.column>
                                    <x-table.column>{{ $client->branch }}{{$client->id}}</x-table.column>
                                    <x-table.column>{{$client->client_name}}</x-table.column>
                                    <x-table.column>{{$client->client_number}}</x-table.column>
                                    <x-table.column>{{$client->client_email}}</x-table.column>
                                    <x-table.column>{{$client->contact_person}}</x-table.column>
                                    <x-table.column>{{$client->contact_person_number}}</x-table.column>
                                    <x-table.column>{{$client->property_address}}</x-table.column>
                                    <x-table.column>K{{$client->fee}}</x-table.column>
                                    <x-table.column>{{$client->fee_status}}</x-table.column>
                                    <x-table.column>{{$client->report_status}}</x-table.column>
                                    <x-table.column>{{$client->feedback_status}}</x-table.column>
                                    <x-table.column>{{$client->users->name}}</x-table.column>
                                    <x-table.column>{{$client->type_of_property}}</x-table.column>
                                    <x-table.column>{{$client->market_value}}</x-table.column>
                                    <x-table.column>{{$client->purpose}}</x-table.column>
                                    <x-table.column>{{$client->property_description}}</x-table.column>
                                    <x-table.column>{{$client->report_due_date}}</x-table.column>
                                    <x-table.column>{{$client->inspection_due}}</x-table.column>
                                    <x-table.column>{{$client->valuation_time}}</x-table.column>
                                    <x-table.column>{{$client->days_taken_to_complete}}</x-table.column>
                                    <x-table.column>{{$client->fee_due_date}}</x-table.column>
                                    <x-table.column>{{$client->date_of_delivery}}</x-table.column>
                                    <x-table.column>{{$client->date_of_receipt_of_instruction}}</x-table.column>
                                    <x-table.column>
                                        {{--Edit Button--}}
                                        <a class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                           href="{{ route('valmaster.front-desk.edit', $client->id) }}"
                                           role="button">
                                            Edit
                                        </a>

                                        {{--Delete Button--}}
                                        <button type="submit"
                                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-500/75 hover:bg-red-500/100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                                onclick="event.preventDefault();
                                                    document.getElementById('delete-user-form-{{$client->id}}').submit()">
                                            DELETE
                                        </button>

                                        <form id="delete-user-form-{{ $client->id }}" action="{{ route('valmaster.front-desk.destroy', $client->id) }}" method="POST" style="display: none">
                                            @csrf
                                            @method("DELETE")
                                        </form>
                                    </x-table.column>

                                </tr>
                                @endforeach

                        </x-table.table>


                    {{$clients->appends(['search' => request('search')])->links()}}
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
