
<div class="row">
    <div class="col-12">
        <div class="float-start hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">

           <x-nav-link :href="route('/')" :active="request()->routeIs('/')">
                             {{ __('Home') }}
           </x-nav-link>

           <x-nav-link :href="route('/')" :active="request()->routeIs('/')">
               {{ __('Client Details') }}
           </x-nav-link>
            <x-nav-link :href="route('/')" :active="request()->routeIs('/')">
               {{ __('Due Date/Time') }}
           </x-nav-link>
            <x-nav-link :href="route('/')" :active="request()->routeIs('/')">
               {{ __('Assigned Personel') }}
           </x-nav-link>

        </div>
        <a class="btn btn-sm btn-success float-end" href="{{ route('valmaster.accounts.create') }}" role="button">ADD NEW CLIENT</a>
    </div>
</div>
