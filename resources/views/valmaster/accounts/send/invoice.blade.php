<x-app-layout>
    <x-slot name="header">

        <x-nav-links.accounts></x-nav-links.accounts>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                   <div class="grid grid-cols-4 gap-4">
                       <h1 class="col-start-2 col-span-2 bg-teal-600 text-center"> Sherwood Green Properties Limited </h1>
                       <x-application-logo class="col-end-4 col-span-1 block h-10 w-auto fill-current text-gray-600" />

                       <h1 class="col-start-2 col-span-2 bg-teal-600 text-center"> INVOICE </h1>
                       <div class="col-start-1 col-span-2 bg-green-100">
                           <p>Mukuba Pensions  House</p>
                           <p>Box. 32616 | Tel: +260 211 255 604/5</p>
                           <p>Email: sgzam@sherwoodgreene.com</p>
                       </div>


                       <div class="col-start-3 col-span-1 bg-lime-600 text-right">


                               <h3>Date:</h3>
                               <h3>Invoice:</h3>
                               <h3>For:</h3>


                       </div>
                       <div class="col-start-4 col-span-2 bg-lime-600 text-right">


                               <h3>Date:</h3>
                               <h3>Invoice:</h3>
                               <h3>For:</h3>


                       </div>


                       <div class="col-start-1 col-end-1 bg-green-100">
                           <p>Fatima. C. Kasese</p>
                           <p>House No.16</p>
                           <p>Amber Road Kamwala South</p>
                           <p>Lusaka</p>
                       </div>

                       {{--Contact Number--}}
                       <div class="col-start-1 col-span-4 bg-slate-200">
                           <p>Contact Nmumber: 0972000403</p>
                       </div>

                       {{--Discription and amounts table--}}
                       <div class="col-start-1 col-span-4 bg-slate-200">
                           <table>
                               <thead>
                               <tr>
                                   <th class="col-start-1 col-span-3">Song</th>
                                   <th>Artist</th>

                               </tr>
                               </thead>
                               <tbody>
                               <tr>
                                   <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                                   <td>Malcolm Lockyer</td>
                               </tr>
                               <tr>
                                   <td>Witchy Woman</td>
                                   <td>The Eagles</td>
                               </tr>
                               <tr>
                                   <td>Shining Star</td>
                                   <td>Earth, Wind, and Fire</td>
                               </tr>
                               </tbody>
                           </table>
                       </div>

                       {{-- Bank Details --}}
                       <div class="col-start-1 col-end-1 bg-green-100">
                           <p>Fatima. C. Kasese</p>
                           <p>House No.16</p>
                           <p>Amber Road Kamwala South</p>
                           <p>Lusaka</p>
                       </div>

                       {{-- Footer --}}
                       <div class="col-start-1 col-span-4 bg-teal-600">
                           <p> Make all checks payable to Sherwood Greene Properties Limited </p>
                           <p>If you have any questions concerning this invoice, contact Mwansa Ngosa or</p>
                           <p>Chileshe Musonda on +260977708100 or mwansa.ngosa@sherwoodgreene.com</p>

                       </div>

                       <h1 class="col-start-2 col-span-2 bg-teal-600 text-center"> 'THANK YOU FOR YOUR BUSINESS!' </h1>

                   </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
