
<x-app-layout>
    <x-slot name="header">
        <x-nav-links.front-desk></x-nav-links.front-desk>
    </x-slot>

    @if(session()->has('Add'))
        <div class="bg-blue-100 rounded-lg xl:w-96 float-end text-base text-blue-700 inline-flex items-center w-full mb-2" role="alert">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="info-circle" class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="currentColor" d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z"></path>
            </svg>
            {{ session('Add') }}
        </div>
    @endif
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-slate-200 border-b border-gray-200 ">




                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />

                            <form method="POST" action="{{ route('valmaster.front-desk.store') }}">
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
                                                  <option value="LSK">Lusaka</option>
                                                  <option value="NDL">Ndola</option>
                                                  <option value="KT">Kitwe </option>
                                                  <option value="HAR">Harare</option>
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
                                                       :value="old('client_name')" required autofocus />
                                          </div>

                                          <!-- Contact Number -->
                                          <div>
                                              <x-label for="client_number"
                                                       :value="__('Client Number')" />

                                              <x-input id="client_number"
                                                       class="block mt-1 w-full"
                                                       type="tel"
                                                       name="client_number"
                                                       placeholder="260970******"
                                                       maxlength="12"
                                                       :value="old('client_number')" required autofocus />
                                          </div>

                                          <!-- Email Address -->
                                          <div>
                                              <x-label for="client_email"
                                                       :value="__('Client Email')" />

                                              <x-input id="client_email"
                                                       class="block mt-1 w-full"
                                                       type="email"
                                                       name="client_email"
                                                       placeholder="Example@mail.com"
                                                       :value="old('client_email')" required />
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
                                                       :value="old('contact_person')" required autofocus />
                                          </div>

                                          <!-- Contact Person Number -->
                                          <div>
                                              <x-label for="contact_person_number"
                                                       :value="__('Contact Person Number')" />

                                              <x-input id="contact_person_number"
                                                       class="block mt-1 w-full"
                                                       type="tel"
                                                       name="contact_person_number"
                                                       placeholder="260970******"
                                                       maxlength="12"
                                                       :value="old('contact_person-number')" required autofocus />
                                          </div>


                                          <!-- Property Address -->
                                          <div class="col-span-2 ">
                                              <x-label for="property_address"
                                                       :value="__('Property Address')" />

                                              <x-input id="property_address"
                                                       class="block mt-1 w-full"
                                                       type="text"
                                                       name="property_address"
                                                       :value="old('property_address')" required autofocus />
                                          </div>

                                          <!-- Fee -->
                                          <div>
                                              <x-label for="fee"
                                                       :value="__('Fee')" />

                                              <x-input id="fee"
                                                       class="block mt-1 w-full"
                                                       type="number"
                                                       name="fee"
                                                       :value="old('fee')" required autofocus />
                                          </div>

                                          <!--Fee Status  -->
                                          <div>
                                              <x-label for="fee_status"
                                                       :value="__('Fee Status')" />

                                              <select name="fee_status"
                                                      class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                      type="text"
                                                      name="fee_status">
                                                  <option value="Paid">Paid</option>
                                                  <option value="Not Paid">Not Paid</option>
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
                                                  <option value="Work In Progress">Work In Progress</option>
                                                  <option value="Inspected/report Drafting">Inspected/report Drafting</option>
                                                  <option value="Delivered">Delivered</option>


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
                                                  <option value="Customer Happy">Customer Happy</option>
                                                  <option value="Customer Unhappy">Customer Unhappy</option>
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

                                            <select name="users_id"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="assign">
                                                @foreach($users as $user)
                                                    <option value="{{$user->id}}"> {{ $user->name."(".$user->email.")"}}</option>

                                                @endforeach
                                            </select>

                                        </div>


                                        <!-- Type of Property -->
                                        <div>
                                            <x-label for="type_of_property"
                                                     :value="__('Type of Property')" />
                                            <select name="type_of_property"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="assign">
                                                <option value="residential">residential</option>
                                                <option value="Commercial">Commercial</option>
                                                <option value="Agriculture">Agriculture</option>
                                                <option value="Industrial">Industrial</option>
                                                <option value="Bare Land">Bare Land</option>

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
                                                     :value="old('market_value')" required autofocus />
                                        </div>

                                        <!--Purposer  -->
                                        <div>
                                            <x-label for="purpose"
                                                     :value="__('Purpose')" />

                                            <select name="purpose"
                                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                                                    type="text"
                                                    name="purpose">
                                                <option value="Sale">Sale</option>
                                                <option value="Collateral">Collateral</option>
                                                <option value="Insurance">Insurance</option>
                                                <option value="Rental">Rental</option>
                                                <option value="Accounting">Accounting</option>

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
                                                     :value="old('property_description')" required autofocus />

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
                                                :value="old('report_due_date')" required />
                                        </div>

                                        <!-- Inspection Due -->
                                        <div>
                                            <x-label for="inspection_due" :value="__('Inspection Due')" />

                                            <x-input
                                                id="inspection_due"
                                                class="block mt-1 w-full"
                                                type="date" name="inspection_due"
                                                :value="old('inspection_due')" required />
                                        </div>

                                        <!-- Days Taken To Complete  -->
                                        <div>
                                            <x-label for="days_taken_to_complete" :value="__('Day Taken To Complete')" />

                                            <x-input
                                                id="days_taken_to_complete"
                                                class="block mt-1 w-full"
                                                type="number"
                                                name="days_taken_to_complete"
                                                :value="old('days_taken_to_complete')" required />
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
                                                :value="old('fee_due_date')" required />
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
                                                :value="old('valuation_time')"/>
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
                                                :value="old('date_of_delivery')" required />
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
                                                :value="old('date_of_receipt_of_instruction')" required />
                                        </div>


                                    </div>


                                </div>

                                <!-- Add Button-->
                                <div class="flex items-center justify-end mt-4">

                                    <x-button class="cursor-pointer ml-4">
                                        {{ __('ADD') }}
                                    </x-button>
                                </div>
                            </form>



                </div>
            </div>
        </div>
    </div>
</x-app-layout>
