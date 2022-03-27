<x-app-layout>
    <x-slot name="header">

        <x-nav-links.admin></x-nav-links.admin>
    </x-slot>
    <div class="row">
        <div class="col-12">
            <div class="float-end hidden space-x-3 sm:-my-px sm:ml-10 sm:flex">
                <a class="float-end inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-cyan-600 hover:bg-cyan-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                   href="{{ route('valmaster.admin.receipt.save-receipt',  $client->id) }}"
                   role="button">
                    Download
                </a>
                <a class="float-end inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-cyan-600 hover:bg-cyan-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                   href="{{ route('valmaster.admin.receipt.mail-receipt', $client->id) }}"
                   role="button">
                    Send Email
                </a>
             {{--   <a class="float-end inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-cyan-600 hover:bg-cyan-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                   href="{{ route('valmaster.accounts.incoice.send-sms', $client->id) }}"
                   role="button">
                    Send SMS
                </a>--}}


            </div>

            @if(session()->has('EmailReceipt'))
                <div class="bg-purple-100 rounded-lg xl:w-96 float-start text-base text-purple-700 inline-flex items-center w-full mb-2" role="alert">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-circle-right" class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm113.9 231L234.4 103.5c-9.4-9.4-24.6-9.4-33.9 0l-17 17c-9.4 9.4-9.4 24.6 0 33.9L285.1 256 183.5 357.6c-9.4 9.4-9.4 24.6 0 33.9l17 17c9.4 9.4 24.6 9.4 33.9 0L369.9 273c9.4-9.4 9.4-24.6 0-34z"></path>
                    </svg>
                    {{ session('EmailReceipt') }}
                </div>
            @endif
        </div>
    </div>


    <div class="py-4 bg-green-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">


                    <div class="grid grid-cols-3 gap-2 ">
                        <div class="items-end">
                            {{--Logo Here--}}
                            <img src="{{asset('logo/SG Logo.png')}}" alt="Image" loading="lazy" class=" h-16 w-auto sm:h-16">
                        </div>

                        <div class="col-span-2 text-left text-4xl font-bold font-serif">Sherwood Greene Properties Limited</div>

                        <div class="col-start-2 text-center text-2xl font-semibold font-serif text-red-400 opacity-75">RECEIPT</div>
                        <div class="text-right font-semibold text-xl underline underline-offset-1">
                            <h2>No. {{$client->branch}}{{$client->id}}</h2>
                        </div>
                        <div class="col-span-3 text-right text-xl font-bold ">{{ date('M - d, Y')}}</div>


                        <table class="min-w-full  col-span-3">
                            <thead class="border-b ">
                            <tr>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 font-bold text-right">
                                    Received From:
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 col-start-2 text-left">
                                    {{$client->client_name." (".$client->client_email.")"}}
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="bg-white border-b">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 text-right font-bold">
                                    In Respect of:
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap col-span-2">
                                    {{$client->purpose." of ".$client->type_of_property." Property at ".$client->property_address}}
                                </td>

                            </tr>
                            <tr class="bg-white border-b">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 text-right font-bold">
                                    Received By:
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{$user}}
                                </td>

                            </tr>
                            <tr class="bg-white border-b">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 font-bold text-xl">
                                    TOTAL
                                </td>

                                <td class="text-sm font-light px-6 py-4 whitespace-nowrap text-right font-bold text-lg">
                                    Amount
                                </td>

                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-left">
                                    K{{$client->fee}}
                                </td>
                            </tr>
                            </tbody>
                        </table>



                        <div class="pt-4">
                            <h1 class="text-lg font-bold">Lusaka Office</h1>
                            <p>2nd Floor Mukuba Pensions  House</p>
                            <p>Box. 32616 </p>
                            <p class="font-bold pb-2">Lusaka, Zambia</p>
                            <p>Email: sgzam@sherwoodgreene.com</p>
                            <p>Tel: +260 211 255 604/5</p>
                        </div>
                        <div class="pt-4">
                            <h1 class="text-lg font-bold"> Kitwe Office</h1>
                                <p>Unit #1, Lubambe Shopping Centre</p>
                                <p>P.O.Box. 249 Parklands </p>
                                <p class="font-bold pb-2">Kitwe, Zambia</p>

                                <p>Email: sgzamkt@sherwoodgreene.com</p>
                                <p>Tel: +260 212 228 880/2/1</p>
                        </div>
                        <div class="pt-4">
                            <h1 class="text-lg font-bold"> Ndola Office</h1>
                            <p>President Avenue</p>
                            <p> Beverley House</p>
                            <p>P.O.Box. 71919 </p>
                            <p class="font-bold pb-2">Ndola, Zambia</p>
                            <p>Email: sgzam@sherwoodgreene.com</p>
                            <p>Tel: +260 212 612153/4</p>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
