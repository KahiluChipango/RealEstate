
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">




                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />

                            <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- Name -->
{{--                                this section for client details--}}


                              <div>
                                  <h1>client Details</h1>
                                  <div class="grid grid-cols-3 gap-4">
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


                                  <div class="grid grid-cols-3 gap-4">
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




                                <div>
                                    <h1>User</h1>
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





                                <div>
                                    <x-label for="name" :value="__('Client Name')" />

                                    <x-input id="name" class="block mt-1 w-full" placeholder="Search for anything... "type="text" name="name" :value="old('name')" required autofocus />
                                </div>






                                <div class="flex items-center justify-end mt-4">
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                        {{ __('Already registered?') }}
                                    </a>

                                    <x-button class="ml-4">
                                        {{ __('Register') }}
                                    </x-button>
                                </div>
                            </form>



                </div>
            </div>
        </div>
    </div>
</x-app-layout>
