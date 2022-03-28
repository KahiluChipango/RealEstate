<x-app-layout>
    <x-slot name="header">

        <x-nav-links.admin></x-nav-links.admin>
    </x-slot>
    <div class="row">
        <div class="col-12">
            <div class="float-end hidden space-x-3 sm:-my-px sm:ml-10 sm:flex">
                <a class="float-end inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-cyan-600 hover:bg-cyan-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                   {{--href="{{ route('valmaster.accounts.download.invoice',  $client->id) }}"--}}
                   role="button"
                   id="download-invoice">
                    Download
                </a>
                <a class="float-end inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-cyan-600 hover:bg-cyan-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                   {{-- href="{{ route('valmaster.accounts.email.invoice', $client->id) }}"--}}
                   id="email-invoice"
                   role="button">
                    Send Email
                </a>
                <a class="float-end inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-cyan-600 hover:bg-cyan-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                   href=""
                   role="button">
                    Send SMS
                </a>
            </div>

            @if(session()->has('EmailInvoice'))
                <div class="bg-green-200 rounded-lg xl:w-96 float-md-start text-base text-green-700 inline-flex items-center w-full mb-2" role="alert">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle" class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
                    </svg>
                    {{ session('EmailInvoice') }}
                </div>
            @endif
        </div>
    </div>


    <div class="py-4 bg-green-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">



                    {{-- Enter Description Area For Download--}}
                    <form action="{{ route('valmaster.accounts.download.invoice',  $client->id) }}">
                        <div class="bg-black bg-opacity-50 absolute inset-0 hidden justify-center items-center"
                             id="overlay">
                            <div class="bg-gray-200 max-w-sm py-2 px-3 rounded shadow-xl text-gray-800">
                                <div class="flex justify-between items-center">

                                    <h4 class="text-lg font-bold">Enter Description.</h4>

                                    <svg class="h-6 w-6 cursor-pointer p-1 hover:bg-gray-300 rounded-full" id="close-modal" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div class="mt-2 text-sm input-group relative flex flex-wrap items-stretch ">
                                  <textarea
                                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                      id="exampleFormControlTextarea1"
                                      rows="3"
                                      placeholder="Description"
                                      name="description"
                                  ></textarea>
                                </div>
                                <div class="mt-3 flex justify-end space-x-3">
                                    <button class="px-3 py-1 rounded hover:bg-red-300 hover:bg-opacity-50 hover:text-red-900"
                                            id="cancel"
                                            role="button">Cancel</button>
                                    <button class="px-3 py-1 text-sm font-medium rounded-md text-white bg-cyan-600 hover:bg-cyan-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 rounded"
                                            type="submit"
                                            id="desBtn">
                                        Download
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>


                    {{-- Enter Description Area For Email--}}
                    <form action="{{ route('valmaster.accounts.email.invoice', $client->id) }}">
                        <div class="bg-black bg-opacity-50 absolute inset-0 hidden justify-center items-center"
                             id="overlayemail">
                            <div class="bg-gray-200 max-w-sm py-2 px-3 rounded shadow-xl text-gray-800">
                                <div class="flex justify-between items-center">

                                    <h4 class="text-lg font-bold">Enter Description.</h4>

                                    <svg class="h-6 w-6 cursor-pointer p-1 hover:bg-gray-300 rounded-full" id="close-email-modal" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div class="mt-2 text-sm input-group relative flex flex-wrap items-stretch ">
                                  <textarea
                                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                      id="exampleFormControlTextarea1"
                                      rows="3"
                                      placeholder="Description"
                                      name="email-description"
                                  ></textarea>
                                </div>
                                <div class="mt-3 flex justify-end space-x-3">
                                    <button class="px-3 py-1 rounded hover:bg-red-300 hover:bg-opacity-50 hover:text-red-900"
                                            id="cancel-email"
                                            role="button">Cancel</button>
                                    <button class="px-3 py-1 text-sm font-medium rounded-md text-white bg-cyan-600 hover:bg-cyan-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 rounded"
                                            type="submit"
                                            id="send-email">
                                        Send Email
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>

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


                            <h3>Date:</h3>
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
                        <div class="col-start-1 col-span-4 ">
                            <p><strong>Contact Person:</strong> {{ $client->contact_person }}</p>
                        </div>
                        <div class="col-start-1 col-span-4 ">
                            <p><strong>Contact Number:</strong>  {{ $client->contact_person_number }}</p>
                        </div>


                        {{--Discription and amounts table--}}


                        <div class="col-start-1 col-span-3 row-cols-1 border border-dark">
                            <table class="min-w-full  col-span-3">
                                <thead class="border-b ">
                                <tr>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 font-bold text-left col-span-2">
                                        Description
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 font-bold text-right">
                                        Amount
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="bg-white border-b">

                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap col-span-3">
                                        Description Will Appear here on the Downloaded or E-Mail PDF
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

    <script>
        window.addEventListener('DOMContentLoaded', () =>{
            const overlay = document.querySelector('#overlay')
            const overlayemail = document.querySelector('#overlayemail')
            const saveBtn = document.querySelector('#download-invoice')
            const emailBtn = document.querySelector('#email-invoice')
            const closeBtn = document.querySelector('#close-modal')
            const closeEmailBtn = document.querySelector('#close-email-modal')
            const cancelBtn = document.querySelector('#cancel')
            const cancelEmailBtn = document.querySelector('#cancel-email')
            const desBtn = document.querySelector('#desBtn')
            const sendEmailBtn = document.querySelector('#send-email')


            const toggleModal = () => {
                overlay.classList.toggle('hidden')
                overlay.classList.toggle('flex')

            }
            const emailToggleModal = () => {
                overlayemail.classList.toggle('hidden')
                overlayemail.classList.toggle('flex')

            }


            desBtn.addEventListener('click', toggleModal)
            saveBtn.addEventListener('click', toggleModal)
            cancelBtn.addEventListener('click', toggleModal)
            closeBtn.addEventListener('click', toggleModal)
            cancelEmailBtn.addEventListener('click', emailToggleModal)
            closeEmailBtn.addEventListener('click', emailToggleModal)
            emailBtn.addEventListener('click', emailToggleModal)
            sendEmailBtn.addEventListener('click', emailToggleModal)
        })
    </script>
</x-app-layout>
