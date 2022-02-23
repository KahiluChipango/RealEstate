
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

                            <form method="POST" action="{{ route('front-desk.store') }}">
                            @csrf

                            <!-- Name -->
{{--                                this section for client details--}}


                                  <div class="pt-6">
                                      <h1 class="font-semibold text-lg text-gray-800 leading-tight">Client Details</h1>
                                      <div class="grid grid-cols-3 gap-4 ">
                                          <div>
                                              <x-label for="name" :value="__('Client Name')" />

                                              <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                                          </div>

                                          <div>
                                              <x-label for="contact_number" :value="__('Contact Number')" />

                                              <x-input id="client_contact" class="block mt-1 w-full" type="number" name="client_contact" required autofocus />
                                          </div>

                                          <div>
                                              <x-label for="contact_person" :value="__('Contact Person')" />

                                              <x-input id="contact_person" class="block mt-1 w-full" type="text" name="contact_person" required autofocus />
                                          </div>
                                      </div>


                                      <div class="grid grid-cols-3 gap-4 pt-4">
                                          <!-- Email Address -->
                                          <div>
                                              <x-label for="client_email" :value="__('Client Email')" />

                                              <x-input id="cemail" class="block mt-1 w-full" type="email" name="client_email" :value="old('client_email')" required />
                                          </div>


                                          <div class="col-span-2 ">
                                              <x-label for="property_address" :value="__('Property Address')" />

                                              <x-input id="pname" class="block mt-1 w-full" type="text" name="property_address" :value="old('property_address')" required autofocus />
                                          </div>


                                          <div>
                                              <x-label for="fee" :value="__('Fee')" />

                                              <x-input id="fee" class="block mt-1 w-full" type="text" name="fee" :value="old('fee')" required autofocus />
                                          </div>

                                          <div>
                                              <x-label for="status" :value="__('Status')" />

                                              <x-input id="status" class="block mt-1 w-full" type="text" name="status" :value="old('status')" required autofocus />
                                          </div>


                                      </div>

                                  </div>

{{--this is a users section--}}


                                <div class="pt-6">
                                    <h1 class="font-semibold text-lg text-gray-800 leading-tight">User</h1>
                                    <div class="grid grid-cols-3 gap-4">
                                        <div>
                                            <x-label for="assign" :value="__('Assigned To:')" />

                                            <x-input id="assign" class="block mt-1 w-full" type="text" name="assign" :value="old('assign')" required autofocus />
                                        </div>

                                        <div>
                                            <x-label for="email" :value="__('Valuer Email')" />

                                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                                        </div>

                                        <div>
                                            <x-label for="property_type" :value="__('Type of Property')" />

                                            <x-input id="ptype" class="block mt-1 w-full" type="text" name="property_type" :value="old('property_type')" required autofocus />
                                        </div>

                                        <div>
                                            <x-label for="market_value" :value="__('Market Value')" />

                                            <x-input id="mvalue" class="block mt-1 w-full" type="number" name="market_value" required autofocus />
                                        </div>

                                        <div class="col-span-2 ">
                                            <x-label for="property_description" :value="__('Property Description')" />

                                            <x-input id="pdescription" class="block mt-1 w-full" type="text" name="property_description" :value="old('property_description')" required autofocus />
                                        </div>



                                    </div>


                                </div>



{{--this is a date and Time Section        --}}

                                <div class="pt-6">
                                    <h3 class="font-semibold text-lg text-gray-800 leading-tight">Date and Time</h3>
                                    <div class="grid grid-cols-3 gap-4">


                                        <div>
                                            <x-label for="report_due_date" :value="__('Report Due Date')" />

                                            <x-input id="rddate" class="block mt-1 w-full" type="date" name="report_due_date" :value="old('report_due_date')" required />
                                        </div>

                                        <div>
                                            <x-label for="inspection_due" :value="__('Inspection Due')" />

                                            <x-input id="idue" class="block mt-1 w-full" type="date" name="inspection_due" :value="old('inspection_due')" required />
                                        </div>

                                        <div>
                                            <x-label for="days_taken_to_complete" :value="__('Day Taken To Complete')" />

                                            <x-input id="dttcomplete" class="block mt-1 w-full" type="number" name="days_taken_to_complete" :value="old('days_taken_to_complete')" required />
                                        </div>

                                        <div>
                                            <x-label for="fee_due_date" :value="__('Fee Due Date')" />

                                            <x-input id="fddate" class="block mt-1 w-full" type="date" name="fee_due_date" :value="old('fee_due_date')" required />
                                        </div>

                                        <div>
                                            <x-label for="date_of_delivery" :value="__('Date of Delivery')" />

                                            <x-input id="dodelivery" class="block mt-1 w-full" type="date" name="date_of_delivery" :value="old('date_of_delivery')" required />
                                        </div>

                                        <div>
                                            <x-label for="date_of_receipt_of_instruction" :value="__('Date of Receipt of Instruction')" />

                                            <x-input id="doroinstruction" class="block mt-1 w-full" type="date" name="date_of_receipt_of_instruction" :value="old('date_of_receipt_of_instruction')" required />
                                        </div>


                                    </div>


                                </div>


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
