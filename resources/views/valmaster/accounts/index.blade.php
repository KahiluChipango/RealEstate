<x-app-layout>
    <x-slot name="header">

        <x-nav-links.accounts></x-nav-links.accounts>
    </x-slot>

    <div class="py-12 bg-green-100">

        <form action="{{route('valmaster.accounts.index')}}">
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

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <x-table.table>
                        <x-slot name="header">
                            <x-table.header>Job #</x-table.header>
                            <x-table.header>Name</x-table.header>
                            <x-table.header>Fee</x-table.header>
                            <x-table.header>fee Due Date</x-table.header>
                            <x-table.header>Status</x-table.header>
                            <x-table.header>Actions</x-table.header>
                            <x-table.header>Send</x-table.header>
                        </x-slot>


                        @foreach( $clients as $client)
                            <tr>
                                <x-table.column>{{$client->branch}}{{$client->id}}</x-table.column>
                                <x-table.column>{{$client->client_name}}</x-table.column>
                                <x-table.column>{{$client->fee}}</x-table.column>
                                <x-table.column>{{$client->fee_due_date}}</x-table.column>
                                <x-table.column>
                                   @if($client->fee_status == 'Paid')
                                        <span class="px-2 inline-flex  leading-5 rounded-full bg-green-100 text-green-800"> Paid </span>
                                    @elseif($client->fee_status == 'Not Paid')
                                        <span class="px-2 inline-flex  leading-5 rounded-full bg-red-500/75 "> Not Paid </span>
                                    @endif
                                </x-table.column>
                                <x-table.column>
                                    {{--Edit Button--}}
                                    <a class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                       href="{{ route('valmaster.accounts.edit', $client->id) }}"
                                       role="button">
                                        Edit
                                    </a>
                                </x-table.column>

                                <x-table.column>
                                    @if($client->fee_status == 'Paid')
                                    {{--Receipt Button--}}
                                        <a class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-lime-600 hover:bg-lime-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                           href="{{ route('valmaster.accounts.send.receipt') }}">
                                            Receipt
                                        </a>
                                    @elseif($client->fee_status == 'Not Paid')
                                        {{--invoice Button--}}
                                        <a class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-teal-600 hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                           href="{{ route('valmaster.accounts.show', $client->id) }}"
                                           role="button">
                                            Invoice
                                        </a>
                                    @endif
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
