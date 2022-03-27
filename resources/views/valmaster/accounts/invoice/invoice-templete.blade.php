<x-app-layout>
    <x-slot name="header">

        <x-nav-links.accounts></x-nav-links.accounts>
    </x-slot>
    <div class="row">
        <div class="col-12">
            <div class="float-end hidden space-x-3 sm:-my-px sm:ml-10 sm:flex">
                <a class="float-end inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-cyan-600 hover:bg-cyan-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                   href="{{ route('valmaster.accounts.download.invoice',  $client->id) }}"
                   role="button">
                    Download
                </a>
                <a class="float-end inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-cyan-600 hover:bg-cyan-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                   href="{{ route('valmaster.accounts.email.invoice', $client->id) }}"
                   role="button">
                    Send Email
                </a>
                <a class="float-end inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-cyan-600 hover:bg-cyan-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                   href=""
                   role="button">
                    Send SMS
                </a>
            </div>

            @if(session()->has('Update'))
                <div class="bg-green-200 rounded-lg xl:w-96 float-md-start text-base text-green-700 inline-flex items-center w-full mb-2" role="alert">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle" class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
                    </svg>
                    {{ session('Update') }}
                </div>
            @endif
        </div>
    </div>


    <div class="py-4 bg-green-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="grid grid-cols-4 gap-4">
                        <h1 class="col-start-2 col-span-2 text-center text-3xl font-bold"> Sherwood Greene Properties Limited </h1>
                        <x-application-logo class="col-end-4 col-span-1 block h-10 w-auto fill-current text-gray-600" />

                        <h1 class="col-start-2 col-span-2 text-center text-2xl font-semibold font-serif text-red-400 opacity-75">
                            INVOICE
                        </h1>


                        {{-- Branch Addres--}}
                        @if($client->branch == 'LSK')
                            <div class="col-start-1 col-span-2">
                                <p>Mukuba Pensions  House</p>
                                <p>Box. 32616 | Tel: +260 211 255 604/5</p>
                                <p>Email: sgzam@sherwoodgreene.com</p>
                            </div>
                        @elseif($client->branch == "NDL")
                            <div class="col-start-1 col-span-2">
                                <p>President Avenue</p>
                                <p> Beverley House</p>
                                <p>P.O.Box. 71919 | Tel: +260 212 612153/4</p>
                                <p>Email: sgzam@sherwoodgreene.com</p>
                            </div>
                        @elseif($client->branch == 'KT')
                            <div class="col-start-1 col-span-2">
                                <p>Unit #1, Lubambe Shopping Centre</p>
                                <p>P.O.Box. 249 Parklands | Tel: +260 212 228 880/2/1</p>
                                <p>Email: sgzamkt@sherwoodgreene.com</p>
                            </div>
                        @elseif($client->branch == "HAR")
                            <div class="col-start-1 col-span-2">
                                <p>Mukuba Pensions  House</p>
                                <p>Box. 32616 | Tel: +260 211 255 604/5</p>
                                <p>Email: sgzam@sherwoodgreene.com</p>
                            </div>
                        @endif



                        <div class="col-start-3 col-span-1 text-right font-bold font-mono">


                            <h3>Date:</h3><h3>{{ date('M d, Y')}}</h3>
                            <h3>Invoice #:</h3>
                            <h3>For:</h3>


                        </div>
                        <div class="col-start-4 col-span-2 text-left font-semibold">


                            <h3>{{ date('M d, Y')}}</h3>
                            <h3>{{$client->branch}}{{$client->id}}</h3>
                            <h3> {{ $client->client_name }}</h3>


                        </div>


                        <div class="col-start-1 col-end-1 fst-italic ">
                            <p> {{ $client->client_name }}</p>
                            <p> {{ $client->property_address }}</p>

                        </div>

                        {{--Contact Number--}}
                        <div class="col-start-1 col-span-4 bg-slate-200">
                            <p>Contact Person: {{ $client->contact_person }}</p>
                        </div>
                        <div class="col-start-1 col-span-4 bg-slate-200">
                            <p>Contact Number: {{ $client->contact_number }}</p>
                        </div>


                        {{--Discription and amounts table--}}


                        <div class="col-start-1 col-span-4 row-cols-1 border border-dark">
                            <table>
                                <thead class="border border-slate-300 ">
                                <tr>
                                    <th class="px-9">Description</th>
                                    <th class="border border-slate-300 ">Amount</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td class="border border-slate-300 ...">Indiana</td>
                                    <td class="border border-slate-300 ...">Indianapolis</td>
                                </tr>
                                <tr>
                                    <td class="border border-slate-300 ...">Ohio</td>
                                    <td class="border border-slate-300 ...">Columbus</td>
                                </tr>
                                <tr>

                                    <td class="border border-slate-300 ...">Detroit</td>
                                </tr>
                                </tbody>

                            </table>

                        </div>




                        {{-- Bank Details --}}
                        @if($client->branch == 'LSK')
                            <div class="col-start-1 col-span-2">
                                <h2 class="font-bold uppercase font-serif">Bank Details</h2>
                                <p>Bank Name: <b>STANBIC BANK</b></p>
                                <p>Account Name: <b>SHERWOOD GREENE</b></p>
                                <p>Account Number: <b>9130000328050</b></p>
                                <p>Branch: <b>MULUNGUSHI</b></p>
                                <p>Swift Code: <b>SBICZMLX</b></p>
                                <p>Sort Code: <b>040015</b></p>
                            </div>
                        @elseif($client->branch == "NDL")
                            <div class="col-start-1 col-span-2">
                                <h2 class="font-bold uppercase font-serif">Bank Details</h2>
                                <p>Bank Name: <b>ACCESS BANK</b></p>
                                <p>Account Name: <b>SHERWOOD GREENE</b></p>
                                <p>Account Number: <b>0010011011091</b></p>
                                <p>Branch: <b>CAIRO RD, NORTHEND</b></p>
                                <p>Swift Code: <b>AZAMZMLU</b></p>
                                <p>Sort Code: <b>350001</b></p>
                            </div>
                        @elseif($client->branch == 'KT')
                            <div class="col-start-1 col-span-4">
                                <h2 class="font-bold uppercase font-serif">Bank Details</h2>
                                <p>Bank Name: <b>ABSA BANK ZAMBIA</b></p>
                                <p>Account Name: <b>SHERWOOD GREENE</b></p>
                                <p>Account Number: <b>009-1014963 </b></p> <p>Swift Code: <b>BARCMLX</b></p> <p>Sort Code: <b>040015</b></p>
                                <p>Dollar Account: <b>1046762</b> </p> <p>Swift Code: <b>BARCZMLX</b></p> <p>Sort Code: <b>02-00-01</b></p>
                                <p>Branch: <b>KITWE</b></p>

                            </div>
                        @elseif($client->branch == "HAR")
                            <div class="col-start-1 col-span-2">
                                <h2 class="font-bold uppercase font-serif">Bank Details</h2>
                                <p>Mukuba Pensions  House</p>
                                <p>Box. 32616 | Tel: +260 211 255 604/5</p>
                                <p>Email: sgzam@sherwoodgreene.com</p>
                            </div>
                        @endif



                        {{-- Footer --}}
                        <div class="col-start-1 col-span-4 font-semibold">
                            <p> Make all checks payable to <b>Sherwood Greene Properties Limited</b> </p>
                            <p>If you have any questions concerning this invoice, contact Mwansa Ngosa or</p>
                            <p>Chileshe Musonda on +260977708100 or mwansa.ngosa@sherwoodgreene.com</p>

                        </div>

                        <h1 class="col-start-2 col-span-2 text-center font-bold font-sans text-xl"> 'THANK YOU FOR YOUR BUSINESS!' </h1>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
