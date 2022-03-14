<x-app-layout>
    <x-slot name="header" >
               <x-nav-links.front-desk></x-nav-links.front-desk>
    </x-slot>


    <div class="flex flex-col pt-4">
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
                                    <x-table.column>{{$client->fee}}</x-table.column>

                                    <x-table.column>
                                        @if($client->fee_status == 1)
                                                        {{'Paid'}}
                                        @elseif($client->fee_status == 0)
                                                        {{'Not Paid'}}
                                        @endif
                                    </x-table.column>

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

                                </tr>
                                @endforeach

                        </x-table.table>


                </div>
            </div>
        </div>
    </div>

</x-app-layout>
