
<x-app-layout>
    <x-slot name="header">
        <x-nav-links.front-desk></x-nav-links.front-desk>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-slate-200 border-b border-gray-200 ">




                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />

                            <form method="POST" action="{{ route('valmaster.front-desk.update', $client->id) }}">
                            @method('PATCH')
                            @csrf

                            <!-- Name -->
                            {{--this section for client details--}}



                                  <div class="pt-6">
                                      <h1 class="font-semibold text-lg text-gray-800 leading-tight">Client Details</h1>
                                      <div class="grid grid-cols-3 gap-4 ">

                                          <!-- Select Branch -->
                                          <div>
                                              <x-label for="branch"
                                                       :value="__('Select Branch')" />
                                              <select name="branch"
                                                      class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                      type="text"
                                                      name="branch">
                                                  <option value="LSK" {{$client->branch == "LSK" ? 'selected': ''}}>Lusaka</option>
                                                  <option value="NDL" {{$client->branch == "NDL" ? 'selected': ''}}>Ndola</option>
                                                  <option value="KT" {{$client->branch == "KT" ? 'selected': ''}}>Kitwe </option>
                                                  <option value="HAR" {{$client->branch == "HAR" ? 'selected': ''}}>Harare</option>
                                              </select>
                                          </div>


                                            <!-- Client Name -->
                                          <div>
                                              <x-label for="client_name"
                                                       :value="__('Client Name')" />

                                              <x-input id="client_name"
                                                       class="block mt-1 w-full"
                                                       type="text"
                                                       name="client_name"
                                                       value="{{$client->client_name}}" required autofocus />
                                          </div>

                                          <!-- Contact Number -->
                                          <div>
                                              <x-label for="client_number"
                                                       :value="__('Client Number')" />

                                              <x-input id="client_number"
                                                       class="block mt-1 w-full"
                                                       type="text"
                                                       name="client_number"
                                                       value="{{$client->client_number}}" required autofocus />
                                          </div>

                                          <!-- Email Address -->
                                          <div>
                                              <x-label for="client_email"
                                                       :value="__('Client Email')" />

                                              <x-input id="client_email"
                                                       class="block mt-1 w-full"
                                                       type="email"
                                                       name="client_email"
                                                       value="{{$client->client_email}}" required />
                                          </div>

                                      </div>

                                  </div>

                                {{-- Contact Person Details--}}

                                <div class="pt-8">
                                    <h1 class="font-semibold text-lg text-gray-800 leading-tight">Contact Person Details</h1>
                                      <div class="grid grid-cols-3 gap-4">

                                          <!-- Contact Person -->
                                          <div>
                                              <x-label for="contact_person"
                                                       :value="__('Contact Person')" />

                                              <x-input id="contact_person"
                                                       class="block mt-1 w-full"
                                                       type="text"
                                                       name="contact_person"
                                                       value="{{$client->contact_person}}" required autofocus />
                                          </div>

                                          <!-- Contact Person Number -->
                                          <div>
                                              <x-label for="contact_person_number"
                                                       :value="__('Contact Person Number')" />

                                              <x-input id="contact_person_number"
                                                       class="block mt-1 w-full"
                                                       type="text"
                                                       name="contact_person_number"
                                                       value="{{$client->contact_person_number}}" required autofocus />
                                          </div>


                                          <!-- Property Address -->
                                          <div class="col-span-2 ">
                                              <x-label for="property_address"
                                                       :value="__('Property Address')" />

                                              <x-input id="pnproperty_addressame"
                                                       class="block mt-1 w-full"
                                                       type="text"
                                                       name="property_address"
                                                       value="{{$client->property_address}}" required autofocus />
                                          </div>

                                          <!-- Fee -->
                                          <div>
                                              <x-label for="fee"
                                                       :value="__('Fee')" />

                                              <x-input id="fee"
                                                       class="block mt-1 w-full"
                                                       type="number"
                                                       name="fee"
                                                       value="{{$client->fee}}" required autofocus />
                                          </div>

                                          <!--Fee Status  -->
                                          <div>
                                              <x-label for="fee_status"
                                                       :value="__('Fee Status')" />

                                              <select name="fee_status"
                                                      class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                      type="text"
                                                      name="fee_status">
                                                  <option value="1" {{$client->fee_status == "1" ? 'selected': ''}}>Paid</option>
                                                  <option value="0" {{$client->fee_status == "0" ? 'selected': ''}}>Not Paid</option>
                                              </select>
                                          </div>


                                          <!--Report Status  -->
                                          <div>
                                              <x-label for="report_status"
                                                       :value="__('Report Status')" />

                                              <select name="report_status"
                                                      class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                      type="text"
                                                      name="report_status">
                                                  <option value="Work In Progress" {{$client->report_status == "Work In Progress" ? 'selected': ''}}>Work In Progress</option>
                                                  <option value="Inspected/report Drafting" {{$client->report_status == "Inspected/report Drafting" ? 'selected': ''}}>Inspected/report Drafting</option>
                                                  <option value="Delivered" {{$client->report_status == "Delivered" ? 'selected': ''}}>Delivered</option>


                                              </select>
                                          </div>


                                          <!--FeedBack Status  -->
                                          <div>
                                              <x-label for="feedback_status"
                                                       :value="__('FeedBack Status')" />

                                              <select name="feedback_status"
                                                      class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                      type="text"
                                                      name="feedback_status">
                                                  <option value="Customer Happy" {{$client->feedback_status == "Customer Happy" ? 'selected': ''}}>Customer Happy</option>
                                                  <option value="Customer Unhappy" {{$client->feedback_status == "Customer Unhappy" ? 'selected': ''}}>Customer Unhappy</option>
                                              </select>
                                          </div>


                                      </div>

                                  </div>

                                {{--this is a users section--}}
                                <div class="pt-8">
                                    <h1 class="font-semibold text-lg text-gray-800 leading-tight">User</h1>
                                    <div class="grid grid-cols-3 gap-4">

                                        {{-- Select Option User Type--}}

                                        <div>
                                            <x-label for="users_id" value="{{ __('Assigned To:') }} "/>

                                            <select id="users_id"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="users_id">
                                                @foreach($users as $user)
                                                    <option value="{{$user->id}}"{{$client->users_id == "$user->id" ? 'selected': ''}}> {{ $user->name."(".$user->email.")"}}</option>
                                                @endforeach
                                            </select>

                                        </div>


                                        <!-- Type of Property -->
                                        <div>
                                            <x-label for="type_of_property"
                                                     :value="__('Type of Property')" />
                                            <select id="type_of_property"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="type_of_property">
                                                <option value="residential" {{$client->type_of_property == "residential" ? 'selected': ''}}>residential</option>
                                                <option value="Commercial" {{$client->type_of_property == "Commercial" ? 'selected': ''}}>Commercial</option>
                                                <option value="Agriculture" {{$client->type_of_property == "Agriculture" ? 'selected': ''}}>Agriculture</option>
                                                <option value="Industrial" {{$client->type_of_property == "Industrial" ? 'selected': ''}}>Industrial</option>
                                                <option value="Bare Land" {{$client->type_of_property == "Bare Land" ? 'selected': ''}}>Bare Land</option>

                                            </select>
                                        </div>

                                        <!-- Market Value -->
                                        <div>
                                            <x-label for="market_value"
                                                     :value="__('Market Value')" />

                                            <x-input id="market_value"
                                                     class="block mt-1 w-full"
                                                     type="number"
                                                     name="market_value"
                                                     value="{{$client->market_value}}" required autofocus />
                                        </div>

                                        <!--Purposer  -->
                                        <div>
                                            <x-label for="purpose"
                                                     :value="__('Purpose')" />

                                            <select id="purpose"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="purpose">
                                                <option value="Sale" {{$client->purpose == "Sale" ? 'selected': ''}}>Sale</option>
                                                <option value="Collateral" {{$client->purpose == "Collateral" ? 'selected': ''}}>Collateral</option>
                                                <option value="Insurance" {{$client->purpose == "Insurance" ? 'selected': ''}}>Insurance</option>
                                                <option value="Rental" {{$client->purpose == "Rental" ? 'selected': ''}}>Rental</option>
                                                <option value="Accounting" {{$client->purpose == "Accounting" ? 'selected': ''}}>Accounting</option>

                                            </select>
                                        </div>

                                        <!-- Property Description -->
                                        <div class="col-span-2 ">
                                            <x-label for="property_description"
                                                     :value="__('Property Description')" />

                                            <x-input id="property_description"
                                                     class="block mt-1 w-full"
                                                     type="text"
                                                     name="property_description"
                                                     value="{{$client->property_description}}" required autofocus />

                                        </div>
                                    </div>
                                </div>



{{--this is a date and Time Section        --}}

                                <div class="pt-6">
                                    <h3 class="font-semibold text-lg text-gray-800 leading-tight">Date and Time</h3>
                                    <div class="grid grid-cols-5 gap-4">

                                        <!-- Report Due Date-->
                                        <div>
                                            <x-label for="report_due_date" :value="__('Report Due Date')" />

                                            <x-input
                                                id="report_due_date"
                                                class="block mt-1 w-full"
                                                type="date"
                                                name="report_due_date"
                                                value="{{$client->report_due_date}}" required />
                                        </div>

                                        <!-- Inspection Due -->
                                        <div>
                                            <x-label for="inspection_due" :value="__('Inspection Due')" />

                                            <x-input
                                                id="inspection_due"
                                                class="block mt-1 w-full"
                                                type="date"
                                                name="inspection_due"
                                                value="{{$client->inspection_due}}" required />
                                        </div>

                                        <!-- Days Taken To Complete  -->
                                        <div>
                                            <x-label for="days_taken_to_complete" :value="__('Day Taken To Complete')" />

                                            <x-input
                                                id="days_taken_to_complete"
                                                class="block mt-1 w-full"
                                                type="number"
                                                name="days_taken_to_complete"
                                                value="{{$client->days_taken_to_complete}}" required />
                                        </div>

                                        <!-- Fee Due Date -->
                                        <div>
                                            <x-label for="fee_due_date"
                                                     :value="__('Fee Due Date')" />

                                            <x-input
                                                id="fee_due_date"
                                                class="block mt-1 w-full"
                                                type="date"
                                                name="fee_due_date"
                                                value="{{$client->fee_due_date}}" required />
                                        </div>


                                         <!-- Valuation Time -->
                                        <div>
                                            <x-label for="valuation_time"
                                                     :value="__('Valuation Time')" />

                                            <x-input
                                                id="valuation_time"
                                                class="block mt-1 w-full"
                                                type="time"
                                                name="valuation_time"
                                                value="{{$client->valuation_time}}"/>
                                        </div>


                                        <!-- Date of Delivery  -->
                                        <div>
                                            <x-label for="date_of_delivery"
                                                     :value="__('Date of Delivery')" />

                                            <x-input
                                                id="date_of_delivery"
                                                class="block mt-1 w-full"
                                                type="date"
                                                name="date_of_delivery"
                                                value="{{$client->date_of_delivery}}" required />
                                        </div>

                                        <!-- Date Of Receipt of Delivery  -->
                                        <div>
                                            <x-label for="date_of_receipt_of_instruction"
                                                     :value="__('Date of Receipt of Instruction')" />

                                            <x-input
                                                id="date_of_receipt_of_instruction"
                                                class="block mt-1 w-full"
                                                type="date"
                                                name="date_of_receipt_of_instruction"
                                                value="{{$client->date_of_receipt_of_instruction}}" required />
                                        </div>


                                    </div>


                                </div>

                                <!-- Add Button-->
                                <div class="flex items-center justify-end mt-4">

                                    <x-button class="cursor-pointer ml-4">
                                        {{ __('SAVE') }}
                                    </x-button>
                                </div>
                            </form>



                </div>
            </div>
        </div>
    </div>
</x-app-layout>
