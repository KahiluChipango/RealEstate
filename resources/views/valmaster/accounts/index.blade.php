<x-app-layout>
    <x-slot name="header">

        <x-nav-links.accounts></x-nav-links.accounts>
    </x-slot>

    <div class="py-12">
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
                                   @if($client->fee_status == 1)
                                        <span class="px-2 inline-flex  leading-5 rounded-full bg-green-100 text-green-800"> Paid </span>
                                    @elseif($client->fee_status == 0)
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


                                    {{--Delete Button--}}
                                   {{-- <button type="submit"
                                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-500/75 hover:bg-red-500/100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                            onclick="event.preventDefault();
                                                document.getElementById('delete-user-form-{{$user->id}}').submit()">
                                        DELETE
                                    </button>

                                    <form id="delete-user-form-{{ $user->id }}" action="{{ route('valmaster.super-admin.edit', $user->id) }}" method="POST" style="display: none">
                                        @csrf
                                        @method("")
                                    </form>--}}
                                </x-table.column>

                                <x-table.column>
                                    @if($client->fee_status == 1)
                                    {{--Receipt Button--}}
                                        <a class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-lime-600 hover:bg-lime-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                           href="{{ route('valmaster.accounts.send.receipt') }}"
                                         >
                                            Receipt
                                        </a>
                                    @elseif($client->fee_status == 0)
                                        {{--invoice Button--}}
                                        <a class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-teal-600 hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                           href="{{ route('valmaster.accounts.send.inv') }}"
                                           role="button">
                                            Invoice
                                        </a>
                                    @endif
                                </x-table.column>


                            </tr>
                        @endforeach


                    </x-table.table>

                   {{-- {{ $users->links() }}--}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
