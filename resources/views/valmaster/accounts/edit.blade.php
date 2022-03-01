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


                        <div class="float-start"> <h2 > ID: {{$clients->branch}}{{$clients->id}}</h2> </div>
                        <div class="float-end"><h2 >
                                Assiened to:
                                {{--@if ($clients->users_id) {{ $clients->users->name}} @endif--}}
                                {{ $clients->users->name}}


                            </h2></div>

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
                                @if ($clients->fee_status == 1) {{'Paid'}}
                                @elseif ($clients->fee_status == 0) {{'Not Paid'}}
                                @endif

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

                                            <x-input id="fee" class="block mt-1 w-full" type="text" name="fee" value="{{ $clients->fee }}" required autofocus />
                                        </div>

                                        <!-- Email Address -->
                                        <div class="mt-4">
                                            <x-label for="fee_status" :value="__('Fee Status')" />

                                            <select name="fee_status"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="number"
                                                    name="fee_status">
                                                @if ($clients->fee_status == 1)
                                                    <option value="1">Paid</option>
                                                    <option value="0">Not Paid</option>
                                                @elseif ($clients->fee_status == 0)
                                                    <option value="0">Not Paid</option>
                                                    <option value="1">Paid</option>
                                                @endif


                                            </select>
                                        </div>
                                        <!-- Email Address -->
                                        <div class="mt-4">
                                            <x-label for="report_status" :value="__('Report Status')" />

                                            <select name="report_status"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="report_status">
                                                @isset($clients->report_status) {{ $clients->report_status }}

                                                <option value="Work In Progress">Work In Progress</option>
                                                <option value="Inspected/report Drafting">Inspected/report Drafting</option>
                                                <option value="Delivered">Delivered</option>
                                                @endisset


                                            </select>
                                        </div>
                                        <!-- Email Address -->
                                        <div class="mt-4">
                                            <x-label for="feedback_status" :value="__('FeedBack Status')" />

                                            <select name="feedback_status"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="feedback_status">
                                                @isset($clients->feedback_status) {{ $clients->feedback_status }}
                                                <option value="Customer Happy">Customer Happy</option>
                                                <option value="Customer Unhappy">Customer Unhappy</option>
                                                @endisset
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






{{--

                         <div class="mt-4">
                            @foreach($roles as $role)
                                <div class="form-check">
                                    <label class="form-check-label" for="{{$role->name}}">
                                        {{ $role->name }}
                                    </label>


                                    <x-input class="form-check-input" name="roles[]"
                                             type="radio"
                                             value="{{$role->id}}"
                                             id="{{$role->name}}"
                                             @isset($user) @if(in_array($role->id, $user->roles->pluck('id')->toArray())) checked @endif @endisset
                                     />

                                </div>

                            @endforeach
                        </div>
                        <div class="mt-4">
                            @foreach($roles as $role)
                                <div class="form-check">
                                    <input class="form-check-input" name="roles[]"
                                           type="checkbox" value="{{$role->id}}" id="{{$role->name}}"
                                           @isset($user) @if(in_array($role->id, $user->roles->pluck('id')->toArray())) checked @endif @endisset>
                                    <label class="form-check-label" for="{{$role->name}}">
                                        {{ $role->name }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
--}}






                </div>
            </div>
        </div>
    </div>
</x-app-layout>
