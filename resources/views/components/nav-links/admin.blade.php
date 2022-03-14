
<div class="row">
    <div class="col-12">
        <div class="float-end hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">

           <x-nav-link href="https://wealthvaluations.rmbprivatebank.com/valuations/login" target="_blank">
                             {{ __('COMMERCIAL PORTAL ') }}
           </x-nav-link>

           <x-nav-link href="https://www.fnbpvn.co.za" target="_blank">
               {{ __('RESIDENTIAL PORTAL') }}
           </x-nav-link>

       </div>

        <div class="float-start hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">

            <x-nav-link :href="route('/')" :active="request()->routeIs('/')">
                {{ __('Home') }}
            </x-nav-link>

        </div>

    </div>
</div>
