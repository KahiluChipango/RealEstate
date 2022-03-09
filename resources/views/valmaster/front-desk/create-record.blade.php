
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

                            <form method="POST" action="{{ route('valmaster.front-desk.store') }}">
                            @csrf

                            <!-- Name -->
{{--                                this section for client details--}}



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

                                          <!-- Job Number -->
                 {{--                         <div>
                                              <x-label for="job_no"
                                                       :value="__('Job Number')" />

                                              <x-input id="job_no"
                                                       class="block mt-1 w-full"
                                                       type="number"
                                                       name="job_no"
                                                       :value="old('job_no')" required autofocus />
                                          </div>
                                     --}}     <!-- Client Name -->
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
                                              <x-label for="contact_number"
                                                       :value="__('Contact Number')" />

                                              <x-input id="contact_number"
                                                       class="block mt-1 w-full"
                                                       type="text"
                                                       name="contact_number"
                                                       :value="old('client_contact')" required autofocus />
                                          </div>

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
                                      </div>


                                      <div class="grid grid-cols-3 gap-4 pt-4">
                                          <!-- Email Address -->
                                          <div>
                                              <x-label for="client_email"
                                                       :value="__('Client Email')" />

                                              <x-input id="client_email"
                                                       class="block mt-1 w-full"
                                                       type="email"
                                                       name="client_email"
                                                       :value="old('client_email')" required />
                                          </div>


                                          <!-- Property Address -->
                                          <div class="col-span-2 ">
                                              <x-label for="property_address"
                                                       :value="__('Property Address')" />

                                              <x-input id="pname"
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
                                                  <option value="1">Paid</option>
                                                  <option value="0">Not Paid</option>
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


                                <div class="pt-6">
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
                                    <div class="grid grid-cols-3 gap-4">

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
