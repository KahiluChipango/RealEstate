
<div class="row">
    <div class="col-12">
        <div class="float-start hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">

           <x-nav-link :href="route('/')" :active="request()->routeIs('/')">
                             {{ __('Home') }}
           </x-nav-link>

        </div>
    </div>
</div>
