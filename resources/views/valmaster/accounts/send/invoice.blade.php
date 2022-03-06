<x-app-layout>
    <x-slot name="header">

        <x-nav-links.accounts></x-nav-links.accounts>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                   <div class="grid grid-cols-4 gap-4">
                       <h1 class="col-start-2 col-span-2 text-center text-3xl font-bold"> Sherwood Greene Properties Limited </h1>
                       <x-application-logo class="col-end-4 col-span-1 block h-10 w-auto fill-current text-gray-600" />

                       <h1 class="col-start-2 col-span-2 text-center text-2xl font-semibold font-serif text-red-400 opacity-75">
                           INVOICE
                       </h1>


                       <div class="col-start-1 col-span-2">
                           <p>Mukuba Pensions  House</p>
                           <p>Box. 32616 | Tel: +260 211 255 604/5</p>
                           <p>Email: sgzam@sherwoodgreene.com</p>
                       </div>


                       <div class="col-start-3 col-span-1 text-right font-bold font-mono">


                               <h3>Date:</h3>
                               <h3>Invoice #:</h3>
                               <h3>For:</h3>


                       </div>
                       <div class="col-start-4 col-span-2 text-left font-semibold">


                           <h3>{{ date('M d, Y')}}</h3>
                           <h3>3647</h3>
                           <h3>Fatima. C. Kasese</h3>


                       </div>


                       <div class="col-start-1 col-end-1 fst-italic ">
                           <p>Fatima. C. Kasese</p>
                           <p>House No.16</p>
                           <p>Amber Road Kamwala South</p>
                           <p>Lusaka</p>
                       </div>

                       {{--Contact Number--}}
                       <div class="col-start-1 col-span-4 bg-slate-200">
                           <p>Contact Number: 0972000403</p>
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
                       <div class="col-start-1 col-end-1 bg-green-100">
                           <h2 class="font-bold uppercase font-serif">Bank Details</h2>
                           <p>Fatima. C. Kasese</p>
                           <p>House No.16</p>
                           <p>Amber Road Kamwala South</p>
                           <p>Lusaka</p>
                       </div>

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
