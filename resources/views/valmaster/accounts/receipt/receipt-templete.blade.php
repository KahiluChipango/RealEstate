<x-app-layout>
    <x-slot name="header">

        <x-nav-links.accounts></x-nav-links.accounts>
    </x-slot>
    <div class="row">
        <div class="col-12">
            <div class="float-end hidden space-x-3 sm:-my-px sm:ml-10 sm:flex">
                <a class="float-end inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-cyan-600 hover:bg-cyan-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                   href="{{ route('valmaster.accounts.receipt.save-receipt',  $client->id) }}"
                   role="button">
                    Download
                </a>
                <a class="float-end inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-cyan-600 hover:bg-cyan-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                   href="{{ route('valmaster.accounts.receipt.mail-receipt', $client->id) }}"
                   role="button">
                    Send Email
                </a>
             {{--   <a class="float-end inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-cyan-600 hover:bg-cyan-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                   href="{{ route('valmaster.accounts.incoice.send-sms', $client->id) }}"
                   role="button">
                    Send SMS
                </a>--}}


            </div>
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
                                    First
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="bg-white border-b">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 text-right font-bold">
                                    In Respect of:
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap col-span-2">
                                    Mark
                                </td>

                            </tr>
                            <tr class="bg-white border-b">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 text-right font-bold">
                                    Received By:
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    Jacob
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
