
<div class="row">
    <div class="col-12">
        <div class="float-start hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">

           <x-nav-link :href="route('valmaster.super-admin.index')" :active="request()->routeIs('valmaster.super-admin.index')">
                             {{ __('Home') }}
           </x-nav-link>

           <x-nav-link :href="route('valmaster.front-desk.index')" :active="request()->routeIs('valmaster.front-desk.index')">
               {{ __('Front Desk') }}
           </x-nav-link>
            <x-nav-link :href="route('/')" :active="request()->routeIs('/')">
               {{ __('Accounts') }}
           </x-nav-link>
            <x-nav-link :href="route('/')" :active="request()->routeIs('/')">
               {{ __('Agency') }}
           </x-nav-link>

        </div>
        <a class="btn btn-sm btn-success float-end" href="{{ route('valmaster.super-admin.create') }}" role="button">Add New User</a>
    </div>
</div>
