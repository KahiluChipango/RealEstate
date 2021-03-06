<x-app-layout>
    <x-slot name="header">

        <x-nav-links.accounts></x-nav-links.accounts>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">


                    <h1 class="text-2xl pb-3 font-semibold"> Client Details</h1>
                    <div>
                        <div class="float-start">
                            <h2>
                                ID: {{$clients->branch}}{{$clients->id}}
                            </h2>
                        </div>

                        <div class="float-end">
                            <h2 >
                                Assigned to:
                                {{ $clients->users->name}}
                            </h2>
                        </div>
                    </div>

                    <div class="pt-6">
                        <div class="grid grid-cols-3 gap-4">
                            <!-- Personal Details -->
                            <div >
                                <h1 class="font-semibold text-2xl text-gray-800 leading-tight underline underline-offset-1">Personal Details</h1>
                                <div class="pb-2"></div>
                              <h3 class="font-bold"> NAME: </h3>
                                {{ $clients->client_name }}

                                <div class="pb-2"></div>
                                <h3 class="font-bold"> Phone Number: </h3>
                                {{ $clients->contact_number }}

                                <div class="pb-2"></div>
                                <h3 class="font-bold"> Email: </h3>
                                {{ $clients->client_email }}

                                <div class="pb-2"></div>
                                <h3 class="font-bold"> Contact Person: </h3>
                                {{ $clients->contact_person }}
                            </div>

                            <!-- Personal Property Details  -->
                            <div >
                                <h1 class="font-semibold text-2xl text-gray-800 leading-tight underline underline-offset-1">Due Date Details</h1>
                                <div class="pb-2"></div>
                                <h3 class="font-bold"> Report Due Date: </h3>
                                {{ $clients->report_due_date }}

                                <div class="pb-2"></div>
                                <h3 class="font-bold"> Inspection Due Date: </h3>
                                {{ $clients->inspection_due }}

                                <div class="pb-2"></div>
                                <h3 class="font-bold"> Fee Due Date: </h3>
                                {{ $clients->fee_due_date }}
                            </div>

                            <div >
                                <h1 class="font-semibold text-2xl text-gray-800 leading-tight underline underline-offset-1">Date Details</h1>
                                <div class="pb-2"></div>
                                <h3 class="font-bold">Days Taken To Complete: </h3>
                                {{ $clients->days_taken_to_complete }}

                                <div class="pb-2"></div>
                                <h3 class="font-bold"> Date Of Delivery: </h3>
                                {{ $clients->date_of_delivery }}

                                <div class="pb-2"></div>
                                <h3 class="font-bold"> Date of Receipt of Instruction: </h3>
                                {{ $clients->date_of_receipt_of_instruction }}
                            </div>


                        </div>
                    </div>


                    <div class="grid grid-cols-3 gap-4 pt-4">
                        <div >
                            <h1 class="font-semibold text-2xl text-gray-800 leading-tight underline underline-offset-1">Property Details</h1>
                            <div class="pb-2"></div>
                            <h3 class="font-bold"> Property Address: </h3>
                            {{ $clients->property_address }}

                            <div class="pb-2"></div>
                            <h3 class="font-bold"> Type Of Property: </h3>
                            {{ $clients->type_of_property }}

                            <div class="pb-2"></div>
                            <h3 class="font-bold"> Market Value: </h3>
                            {{ $clients->market_value }}

                            <div class="pb-2"></div>
                            <h3 class="font-bold"> Property Description: </h3>
                            {{ $clients->property_description }}
                        </div>

                        {{--Status Details --}}
                        <div >
                            <h1 class="font-semibold text-2xl text-gray-800 leading-tight underline underline-offset-1">Property Details</h1>
                            <div class="pb-2"></div>
                            <h3 class="font-bold"> Fee: </h3>
                            {{ $clients->fee }}

                            <div class="pb-2"></div>
                            <h3 class="font-bold"> Fee Status: </h3>
                            {{$clients->fee_status}}

                            <div class="pb-2"></div>
                            <h3 class="font-bold"> Report Status: </h3>
                            {{ $clients->report_status }}

                            <div class="pb-2"></div>
                            <h3 class="font-bold"> FeedBack Status: </h3>
                            {{ $clients->feedback_status }}
                        </div>

                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                        <form method="POST" action="{{ route('valmaster.accounts.update', $clients->id) }}">
                            @method('PATCH')

                            @csrf
                                <div>
                                    <h1 class="font-semibold text-2xl text-gray-800 leading-tight underline underline-offset-1">Change Status Details</h1>
                                    <!-- fee status  -->
                                    <div>
                                        <x-label for="fee" :value="__('Fee')" />

                                        <x-input id="fee"
                                                 class="block mt-1 w-full"
                                                 type="text"
                                                 name="fee"
                                                 value="{{ $clients->fee }}" required autofocus />
                                    </div>

                                    <!-- Email Address -->
                                    <div class="mt-4">
                                        <x-label for="fee_status" :value="__('Fee Status')" />

                                        <select name="fee_status"
                                                class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                type="number"
                                                name="fee_status">
                                            <option value="Paid" {{$clients->fee_status == "Paid" ? 'selected': ''}}>Paid</option>
                                            <option value="Not Paid" {{$clients->fee_status == "Not Paid" ? 'selected': ''}}>Not Paid</option>
                                        </select>
                                    </div>
                                    <!-- Email Address -->
                                    <div class="mt-4">
                                        <x-label for="report_status" :value="__('Report Status')" />

                                        <select name="report_status"
                                                class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                type="text"
                                                name="report_status">

                                            <option value="Work In Progress" {{$clients->report_status == "Work In Progress" ? 'selected': ''}}>Work In Progress</option>
                                            <option value="Inspected/report Drafting" {{$clients->report_status == "Inspected/report Drafting" ? 'selected': ''}}>Inspected/report Drafting</option>
                                            <option value="Delivered" {{$clients->report_status == "Delivered" ? 'selected': ''}}>Delivered</option>


                                        </select>
                                    </div>
                                    <!-- Email Address -->
                                    <div class="mt-4">
                                        <x-label for="feedback_status" :value="__('FeedBack Status')" />

                                        <select name="feedback_status"
                                                class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                type="text"
                                                name="feedback_status">
                                            <option value="Customer Happy" {{$clients->feedback_status == "Customer Happy" ? 'selected': ''}}>Customer Happy</option>
                                            <option value="Customer Unhappy" {{$clients->feedback_status == "Customer Unhappy" ? 'selected': ''}}>Customer Unhappy</option>
                                        </select>
                                    </div>
                                </div>

                            <div class="flex items-center justify-end mt-4">

                                <x-button class="ml-4">
                                    {{ __(' Update') }}
                                </x-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
